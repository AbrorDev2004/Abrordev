<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'url',
        'about_id'
    ];

    public function about()
    {
        return $this->belongsTo(About::class);
    }
}
