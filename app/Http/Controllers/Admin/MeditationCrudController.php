<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MeditationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MeditationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MeditationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Meditation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/meditation');
        CRUD::setEntityNameStrings('meditation', 'meditations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        // CRUD::column('meditation_type_id');
        CRUD::addColumn([
            'name' => 'meditation_type_id',
            'entity' => 'meditation_type',
        ]);
        // CRUD::column('description');
        CRUD::column('contribution_fee');
        CRUD::column('starting_date');
        CRUD::column('ending_date');
        CRUD::column('image')->type('image');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MeditationRequest::class);

        CRUD::field('title');
        // CRUD::field('meditation_type_id');
        $this->crud->addField([    // SELECT2
            'label'         => 'Meditation Type',
            'type'          => 'select',
            'name'          => 'meditation_type_id',
            'entity'        => 'meditation_type',
            'attribute'     => 'title',
            // 'model'     => "App\Models\Category",
        ]);
        $this->crud->addField(
            [   // CKEditor
                'name'          => 'description',
                'label'         => 'Description',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 200,
                    'autoGrow_bottomSpace' => 50,
                    'removePlugins'        => 'resize,maximize',
                ]
            ]
        );
        CRUD::addField([
            'name' => 'contribution_fee',
            "type" => "number"
        ]);
        CRUD::field('starting_date');
        CRUD::field('ending_date');
        CRUD::field('image')->type('image');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->crud->setShowContentClass('col-md-12');
        $this->setupListOperation();
    }
}
