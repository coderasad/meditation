<?php


namespace App\Models\Mutators;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

trait ImageMutator
{
    protected $destination_path = '';

    /**
     * @param $value
     */
    public function setImageAttribute($value)
    {

        $this->destination_path = config('backpack.base.root_disk_base')
            . '/images/'
            . strtolower(class_basename(get_class($this)));
        $attribute_name = "image";

        // or use your own disk, defined in config/filesystems.php
        $disk = config('backpack.base.root_disk_name', 'public_uploads');
        // destination path relative to the disk above
        $destination_path = $this->destination_path ?? config('backpack.base.root_disk_base');


        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            Storage::disk($disk)->delete('public' . $this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (Str::startsWith($value, 'data:image')) {
            $extension = explode('/', mime_content_type($value))[1];
            // 0. Make the image
            $image = Image::make($value)->encode($extension, 90);

            // 1. Generate a filename.
            $filename = md5($value . time()) . '.'.$extension;

            // 2. Store the image on disk.
            Storage::disk($disk)->put($destination_path . '/' . $filename, $image->stream());

            //if not static image
            if ($this->{"old_" . $attribute_name} !== 'backend/image/no-preview.png') {
                // 3. Delete the previous image, if there was one.
                Storage::disk($disk)->delete('public' . $this->{"old_" . $attribute_name});
            }
            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', '', $destination_path);
            $this->attributes[$attribute_name] = $public_destination_path . '/' . $filename;
        }
    }

    public function getImageAttribute($value)
    {
        return asset('').$value;
    }
}
