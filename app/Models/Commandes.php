<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'commandes';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function formule()
    {
        return $this->belongsToMany('App\Models\Formule', 'commande_formule', 
        'commande_id', 'formule_id');
    }

    public function produit()
    {
        return $this->belongsToMany('App\Models\Formule', 'commande_produit', 
        'commande_id', 'produit_id');
    }

    public function supplement()
    {
        return $this->belongsToMany('App\Models\Supplement', 'commande_suppliment',
         'commande_id', 'supplement_id');
    }


    public function category()
    {
        return $this->belongsTo(Client::class , 'client_id' , 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
