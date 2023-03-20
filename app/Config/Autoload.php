<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;


class Autoload extends AutoloadConfig
{
    
    public $psr4 = [
        APP_NAMESPACE => APPPATH, // For custom app namespace
        'Config'      => APPPATH . 'Config',
        'Libraries'   => APPPATH.'Libraries'
    ];

    
    public $classmap = [];

  
    public $files = [];
    public $helpers = ['Helper'];
}
