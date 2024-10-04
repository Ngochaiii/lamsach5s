<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo', 'company_name', 'address', 'phone', 'hotline',
        'email', 'zalo_link', 'facebook_link', 'working_hours',
        'google_map_iframe',
    ];
    public static function getConfig()
    {
        return self::firstOrCreate();
    }
}
