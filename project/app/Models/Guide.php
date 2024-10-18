<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;

/*
     * The table associated with the model.
     *
     * @var string
     * 
     * 
     */

     protected $table = 'guides';
     
    protected $fillable = [
        'image',
        'name',
        'description',
        'email',
        'linkedin'
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
