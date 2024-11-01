<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery extends Model
{
    use HasFactory;

    protected $groceries = 'groceries';
    protected $id = 'groceries_id';

    #unsafe version
    protected $guarded = [];

    #safe version
    // protected $fillable = [
    //     'product', 'quantity', 'price'
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}