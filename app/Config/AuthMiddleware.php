<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class AuthMiddleware extends BaseConfig
{
    /**
     * Whether to run auth check automatically
     * in the controller.
     *
     * @var boolean
     */
    public $autoCheck = true;

    /**
     * List of URIs that should be exempt from
     * authentication.
     *
     * Example: $except = ['controllerName/methodName', 'controllerName2'];
     *
     * @var array
     */
    public $except = ['auth/login', 'auth/authenticate', 'auth/logout'];
}
