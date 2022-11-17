<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyPic extends Model
{
    use HasFactory;

    protected $table = "companies_pic";

    protected $guarded = [''];
}
