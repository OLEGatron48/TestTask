<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends BaseModel
{
    use HasFactory;
    public $table = 'Clients';
    public $guarded = [];
}
