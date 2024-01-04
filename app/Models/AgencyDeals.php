<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyDeals extends BaseModel
{
    use HasFactory;
    public $table = 'AgencyDeals';
    public $guarded = [];
}
