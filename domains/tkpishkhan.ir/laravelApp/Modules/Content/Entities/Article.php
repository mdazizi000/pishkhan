<?php

namespace Modules\Content\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Videos()
    {
        return $this->hasMany(ArticleVideo::class);
    }
}
