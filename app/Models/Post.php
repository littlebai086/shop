<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

        //處理 Mass Assignment 的防護
    protected $fillable = ['title', 'category_id', 'content', 'pic', 'sort', 'enabled'];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d m:i:s',
        'updated_at' => 'datetime:Y-m-d m:i:s',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategoryArrayAttribute()
    {
        return $this->category->toArray();
    }

    public function getTagsIdArrayAttribute()
    {
        $data = [];
        foreach( $this->tags()->get() as $tag){
            $data[] = $tag->id;
        }
        return $data;
    }

    public function getTagsStringAttribute()
    {
        $string = '';
        $tags = $this->tags()->get();
        $len = count($tags);
        $index = 0;
        foreach($tags as $tag){
            $string = $string . $tag->title;
            if($index != $len-1){
                $string = $string . ',';
                $index ++;
            }
        }
        return $string;
    }

    public function scopeEnabled($query)
    {
        return $query->where('enabled',true)->orderBy('created_at','desc');
    }
}
