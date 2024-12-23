<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PortfolioRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PortfolioCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PortfolioCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Portfolio::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/portfolio');
        CRUD::setEntityNameStrings('portfolio', 'portfolios');
        
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    protected function setupReorderOperation()
    {
        // model attribute to be shown on draggable items
        $this->crud->set('reorder.label', 'title');
        // $this->crud->set('reorder.label', 'id');

        // maximum number of nesting allowed
        // $this->crud->set('reorder.max_level', 2);

        // extras:
        // $this->crud->disableReorder();
        $this->crud->isReorderEnabled();
    }

    protected function setupListOperation()
    {

        $this->crud->addFilter([
            'name'  => 'type',
            'type'  => 'dropdown',
            'label' => 'Type'
        ], [
            '3D-Modeling' => '3D-Modeling',
            'Animation' => 'Animation',
            'Game' => 'Game',
            'Graphic' => 'Graphic',
            'Mobile-App' => 'Mobile-App',
            'Web' => 'Web',
            'UI/UX' => 'UI/UX',
            'Logo' => 'Logo',
        ], function ($value) { // if the filter is active
            $this->crud->addClause('where', 'type', $value);
        });
        CRUD::column('id');
        // CRUD::column('image');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',
                // 'upload'    => true,
                // 'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified

                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::column('title');
        CRUD::column('type');
        CRUD::column('comments');
        CRUD::column('is_show');

        // CRUD::column('orderby');
         $this->crud->addColumn(
            [   // Upload
                'name'      => 'lft',
                'label'     => 'Order By',
            ]
        );
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        CRUD::setValidation(PortfolioRequest::class);

        // CRUD::field('id');
        // CRUD::field('image');
        $this->crud->addField(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
            'both'
        );

        CRUD::field('title');
        // CRUD::field('type');


        $this->crud->addField(
            [   // Upload
                'name'      => 'type',
                'label'     => 'Type',
                'type'      => 'select_from_array',
                'options' => [
                    '3D-Modeling' => '3D-Modeling',
                    'Animation' => 'Animation',
                    'Game' => 'Game',
                    'Graphic' => 'Graphic',
                    'Mobile-App' => 'Mobile-App',
                    'Web' => 'Web',
                    'UI/UX' => 'UI/UX',
                    'Logo' => 'Logo',

                ],
                'allows_null' => false,
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ]
        );


        CRUD::field('comments');
        CRUD::field('is_show');


        // $this->crud->addField(
        //     [   // Upload
        //         'name'      => 'orderby',
        //         'type' => 'number',

        //         'label'     => 'Order By',
        //     ]
        // );

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
    protected function setupShowOperation()
    {
        CRUD::column('id');
        // CRUD::column('image');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',
                // 'upload'    => true,
                // 'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified

                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::column('title');
        CRUD::column('type');
        CRUD::column('comments');
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }
}
