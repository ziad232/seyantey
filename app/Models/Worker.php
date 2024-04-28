<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'gov',
        'photo',
        'about',
        'tax',
        'company',
        'category_id'
    ];
    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
