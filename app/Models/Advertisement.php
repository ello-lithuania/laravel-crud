<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Advertisement extends Model
{
    use HasFactory;

    protected $table = 'advertisements';
    protected $fillable = ['title','slug','location','description','photos','bussiness_id','bussiness_vat','name_surname','phonenumber','email','city','address','ad_color','ad_up','user_id'];

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
    public function all_categories()
    {
        return $this->belongsToMany(Categories::class)->withPivot('categories_id');
    }
}
