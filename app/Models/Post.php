<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'image',
        'type',
        'type_id',
        'content',
    ];
    protected static function boot()
{
    parent::boot();

    static::creating(function ($post) {
        $post->slug = Str::slug($post->title);
    });
}
public function type()
{
    return $this->belongsTo(Types::class, 'type', 'type');
}
}
