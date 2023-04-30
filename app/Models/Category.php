<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'blog_categories';
    public $translatable = ['title', 'slug','content'];
    protected $guarded=[];

    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

}
