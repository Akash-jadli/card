<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalePack extends Model
{
    use HasFactory;
    protected $table ="salepack";
    protected $primaryKey ="id";
}
