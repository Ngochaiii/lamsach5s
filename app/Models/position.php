<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    const TYPE_SERVICE = 1;
    const TYPE_CLEANING_BLOG = 2;

    const TYPES = [
        self::TYPE_SERVICE => 'Dịch vụ',
        self::TYPE_CLEANING_BLOG => 'Blog làm sạch',
    ];

    protected $fillable = [
        'name',
        'position'
    ];

    public function types()
    {
        return $this->hasMany(Types::class);
    }

    public function isService()
    {
        return $this->position == self::TYPE_SERVICE;
    }

    public function isCleaningBlog()
    {
        return $this->position == self::TYPE_CLEANING_BLOG;
    }

    public function getTypeName()
    {
        return self::TYPES[$this->position] ?? 'Không xác định';
    }
}
