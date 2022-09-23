<?php

namespace Config;

use Tatter\Frontend\Bundles\BootstrapBundle;
use Tatter\Frontend\Bundles\FontAwesomeBundle;

class Assets extends \Tatter\Assets\Config\Assets
{
    public array $routes = [
        '*' => [
            BootstrapBundle::class,
            FontAwesomeBundle::class,
        ],
    ];
}