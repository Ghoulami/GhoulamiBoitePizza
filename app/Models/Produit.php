<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

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
        return $this->belongsTo('App\Models\Categorie', 'category_id');
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

    public function setImageAttribute($value)
    {
        $attribute_name = "imgPath";
        $disk = "public";
        $destination_path = "public/uploads/product_images/";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function setimgPathAttribute($value)
    {
        $attribute_name = "imgPath";
        $disk = config('backpack.base.public'); // or use your own disk, defined in config/filesystems.php
        $destination_path = "public/uploads/product_images/"; // path relative to the disk above

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
        $this->attributes[$attribute_name] = /*$destination_path.'/'.*/$filename;
    }
    }
}