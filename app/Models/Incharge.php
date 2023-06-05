<?php

namespace App\Models;

use App\Models\Incharge;
use App\Models\Organization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Validator;
use Auth;
use DB;
class Incharge extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'inchargename','organization_id','email','password','phonenumber','position','address'];
    public $incrementing = false;
    public $timestamps = false;

    public function organization(){
        return $this->hasOne(Organization::class,'id','organization_id');
    }

}

