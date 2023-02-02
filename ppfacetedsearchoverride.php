<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class Ppfacetedsearchoverride extends Module
{
    public function __construct()
    {
        $this->name = 'ppfacetedsearchoverride';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'ProfiPresta';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.0',
            'max' => '1.7.99',
        ];
        $this->bootstrap = false;

        parent::__construct();

        $this->displayName = $this->l('Faceted Search Override');
        $this->description = $this->l('Overrides MySQL adapter of ps_facetedsearch and speeds up category loading.');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
    }
}