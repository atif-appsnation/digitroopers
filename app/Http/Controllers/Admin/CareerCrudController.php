<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CareerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\URL;



/**
 * Class CareerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CareerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Career::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/career');
        CRUD::setEntityNameStrings('career', 'careers');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::column('id');
        CRUD::column('name');
        CRUD::column('email');
        CRUD::column('phone');
        CRUD::column('file')->type('url');
        // CRUD::addColumn(
        //     [   // Upload
        //         'name'      => 'file',
        //         'label'     => 'File',
        //         'type'      => 'url',
        //         // 'upload'    => true,
        //         // 'disk'      => "uploads", // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        //         // optional:
        //         // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
           
        //         // 'prefix' => URL::to('/').'/uploads/uploads/',
        //     ],
        //     'both'
        // );
        CRUD::column('jobrole');
        CRUD::column('position');
       
        // CRUD::column('file');

        // CRUD::column('created_at');
        // CRUD::column('updated_at');

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
        CRUD::setValidation(CareerRequest::class);

        // CRUD::field('id');
        CRUD::field('name');
        CRUD::field('email');
        CRUD::field('phone');
        CRUD::field('jobrole');
        CRUD::field('position');
        $this->crud->addColumn(
            [   // Upload
                'name'      => 'file',
                'label'     => 'File',
                'type'      => 'url',
                // 'upload'    => true,
                // 'disk'      => "uploads", // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
           
                'prefix' => URL::to('/').'/uploads/uploads',
            ],
            'both'
        );
        // CRUD::field('created_at');
        // CRUD::field('updated_at');

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
