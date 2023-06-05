<?php

namespace App\Models;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'organizationname','email'];
    public $incrementing = false;
    public $timestamps = false;

}
