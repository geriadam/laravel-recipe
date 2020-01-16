<?php

namespace App\Models;

use Str;
use App\User;
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
        "user_id",
        "category_id", 
        "title",
        "slug",
        "difficulty",
        "prepare_time",
        "cooking_time",
        "serves",
        "calories",
        "description",
        "directions",
        "ingredients",
        "status",
        "video_link",
        "image",
        "image_gallery",
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/recipes/";
    const IMAGE_PATH    = "storage/master/recipes/";

    const DIFFICULTY_1 = "easy";
    const DIFFICULTY_2 = "medium";
    const DIFFICULTY_3 = "hard";

    const STATUS_ACTIVE = "active";
    const STATUS_DEACTIVE = "deactive";

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function recipeFavorite()
    {
        return $this->hasMany(FavoriteRecipe::class, 'recipe_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
   
    public function scopeActive($query)
    {
        return $query->whereStatus(self::STATUS_ACTIVE);
    }

    public function scopeDeactive($query)
    {
        return $query->whereStatus(self::STATUS_DEACTIVE);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
   
    public function getIngredientsLabelAttribute()
    {
        $text = str_replace('</p>', '', $this->ingredients);
        $array = explode('<p>', $text);

        return $array;
    }

    public function getDirectionLabelAttribute()
    {
        $text = str_replace('</p>', '', $this->directions);
        $array = explode('<p>', $text);

        return $array;
    }

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
