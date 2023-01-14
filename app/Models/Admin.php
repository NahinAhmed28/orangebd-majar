<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded =['id'];

//        protected $fillable = [
//        'username',
//        'email',
//        'password',
//        'center_id',
//        'title_en',
//        'title_bn',
//        'address_en',
//        'address_bn',
//        'center_id',
//        'usertype_id',
//        'code',
//    ];

    public function center(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Center::class);
    }

    public function userTypes(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(UserType::class);
    }
}
