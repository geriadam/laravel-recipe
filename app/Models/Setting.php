<?php

namespace App\Models;

use Str;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = "settings";
    protected $fillable = [
        "title",
        "description",
        "logo",
        "favicon",
        "meta_keyword",
        "meta_description",
        "email",
        "phone",
        "facebook_url",
        "instagram_url",
        "twitter_url"
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/setting/";
    const IMAGE_PATH    = "storage/master/setting/";

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function upload($file)
    {
        $path = self::STORAGE_PATH;
        $file_name = str_random(20) . "." . $file->getClientOriginalExtension();
        
        $file->storeAs(null, $file_name, 'setting');
        
        return $file_name;
    }

    public function deleteLogo()
    {
        return unlink(public_path() ."/".  $this->logo_url );
    }

    public function deleteFavicon()
    {
        return unlink(public_path() ."/".  $this->favicon_url );
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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

    public function getLogoUrlAttribute()
    {
        return self::IMAGE_PATH . $this->logo;
    }

    public function getFaviconUrlAttribute()
    {
        return self::IMAGE_PATH . $this->favicon;
    }
}
