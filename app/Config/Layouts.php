<?php

namespace Tatter\Layouts\Config;

use CodeIgniter\Config\BaseConfig;

class Layouts extends BaseConfig
{
    /**
     * The default layout to use.
     */
    public string $default = 'App\Views\layout\project_layout';

    /**
     * Provides a fallback to the default layout
     * if the requested version was not found.
     *
     * @return string
     */
    final public function __get(string $name)
    {
        return $this->default;
    }
}