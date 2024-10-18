<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destenation_User extends Model
{
    use HasFactory;

/*
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'destination_user';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
