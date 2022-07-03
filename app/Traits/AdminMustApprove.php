<?php

namespace App\Traits;

trait AdminMustApprove
{
    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
    */
    public function isUserApproved(): bool
    {
        return $this->user_status;
    }

    public function isShopApproved(): bool
    {
        return $this->shop_status;
    }

    public function isDashboardApproved(): bool
    {
        return !$this->user_status&&!$this->shop_status
                                    ? false
                                    : true;
    }
    /**
     * Mark the given user as approved.
     *
     * @return bool
    */
    public function markUserAsApproved(): bool
    {
        return $this->forceFill([
            'user_status' => true,
        ])->save();
    }

    public function markShopAsApproved(): bool
    {
        return $this->forceFill([
            'shop_status' => true,
        ])->save();
    }
}
