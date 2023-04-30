<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'blog_posts';
    public $translatable = ['title', 'slug','content','description','summary'];

    protected $guarded=[];

    public function categories(){
        return $this->belongsTo(Category::class,'category');
    }
    public function subcategories(){
        return $this->belongsTo(SubCategory::class,'subcategory');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
