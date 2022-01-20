<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Advertisement;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = ['advertisement_id','user_id'];
    protected $table = "wish_list";

}
