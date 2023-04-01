<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

    public function scopeSearch_ajax($query, $key)
    {
        return $query->where('product_name', 'LIKE', '%' . $key . '%')->paginate(6);
    }

    // public function scopeFindbyid($query,$id){
    //     return $query->where('product_id', $id);
    // }

    public function scopeIndex()
    {
        return DB::table('products')->paginate(6);
    }
}
