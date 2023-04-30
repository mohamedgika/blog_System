<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'blog_sub_categories';
    public $translatable = ['title','content'];
    protected $guarded=[];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function post(){
        return $this->hasMany(Post::class);
    }

}
