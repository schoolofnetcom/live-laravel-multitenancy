<?php

namespace App;

use App\Tenant\TenantModels;
use App\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['name', 'user_id'];

    protected $dates = ['deleted_at'];
}
