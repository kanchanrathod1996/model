<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;


    


    protected $fillable = [
        'name','slug','meta_title','meta_description','	meta_keywords','status'];

        public function subcategory() {
            return $this->hasMany(Subcategory::class,'category_id');    
        }

       public function products() { 
         return $this->hasMany(Product::class, 'category_id');
        
        }

     

        protected static function boot()
    {
        parent::boot();
  
        static::created(function ($category) {
            $category->slug = $category->createSlug($category->name);
            $category->save();
        });
    }


    private function createSlug($name){
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
  
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($mathces) {
                    return $mathces[1] + 1;
                }, $max);
            }
  
            return "{$slug}-2";
        }
  
        return $slug;
    }
}
