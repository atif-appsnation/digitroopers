<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MetabankRequest;
use App\Models\Lead;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use function PHPSTORM_META\type;

/**
 * Class MetabankCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MetabankCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Metabank::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/metabank');
        CRUD::setEntityNameStrings('metabank', 'metabanks');
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
        CRUD::column('slug');
        // CRUD::column('title')->lable('Name');
        
        // CRUD::column('description');
        CRUD::addColumn([
            'name' => 'title',
            'label' => 'Meta Name',
        ]);
        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Title/Content',
        ]);
        CRUD::column('type');
        CRUD::column('sts');
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
        CRUD::setValidation(MetabankRequest::class);

        // CRUD::field('id');
        CRUD::addField([
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'select_from_array',

            'options' => [
                'Main' => 'Main',
                'Aboutus' => 'Aboutus',
                'Contactus' => 'Contactus',
                'Insights' => 'Insights',
                'Packages' => 'Packages',
                'Portfolio' => 'Portfolio',
                'Ourprocess' => 'Ourprocess',
                'Clients' => 'Clients',
                'Testimonial' => 'Testimonial',
                'Career' => 'Career',
                'Designing' => 'Designing',
                'WebDevelopment' => 'WebDevelopment',
                'SocialMedia' => 'SocialMedia',
                'Seo' => 'Seo',
                'EmailMarketing' => 'EmailMarketing',
                'PaidMarketing' => 'PaidMarketing',
                'Ecommerce' => 'Ecommerce',
                //innerpages

                'FlickSoccer' => 'FlickSoccer',
                'RealState' => 'RealState',
                'HomeStore' => 'HomeStore',
                'RideShare' => 'RideShare',

                // insights inner pages
                'CommonPPC' => 'CommonPPC',
                'SmartPPC' => 'SmartPPC',
                'TypePPC' => 'TypePPC',
                'OnlineFoundation' => 'OnlineFoundation',
                'LocalSeo' => 'LocalSeo',
                'OutRanking' => 'OutRanking',
                'OptimizeBusiness' => 'OptimizeBusiness',
                'JqueryHistory' => 'JqueryHistory',
                'ExpireHeaders' => 'ExpireHeaders',

                //additional pages
                'TermsAndConditions' => 'TermsAndConditions',
                'PrivacyPolicy' => 'PrivacyPolicy',


            ],

            'allows_null' => false,

        ]);
        // CRUD::field('title');
        CRUD::addField([
            'name' => 'title',
            'label' => 'Meta Name',
            
        ]);

        // CRUD::addField([
        //     'name'  => 'description',
        //     'label' => 'Description',
        //     'type'  => 'tinymce',
        // ]);

        // CRUD::field('description');

        CRUD::addField([
            'name' => 'description',
            'label' => 'Title/Content',
        ]);
        CRUD::addField([
            'name' => 'type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => ['Tag' => 'Tag', 'Meta' => 'Meta'],
            'allows_null' => false,

        ]);
        // CRUD::field('type');
        CRUD::field('sts');
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
