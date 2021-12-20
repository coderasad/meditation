<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseStubRequest;
use App\Models\CourseStub;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CourseStubCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseStubCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
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
        CRUD::setModel(\App\Models\CourseStub::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course-stub');
        CRUD::setEntityNameStrings('course stub', 'course stubs');
        $this->crud->denyAccess(['update']);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'row_number',
            'type' => 'row_number',
            'label' => 'Si',
            'orderable' => false,
            'priority' => 1,
        ]);

        CRUD::addColumn([
            'name' => 'event_id',
            'entity' => 'event',
        ]);
        $this->crud->addColumn([    // SELECT2
            'name' => 'type',
            'type' => 'select_from_array',
            'options' =>
                [
                    'indivisual_session' => 'Indivisual Session',
                    'featured_events' => 'Featured Events',
                    'popular_course' => 'Popular Course',
                    'popular_session' => 'Popular Session'
                ]
        ]);

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
        CRUD::setValidation(CourseStubRequest::class);
        $this->crud->addField([    // SELECT2
            'name' => 'type',
            'type' => 'select_from_array',
            'options' =>
                [
                    'indivisual_session' => 'Indivisual Session',
                    'featured_events' => 'Featured Events',
                    'online_course' => 'Online Course',
                    'popular_session' => 'Popular Session'
                ]
        ]);
        $this->crud->addField([    // SELECT2
            'name' => 'category_id',
            'type' => 'select2',
            'entity' => 'category',
        ]);

        $this->crud->addField([ // select2_from_ajax: 1-n relationship
            'type' => 'select2_from_ajax_multiple',
            'name' => 'event_id',
            'entity' => 'event',
            'attribute' => 'title',
            'data_source' => url('api/event'),
            'placeholder' => 'Select an article',
            'include_all_form_fields' => true,
            'minimum_input_length' => 0,
            'dependencies' => ['category'],
        ]);


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

    public function store(CourseStubRequest $request)
    {
//        dd($request->event_id);
        if ($request->event_id) {
            foreach ($request->event_id as $event_id) {
                $existence = CourseStub::where(['type' => $request->type, 'event_id' => $event_id])->first();
                if(!$existence){
                    $response = CourseStub::create(['type' => $request->type, 'category_id' => $request->category_id, 'event_id' => $event_id]);
                }
            }

            return redirect('/admin/course-stub');
        }else{
            return redirect()->back();
        }
    }

    protected function setupShowOperation()
    {
        $this->crud->setShowContentClass('col-md-12');
        $this->setupListOperation();
    }
}
