<?php

namespace App\Tenant;


class TenantManager
{
    private $tenant;

    private $copy;
    /**
     * @return mixed
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * @param mixed $tenant
     */
    public function setTenant($tenant)
    {
        $this->tenant = $tenant;
    }

    public function disableTenant(){
        $this->copy = $this->tenant;
        $this->tenant = null;
    }

    public function enableTenant(){
        $this->tenant = $this->copy;
        $this->copy = null;
    }

}