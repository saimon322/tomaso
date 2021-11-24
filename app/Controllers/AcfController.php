<?php

class AcfController
{
    public function __construct()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title'    => 'Настройки сайта',
                'menu_slug' 	=> 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Настройки модальных окон',
                'menu_title'	=> 'Модальные окна',
                'parent_slug'	=> 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Настройки подвала',
                'menu_title'	=> 'Подвал',
                'parent_slug'	=> 'theme-general-settings',
            ));
        }
    }
}

new AcfController();