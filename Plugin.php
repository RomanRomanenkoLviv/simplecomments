<?php namespace RomanWebart\SimpleComments;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
public function pluginDetails(){
    return [
        'name'    	=> 'Simple Comments',
        'description' => 'Простая система комментариев',
        'author'  	=> 'RomanWebart',
        'icon'    	=> 'icon-bar-chart-o'
    ];
}
} ?>