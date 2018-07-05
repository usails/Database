<?php

namespace Usails\Illuminate\Database;

use Illuminate\Database\DatabaseManager as IlluminateDatabaseManager;

class DatabaseManager extends IlluminateDatabaseManager
{
    public function __construct($app, ConnectionFactory $factory)
    {
        parent::__construct($app, $factory);
    }
}