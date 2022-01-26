<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function listings()
    {
        return $this->hasMany('App\Models\Listing', 'company_profile_id', 'id');
    }
}
