<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Produit extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'produits';
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
    public function category()
    {
        return $this->belongsTo(Categorie::class , 'category_id' , 'id');
    }

    public function commentaire()
    {
        return $this->hasMany(Commentaire::class,'produit_id' , 'id');
    }

    public function client()
    {
        return $this->belongsToMany('App\Models\Client', 'favorites​', 'produit_id', 'client_id');
    }

    public function element()
    {
        return $this->belongsToMany('App\Models\element', 'elem_produit', 'produit_id', 'element_id');
    }

    public function supplement()
    {
        return $this->belongsToMany('App\Models\Supplement', 'commande_suppliment', 'produit_id', 'supplement_id');
    }

    public function formule()
    {
        return $this->belongsToMany('App\Models\Formule', 'formule_produit', 'produit_id', 'formule_id');
    }

    public function commande()
    {
        return $this->belongsToMany('App\Models\Commandes', 'commande_produit', 'produit_id', 'commande_id');
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
    public function scopeGetProductImage(){
        return "storage/" . $this->imgPath;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    public function setimgPathAttribute($value) {
        $attribute_name = "imgPath";
        $disk = "public"; // or use your own disk, defined in config/filesystems.php
        $destination_path = "uploads/product_images"; // path relative to the disk above

        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = Image::make($value);
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
            // 2. Store the image on disk.
            Storage::disk($disk)->put($destination_path.'/'.$filename, $image->stream());
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;  
        }
    }


    public static function boot(){
        parent::boot();
        self::deleting(function($obj) {
            Storage::disk('public')->delete($obj->image);
        });
    }
}