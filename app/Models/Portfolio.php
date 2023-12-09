<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'image', 'category_id', 'client', 'url', 'project_date', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function portfolioPics()
    {
        return $this->hasMany(PortfolioPic::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($portfolio) {
            unlink(public_path('assets/img/portfolio/' . $portfolio->image));

            foreach($portfolio->portfolioPics  as $pic) {
                unlink(public_path('assets/img/portfolio/' . $pic->image));
            }
        });
    }
}
