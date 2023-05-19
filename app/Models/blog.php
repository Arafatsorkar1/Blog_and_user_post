<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Monolog\Handler\selectErrorStream;

class blog extends Model
{
    public  static $info;
    use HasFactory;
    protected static $imageFile,$imageName,$imageDirectory,$imageUrl;
    public  static  function addblog($request)
    {

        self::$imageFile = $request->file('image');
        self::$imageName = time().rand(10, 1000).self::$imageFile->getClientOriginalName();
        self::$imageDirectory = 'assets/blog/img/upload/';
        self::$imageFile->move(self::$imageDirectory, self::$imageName);
        self::$imageUrl = self::$imageDirectory.self::$imageName;



        self::$info = new blog();
        self::$info->title = $request->title;
        self::$info->content = $request->content;
        self::$info->image = self::$imageUrl;
        self::$info->save();
    }
}
