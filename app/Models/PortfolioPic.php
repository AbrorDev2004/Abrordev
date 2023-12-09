<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PortfolioPic extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'portfolio_id',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($portfolioPic) {
            unlink(public_path('assets/img/portfolio/' . $portfolioPic->image));
        });
    }
}
