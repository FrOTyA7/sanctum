<?php

namespace Laravel\Sanctum;

use App\Models\Auth\UserAccessToken;
use App\Models\Auth\AdminAccessToken;

class Multi
{
    /**
     * List of Models and Tokens.
     */
    public static $list = [
		'User'	=>	UserAccessToken::class,
		'Admin'	=>	AdminAccessToken::class,
	];

}
