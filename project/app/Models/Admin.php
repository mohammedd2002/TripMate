<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable // تأكد من وراثة Authenticates
{
    use HasFactory, Notifiable;

    /*
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admins'; // تأكد من تحديد اسم الجدول إذا كان مختلفًا عن اسم النموذج

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', // تحديد الحقول القابلة للتعبئة
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', // إخفاء كلمة المرور ورمز التذكر
    ];
}
