<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Products extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    public function scopeProtype($query, $status)
    {
        return $query->where('type_id', $status)->paginate(3);
    }

    // public function scopeFindbyid($query,$id){
    //     return $query->where('product_id', $id);
    // }

    public function scopeIndex(){
        return DB::table('products')->paginate(6);
    }
}
