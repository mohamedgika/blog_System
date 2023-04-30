<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'blog_settings';
    public $translatable = ['title','content','description',];

    protected $guarded=[];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}
