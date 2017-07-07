<?php
namespace App\Services\Auth;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Str;

class AdminEloquentUserProvider extends EloquentUserProvider
{

    /**
     * Validate a user against the given credentials.
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param array $credentials
     */
    public function validateCredentials(Authenticatable $user, array $credentials) {
        $plain = $credentials['password'];
        $authPassword = $user->getAuthPassword();

        return sha1($authPassword['salt'] . $plain) == $authPassword['password'];
    }
}
