<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    public function blogDetail(){
       return $this->hasOne(BlogDetail::class);
    }
    public function user() {
        return $this->belongsTo( User::class );
    }
    public function comments(){
       return $this->hasMany(Comment::class);
    }


    public function toArray()
    {
        $attributes = parent::toArray();

        $attributes['created_at'] = Carbon::parse($this->created_at)->format(' j F, Y');

        return $attributes;
    }
}
