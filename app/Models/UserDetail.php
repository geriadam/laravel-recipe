<?php

namespace App\Models;

use Str;
use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = "user_detail";
    protected $fillable = [
        "user_id",
        "avatar",
        "gender",
        "status",
    ];
    public $timestamps = true;

    const STORAGE_PATH  = "master/user_detail/";
    const IMAGE_PATH    = "storage/master/user_detail/";

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
        
        $file->storeAs(null, $file_name, 'categories');
        
        return $file_name;
    }

    public function deleteAvatar()
    {
        return unlink(public_path() ."/".  $this->avatar_url );
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
   
    public function user()
    {
        return $this->belongsTo('App\Users' 'user_id', 'id');
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

    public function geAvatarUrlAttribute()
    {
        return self::IMAGE_PATH . $this->avatar;
    }
}
