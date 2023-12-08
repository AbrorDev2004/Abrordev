<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'job_title',
        'description',
        'birthday',
        'website',
        'phone',
        'city',
        'address',
        'age',
        'degree',
        'email',
        'freelance_status',
        'additional_info',
    ];

    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class);
    }
}
 