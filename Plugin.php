<?php namespace PanaKour\Translate;

use PanaKour\Translate\Components\StaticMenuMultilingual;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public $require = ['RainLab.Translate', 'RainLab.Pages'];

    public function pluginDetails()
    {
        return [
            'name' => 'Extend translate plugin',
            'description' => 'Helper for RainLab.Translate plugin',
            'author' => 'Panagiotis Koursaris'
        ];
    }

    public function registerComponents()
    {
        return [
            StaticMenuMultilingual::class => 'staticMenuMultilingual'
        ];
    }

}
