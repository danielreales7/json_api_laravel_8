<?php

namespace App\Models;

use App\Http\Resources\ArticleCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\HasSorts;

class Article extends Model
{
    use HasFactory;

    public $allowedSorts = ['title', 'content'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'user_id' => 'integer',
    ];


    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
