<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    protected $fillable = ['comment', 'blog_id', 'user_id'];


    public function blog(){
        return $this->belongsTo(Blog::class);
    }



    public function toArray()
    {
        $attributes = parent::toArray();

        $attributes['created_at'] = Carbon::parse($this->created_at)->format(' j F, Y');

        return $attributes;
    }
}
