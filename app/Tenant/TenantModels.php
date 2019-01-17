<?php

namespace App\Tenant;


trait TenantModels
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope());

        static::creating(function ($model) {
            $tenant = \Tenant::getTenant();
            if($tenant){
                //$userId = auth()->user()->company_id;
                $model->user_id = $tenant->id;
            }
        });
    }
}