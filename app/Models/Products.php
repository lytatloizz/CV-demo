<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';
}
