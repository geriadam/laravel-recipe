<?php

namespace App\Models;

use Str;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Recipe extends Model
{
    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = "recipes";
    protected $fillable = [
        "category_id", "title","slug","description","image","image_gallery","time"
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/recipes/";
    const IMAGE_PATH    = "storage/master/recipes/";

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function upload($file)
    {
        $path = self::STORAGE_PATH;
        $file_name = str_random(20) . "." . $file->getClientOriginalExtension();
        
        $file->storeAs(null, $file_name, 'recipes');
        
        return $file_name;
    }

    public static function bulkUpload($files)
    {
        $files_name = [];
        foreach($files as $file){

            $path = self::STORAGE_PATH;
            $file_name = str_random(20) . "." . $file->getClientOriginalExtension();

            $files_name[] = $file_name;
            
            $file->storeAs(null, $file_name, 'recipes');
        }

        return json_encode($files_name);
    }

    public function deleteImage()
    {
        if(file_exists(public_path() ."/". $this->image_url))
            return unlink(public_path() ."/".  $this->image_url );

        return true;
    }

    public function bulkDeleteImage()
    {
        foreach (json_decode($this->image_gallery) as $gallery) {
            if(file_exists(public_path() ."/". self::IMAGE_PATH . $gallery))
                unlink( public_path() ."/". self::IMAGE_PATH . $gallery );
        }

        return true;
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
   
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function recipeIngrendients()
    {
        return $this->hasMany(RecipeIngrendients::class, 'recipe_id', 'id');
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

    public function getImagesGalleryLabelAttribute()
    {
        if (!empty($this->image_gallery)) {
            $images = "<div class='row'>";
            foreach (json_decode($this->image_gallery) as $image_gallery) {
                if (file_exists(public_path() . "/" . self::IMAGE_PATH . $image_gallery)) {
                    $images .= "<img src='" . url(self::IMAGE_PATH . $image_gallery) . "' width='300' height='200'><br><br>";
                }
            }

            $images .= "</div>";

            return $images;
        } else {
            return "-";
        }
    }
}
