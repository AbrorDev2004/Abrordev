<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            foreach($category->portfolios as $portfolio) {
                foreach($portfolio->portfolioPics  as $pic) {
                    unlink(public_path('assets/img/portfolio/' . $pic->image));
                }
            }
            foreach($category->portfolios as $portfolio) {
                unlink(public_path('assets/img/portfolio/' . $portfolio->image));
            }
        });
    }
}
