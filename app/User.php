<?php

namespace App;

use App\Article;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // 쿼리에서 조회가 불가능해진다
     protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany(Article::class);
    }

}
