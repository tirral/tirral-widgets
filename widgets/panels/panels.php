<?php
/*
Widget Name: Tirral-panel
Description: A simple panel widget for Page Builder pages.
Author: Tirral
Author URI: https://tirral25383@gmail.com
*/

class Tirral_Panel_Widget extends SiteOrigin_Widget
{
    function __construct()
    {
        parent::__construct(
            'tirral-panel-widget',
            __('SiteOrigin Panel', 'so-widgets-bundle'),
            array(
                'description' => __('Pannel widget with hover effects | Made by Tirral.', 'tirral-panel-widget-text-domain'),
                'help' => 'https://tirral25383@gmail.com'
            ),
            array(),
            false,
            plugin_dir_path(__FILE__)
        );
    }

    function initialize()
    {
           wp_enqueue_style( 'style', plugin_dir_url(__FILE__) . 'css/style.css');

    }

    function get_style_name($instance)
    {
        if (empty($instance['design']['theme'])) return 'atom';
        return $instance['design']['theme'];
    }


    function get_widget_form()
    {
        return array(
            'text' => array(
                'type' => 'text',
                'label' => __('Name of wedget', 'tirral-panel-widget-text-domain'),
            ),
            'text_color' => array(
                'type' => 'color',
                'label' => __('Text color', 'tirral-panel-widget-text-domain'),
            ),
            'background-color' => array(
                'type' => 'color',
                'label' => __('Background color', 'tirral-panel-widget-text-domain'),
            ),
        );
    }



    function get_less_variables($instance)
    {
        if (empty($instance) || empty($instance['design'])) return array();
        return array(
            'text_color' => $instance['design']['text_color'],
            'background-color' => $instance['design']['background-color'],
            'image' => $instance['design']['image'],
        );
    }

    function modify_instance($instance)
    {
        if (empty($instance['design'])) {
            $instance['design'] = array();

            if (isset($instance['text_color'])) $instance['design']['text_color'] = $instance['text_color'];
            if (isset($instance['background-color'])) $instance['design']['background-color'] = $instance['background-color'];

            unset($instance['text_color']);
            unset($instance['background-color']);

        }


        if (empty($instance['attributes'])) {
            $instance['attributes'] = array();
            if (isset($instance['id'])) $instance['attributes']['id'] = $instance['id'];
            unset($instance['id']);
        }
        return $instance;
    }
}

siteorigin_widget_register('tirral-panel-widget', __FILE__, 'Tirral_Panel_Widget');



/*some text heare */

















