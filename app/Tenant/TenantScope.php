<?php

namespace App\Tenant;


use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        /** @var User $tenant */
        $tenant = \Tenant::getTenant();
        if($tenant){
            //$userId = auth()->user()->company_id;
            $builder->where('user_id', $tenant->id);
        }
    }
}