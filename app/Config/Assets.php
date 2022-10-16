<?php

namespace Config;

use Tatter\Frontend\Bundles\BootstrapBundle;
use Tatter\Frontend\Bundles\DataTablesBundle;
use Tatter\Frontend\Bundles\FontAwesomeBundle;

class Assets extends \Tatter\Assets\Config\Assets
{
    public array $routes = [
        '*' => [
            BootstrapBundle::class,
            DataTablesBundle::class,
            FontAwesomeBundle::class,
        ],
    ];
}