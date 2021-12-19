<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('order', 'orders');
        $this->crud->denyAccess(['update', 'create', 'delete']);
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('invoice_no');
        CRUD::column('amount');
        CRUD::column('transaction_id');
        CRUD::column('currency');
        CRUD::column('user_id');
        CRUD::addColumn([
            'label' => "Course title",
            'type' => "select",
            'name' => 'orderable_id',
            'entity' => 'orderable',
            'attribute' => "title",

        ]);
        CRUD::addColumn([
            'label' => "Course Type",
            'type' => "closure",
            'name' => 'orderable_type',
            'entity' => 'orderable',
            'function' => function ($entity) {
                return $entity->orderable->category->title;
            }
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
        CRUD::setValidation(OrderRequest::class);

        CRUD::field('id');
        CRUD::field('invoice_no');
        CRUD::field('amount');
        CRUD::field('transaction_id');
        CRUD::field('currency');
        CRUD::field('payment_details');
        CRUD::field('user_id');
        CRUD::field('orderable_type');
        CRUD::field('orderable_id');
        CRUD::field('deleted_at');
        CRUD::field('created_at');
        CRUD::field('updated_at');

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

        CRUD::column('invoice_no');
        CRUD::column('amount');
        CRUD::column('transaction_id');
        CRUD::column('currency');
        CRUD::addColumn([
            'name' => 'payment_details',
            'type' => 'closure',
            'function' => function ($entity) {
                $table = "<table class='table table-responsive table-striped table-hover'>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>";
                foreach (json_decode($entity->payment_details) as $key => $value) {
                    $table .= "<tr>
                                    <th>$key</th>
                                    <th>$value</th>
                                </tr>";
                }
                $table .= "</tbody></table>";

                return $table;
            }
        ]);
        CRUD::addColumn([
            'name' => 'user_id',
            'entity' => 'user',
        ]);
        CRUD::addColumn([
            'label' => "Course title",
            'type' => "select",
            'name' => 'orderable_id',
            'entity' => 'orderable',
            'attribute' => "title",

        ]);
        CRUD::addColumn([
            'label' => "Course Type",
            'type' => "closure",
            'name' => 'orderable_type',
            'entity' => 'orderable',
            'function' => function ($entity) {
                return $entity->orderable->category->title;
            }
        ]);
    }
}
