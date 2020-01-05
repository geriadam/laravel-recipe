<?php

namespace App\Models;

use Str;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = "posts";
    protected $fillable = [
        "user_id",
        "title",
        "slug",
        "short_description",
        "description",
        "image",
        "tags",
        "status"
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/posts/";
    const IMAGE_PATH    = "storage/master/posts/";

    const STATUS_DRAFT = "draft";
    const STATUS_PUBLISH = "publish";

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function upload($file)
    {
        $path = self::STORAGE_PATH;
        $file_name = str_random(20) . "." . $file->getClientOriginalExtension();
        
        $file->storeAs(null, $file_name, 'post');
        
        return $file_name;
    }

    public function deleteImage()
    {
        if(file_exists(public_path() ."/". $this->image_url))
            return unlink(public_path() ."/".  $this->image_url );

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

    public function user()
    {
        return $this->belongsTo('App\Users', 'user_id', 'id');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
   
    public function scopeDraft($query)
    {
        return $query->whereStatus(self::STATUS_DRAFT);
    }

    public function scopePublish($query)
    {
        return $query->whereStatus(self::STATUS_PUBLISH);
    }

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
