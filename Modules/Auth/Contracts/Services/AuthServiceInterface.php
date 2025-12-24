<?php

namespace Modules\Auth\Contracts\Services;

use Modules\Auth\Models\User;

interface AuthServiceInterface
{
    // ...existing methods...
    public function resendCredentialsToUser(User $user): void;
}
