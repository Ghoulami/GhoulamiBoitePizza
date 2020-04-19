<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientUpdateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;

/**
 * Class ClientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ClientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate ; }


    public function setup()
    {
        $this->crud->setModel('App\Models\Client');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/client');
        $this->crud->setEntityNameStrings('client', 'clients');
    }

    protected function setupListOperation()
    {
        
        $col1 = [
            'name' => 'imgPath',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => 'storage/',
            'height' => '80px'
        ];

        $col2 = [
            'name' => 'nom',
            'type' => 'text',
            'label' => 'Nom',
        ];

        $col10 = [
            'name' => 'prenom',
            'type' => 'text',
            'label' => 'Prenom',
        ];
        
        $col3 = [
            'name' => 'email',
            'label' => 'email',
            'type' => 'text',
        ];
        
        $col4 = [
            'name' => 'adresse',
            'type' => 'text',
            'label' => 'adresse',
        ];
        
        $col5 = [
            'name' => 'start_date',
            'type' => 'date',
            'label' => 'Date debut',
        ];
        
        $col6 = [
            'name' => 'login',
            'type' => 'text',
            'label' => 'login',
        ];
        
        $col7 = [
            'name' => 'ca',
            'type' => 'text',
            'label' => 'Ca',
        ];

        $this->crud->addColumns([$col1,$col10,$col2,$col3,$col5,$col6]);
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        //$this->crud->setFromDb();
    }

     /**
     * Store a newly created resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Store()
    {
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->request = $this->handleMotdepasseInput($this->crud->request);
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitStore();
    }

    /**
     * Update the specified resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->request = $this->handleMotdepasseInput($this->crud->request);
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitUpdate();
    }

    /**
     * Handle password input fields.
     */
    protected function handleMotdepasseInput($request)
    {
       
        // Encrypt password if specified.
        if ($request->input('motdepasse')) {
            $request->request->set('motdepasse', Hash::make($request->input('motdepasse')));
        } else {
            $request->request->remove('motdepasse');
        }

        return $request;
    }


    protected function setupCreateOperation()
    {

        $this->crud->setValidation(ClientRequest::class);
        $col1 = [
            'name' => 'imgPath',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => 'storage/',
            'height' => '300px'
        ];

        $col2 = [
            'name' => 'nom',
            'type' => 'text',
            'label' => 'Nom',
        ];

        $col3 = [
            'name' => 'prenom',
            'type' => 'text',
            'label' => 'Prenom',
        ];

        $col4 = [
            'name' => 'email',
            'label' => 'email',
            'type' => 'text',
        ];
        $col5 = [
            'name' => 'adresse',
            'type' => 'address_algolia',
            'label' => 'adresse',
        ];
        $col6 = [
            'name' => 'start_date',
            'type' => 'date',
            'label' => 'Date debut',
        ];

        $col7 = [
            'name' => 'ca',
            'type' => 'text',
            'label' => 'Ca',
        ];

        $col8 = [
            'name' => 'login',
            'type' => 'text',
            'label' => 'login',
        ];

        $col9 = [
            'name' => 'motdepasse',
            'type' => 'password',
            'label' => 'Mot de pass',
            'default'    => Str::random(8),
        ];
        
        $this->crud->addFields([$col1, $col2,$col3, $col4 ,$col8, $col9, $col5, $col6, $col7]);

        // TODO: remove setFromDb() and manually define Fields
        //$this->crud->setFromDb();
    }

    protected function setupUpdateOperation()
    {
        $this->crud->setValidation(ClientUpdateRequest::class);
        $col1 = [
            'name' => 'imgPath',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => 'storage/',
            'height' => '300px'
        ];

        $col2 = [
            'name' => 'nom',
            'type' => 'text',
            'label' => 'Nom',
        ];

        $col3 = [
            'name' => 'prenom',
            'type' => 'text',
            'label' => 'Prenom',
        ];

        $col4 = [
            'name' => 'email',
            'label' => 'email',
            'type' => 'text',
        ];
        $col5 = [
            'name' => 'adresse',
            'type' => 'address_algolia',
            'label' => 'adresse',
        ];
        $col6 = [
            'name' => 'start_date',
            'type' => 'date',
            'label' => 'Date debut',
        ];

        $col7 = [
            'name' => 'ca',
            'type' => 'text',
            'label' => 'Ca',
        ];

        $col8 = [
            'name' => 'login',
            'type' => 'text',
            'label' => 'login',
        ];

        $col9 = [
            'name' => 'motdepasse',
            'type' => 'password',
            'label' => 'Mot de pass',
            'default'    => Str::random(8),
        ];
        
        $this->crud->addFields([$col1, $col2,$col3, $col4,$col8, $col9, $col5, $col6, $col7]);
    }


    protected function setupShowOperation()
    {

        $this->crud->set('show.setFromDb', false);

        $col1 = [
            'name' => 'imgPath',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => 'storage/',
            'height' => '300px'
        ];

        $col2 = [
            'name' => 'nom',
            'type' => 'text',
            'label' => 'Nom',
        ];

        $col8 = [
            'name' => 'prenom',
            'type' => 'text',
            'label' => 'Prenom',
        ];

        $col3 = [
            'name' => 'email',
            'label' => 'email',
            'type' => 'text',
        ];
        $col4 = [
            'name' => 'adresse',
            'type' => 'text',
            'label' => 'adresse',
        ];
        $col5 = [
            'name' => 'start_date',
            'type' => 'date',
            'label' => 'Date debut',
        ];
        $col6 = [
            'name' => 'login',
            'type' => 'text',
            'label' => 'login',
        ];
        $col7 = [
            'name' => 'ca',
            'type' => 'text',
            'label' => 'Ca',
        ];

        $this->crud->addColumns([$col1, $col2,$col8,$col3, $col4, $col5, $col6, $col7]);
    }
}
