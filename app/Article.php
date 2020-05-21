<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name', 'category_id', 'description', 'review_date', 'state', 'author_id', 'archive_pdf'];
}
