<?php

namespace App\Helpers;

class UploadsFiles
{
    public static $uploadPaths = array(
        'profile_photos'=>'/uploads/profile/',
       
    );
    
    public static function getUploadPath($paths)
    {
        return public_path().self::$uploadPaths[$paths];
    }
}