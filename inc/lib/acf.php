<?php

/*
*  Create an advanced sub page called 'Footer' that sits under the General options menu
*/

if( function_exists('acf_add_options_page') )
{

    acf_add_options_page();

    acf_add_options_sub_page(array(
        'title' => 'Options',
        'capability' => 'manage_options'
    ));

    acf_add_options_sub_page(array(
        'title' => 'Header',
        'capability' => 'manage_options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Footer',
        'capability' => 'manage_options'
    ));
}

/*
* Logo Header
*/
if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_logo',
        'title' => 'Logo',
        'fields' => array (
            array (
                'key' => 'field_5447f0c32b957',
                'label' => 'Logo',
                'name' => 'logo',
                'type' => 'image',
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-header',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}