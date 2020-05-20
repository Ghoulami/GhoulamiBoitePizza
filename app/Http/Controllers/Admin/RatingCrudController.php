<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RatingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RatingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RatingCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Rating');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/rating');
        $this->crud->setEntityNameStrings('rating', 'ratings');
    }

    protected function setupListOperation()
    {
        $f1 = [
            'name' => 'id',
            'type' => 'text',
            'label' => 'Id',
        ];

        $f2 = [
            'name' => 'rat',
            'type' => 'text',
            'label' => 'Rat',
        ];

        $f5 = [
            'name' => 'client_id',
            'label' => 'Client',
            'type' => 'select2',
            'entity'    => 'client',
            'attribute' => 'nom',
        ];

        $this->crud->addColumns([$f1, $f2, $f5]);
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(RatingRequest::class);
        $f2 = [
            'name' => 'rat',
            'type' => 'number',
            'label' => 'Rat',
            'decimals' => 2,
            'dec_point' => ',',
        ];

        $f5 = [
            'name' => 'client_id',
            'label' => 'Client',
            'type' => 'select2',
            'entity'    => 'client',
            'attribute' => 'nom',
        ];

        $this->crud->addFields([$f2, $f5]);
        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(RatingRequest::class);
        $f2 = [
            'name' => 'rat',
            'type' => 'number',
            'label' => 'Rat',
            'decimals' => 2,
            'dec_point' => ',',
        ];

        $f5 = [
            'name' => 'client_id',
            'label' => 'Client',
            'type' => 'select2',
            'entity'    => 'client',
            'attribute' => 'nom',
        ];

        $this->crud->addFields([$f2, $f5]);
    }
}
