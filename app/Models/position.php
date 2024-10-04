<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    const TYPE_SERVICE = 1;
    const TYPE_CLEANING_BLOG = 2;
    const TYPE_RECRUITMENT =3;
    const TYPE_INTRODUCE = 4;
    const TYPE_COMMITMENT =5;

    const TYPES = [
        self::TYPE_SERVICE => 'Dịch vụ',
        self::TYPE_CLEANING_BLOG => 'Blog làm sạch',
        self::TYPE_RECRUITMENT => 'Tuyển dụng',
        self::TYPE_INTRODUCE => 'Giới thiệu',
        self::TYPE_COMMITMENT => 'Cam kết'
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

    public function isRecruiment()
    {
        return $this->position == self::TYPE_RECRUITMENT;
    }

    public function isCommitment()
    {
        return $this->position == self::TYPE_COMMITMENT;
    }

    public function isIntroduce()
    {
        return $this->position == self::TYPE_INTRODUCE;
    }
    public function getTypeName()
    {
        return self::TYPES[$this->position] ?? 'Không xác định';
    }
}
