<?php namespace PanaKour\Translate\Components;

use RainLab\Pages\Components\StaticMenu;
use Illuminate\Support\Facades\App;
use Cms\Classes\Theme;
use RainLab\Pages\Classes\Menu as PagesMenu;

class StaticMenuMultilingual extends StaticMenu
{

    public function componentDetails()
    {
        return [
            'name' => 'Multilingual Static Menu',
            'description' => 'Shows a menu in any language you want.'
        ];
    }

    public function getCodeOptions()
    {
        $result = [];
        $theme = Theme::getEditTheme();
        $menus = PagesMenu::listInTheme($theme, true);
        foreach ($menus as $menu) {
            $numOfStringLengthToGet = strlen($menu->code) - strlen(strrchr($menu->code, '-'));
            $result[ substr($menu->code, 0, $numOfStringLengthToGet)] = $menu->name;
        }
        return $result;
    }

    public function menuItems()
    {
        $code = $this->property('code');
        $locale = App::getLocale();
        $this->setProperty('code', $code . '-' . $locale);
        return parent::menuItems();
    }

}