<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'slug','status'];

    public  static function CreateAllCategory($request , $id = null)
    {
        Category::updateOrCreate(['id' => $id],[
            'name' => $request->name,
            'slug' => str_replace(' ', '-', $request->name),
            'status' => $request->status,
        ]);
    }
}
