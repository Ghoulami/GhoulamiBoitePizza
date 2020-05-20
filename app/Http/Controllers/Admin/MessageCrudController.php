<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MessageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MessageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MessageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Message');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/message');
        $this->crud->setEntityNameStrings('message', 'messages');
        //$this->crud->denyAccess(['create','update']);
    }

    protected function setupListOperation()
    {
        $f1 = [
            'name' => 'id',
            'type' => 'text',
            'label' => 'Id',
        ];

        $f2 = [
            'name' => 'objet',
            'type' => 'text',
            'label' => 'Objet',
        ];

        $f3 = [
            'name' => 'datetime',
            'type' => 'datetime',
            'label' => 'Date',
        ];

        $f4 = [
            'name' => 'vu',
            'label' => 'Vu',
            'type' => 'boolean',
        ];
        $f5 = [
            'name' => 'client_id',
            'label' => 'Client',
            'type' => 'select2',
            'entity'    => 'client',
            'attribute' => 'nom',
        ];

        $this->crud->addColumns([$f1, $f2, $f3, $f4, $f5]);
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(MessageRequest::class);

        $f2 = [
            'name' => 'objet',
            'type' => 'text',
            'label' => 'Objet',
        ];

        $f3 = [
            'name' => 'message',
            'type' => 'message',
            'type' => 'ckeditor',
            'placeholder' => 'Message ici ...',
        ];

        $f4 = [
            'name' => 'vu',
            'label' => 'Vu',
            'type' => 'boolean',
        ];
        $f5 = [
            'name' => 'client_id',
            'label' => 'Client',
            'type' => 'text',
            'entity'    => 'client',
            'attribute' => 'nom',
        ];

        $this->crud->addFields([ $f2, $f3, $f4, $f5]);
        
        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(MessageRequest::class);

        $f2 = [
            'name' => 'objet',
            'type' => 'text',
            'label' => 'Objet',
        ];

        $f3 = [
            'name' => 'message',
            'type' => 'message',
            'type' => 'ckeditor',
            'placeholder' => 'Message ici ...',
        ];

        $f4 = [
            'name' => 'vu',
            'label' => 'Vu',
            'type' => 'boolean',
        ];
        $f5 = [
            'name' => 'client.id',
            'label' => 'Client',
            'type' => 'select',
        ];

        $this->crud->addFields([$f2, $f3, $f4, $f5]);
    }
}
