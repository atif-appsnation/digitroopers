<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LeadRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LeadCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LeadCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Lead::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/lead');
        CRUD::setEntityNameStrings('lead', 'leads');
        // CRUD::enableExportButtons();
       
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
      $this->crud->enableExportButtons();
      $this->crud->addFilter([
          'type'  => 'date',
          'name'  => 'created_at',
          'label' => 'Date'
        ],
          true,
        function ($value) { // if the filter is active, apply these constraints
          $this->crud->addClause('where', 'created_at','LIKE', '%'.$value.'%');
        });
        CRUD::column('id');
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('mobile');
        CRUD::column('service');
        CRUD::column('company');
        CRUD::column('subject')->type('textarea');
        CRUD::column('message')->type('textarea');
        CRUD::column('created_at');
        CRUD::column('updated_at');
        // CRUD::enableExportButtons();
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
        CRUD::setValidation(LeadRequest::class);

        // CRUD::field('id');
        CRUD::field('name');
        CRUD::field('email');
        CRUD::field('mobile');
        CRUD::field('service');
        CRUD::field('company');
        CRUD::field('subject');
        CRUD::field('message');
        // CRUD::field('created_at');
        // CRUD::field('updated_at');
        // CRUD::enableExportButtons();
        
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
}
