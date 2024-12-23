<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PricingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PricingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PricingCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Pricing::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/pricing');
        CRUD::setEntityNameStrings('pricing', 'pricings');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('type');
        CRUD::column('packagetype');
        CRUD::column('slogan');
        CRUD::column('price');
        CRUD::column('duration');
        CRUD::column('description');
        CRUD::column('popular');
        CRUD::column('comments');
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
        CRUD::setValidation(PricingRequest::class);

        // CRUD::field('id');
        // CRUD::field('type');
        CRUD::addField([
            'name' => 'type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => [
                'Design' => 'Design',
                'Web Development' => 'Web Development',
                'Social Media' => 'Social Media',
                'SEO' => 'SEO',
                'Email Marketing' => 'Email Marketing',
                'Paid Marketing' => 'Paid Marketing',
                'E-Commerce Management' => 'E-Commerce Management',
                'Logo Design' => 'Logo Design',

                'Animation' => 'Animation',

                'Game Development' => 'Game Development',

                'E-Commerce Web' => 'E-Commerce Web',



            ],

            'allows_null' => false,

        ]);
        CRUD::field('packagetype');
        CRUD::field('slogan');
        CRUD::field('price');
        CRUD::field('duration');
        // CRUD::field('description');
        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'tinymce',
        ]);

        CRUD::field('popular');
        CRUD::field('comments');
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
