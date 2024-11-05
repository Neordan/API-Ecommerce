<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    protected $visible = ['id', 'name', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
