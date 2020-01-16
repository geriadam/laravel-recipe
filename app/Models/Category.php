<?php

namespace App\Models;

use Str;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = "categories";
    protected $fillable = [
        "name","slug","description","image"
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/categories/";
    const IMAGE_PATH    = "storage/master/categories/";

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    public static function dropdownCategory()
    {
        return self::pluck('name', 'id');
    }

    public static function upload($file)
    {
        $path = self::STORAGE_PATH;
        $file_name = str_random(20) . "." . $file->getClientOriginalExtension();
        
        $file->storeAs(null, $file_name, 'categories');
        
        return $file_name;
    }

    public function deleteImage()
    {
        if(file_exists(public_path() ."/". $this->image_url))
            return unlink(public_path() ."/".  $this->image_url );
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
   
    public function recipe()
    {
        return $this->hasMany(Recipe::class, 'category_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getImageUrlAttribute()
    {
        return self::IMAGE_PATH . $this->image;
    }
}
