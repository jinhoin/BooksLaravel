<?php

namespace App;

use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = ['title','content'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d H:00',
    ];

    
    public function user(){
        return $this->belongsTo(User::class);
        // 나는 user 소속입니다 관계를 알려주주는 메소드
    }

    public function tags(){
        return  $this->belongsToMany(Tag::class);
    }
  

}
