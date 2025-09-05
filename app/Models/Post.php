<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'content', 'image', 'published_at', 'category_id'
    ];
    use HasFactory;

    /**
     * Delete Post image from storage.
     *
     * @return void
     */
    public function deleteImage(){
        Storage::delete($this->image);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
    

    /**
     * check if post has tags
     * 
     * @return bool
     */
    public function hasTag($tagId){
        return in_array($tagId, $this->tags->pluck('id')->toArray());
    }
}
