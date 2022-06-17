<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    use HasFactory;

    
    protected $table = 'modelos';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_modelo', 'mar_id'];

}
