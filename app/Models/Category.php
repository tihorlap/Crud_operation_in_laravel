<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
      'name',
      'description',
      'is_active'
    ];


}
