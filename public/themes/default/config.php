<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Copyright ©  2013 - Laravel.in.th');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{!! $crumb["label"] !!}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{!! $crumb["label"] !!}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {
            // You may use this event to set up your assets.
            // $theme->asset()->usePath()->add('core', 'core.js');
            // $theme->asset()->add('jquery', 'vendor/jquery/jquery.min.js');
            // $theme->asset()->add('jquery-ui', 'vendor/jqueryui/jquery-ui.min.js', array('jquery'));

            // Partial composer.
            // $theme->partialComposer('header', function($view)
            // {
            //     $view->with('auth', Auth::user());
            // });

            $theme->asset()->usePath()->add('jquery', 'js/jquery.min.js');
            $theme->asset()->usePath()->add('bootstrap.min.css', 'css/bootstrap.min.css');
            $theme->asset()->usePath()->add('bootstrap.min.js', 'js/bootstrap.min.js');

            $theme->asset()->usePath()->add('font-awesome', 'css/font-awesome.min.css');

            //animated text
            $theme->asset()->usePath()->add('animated-text.css', 'css/animated-text.css');
            $theme->asset()->usePath()->add('animated-jquery.js', 'js/animated-jquery.js');

            $theme->asset()->usePath()->add('animate.css', 'css/animate.css');
            $theme->asset()->usePath()->add('wow.min.js', 'js/wow.min.js');

            //owl carousel
            $theme->asset()->usePath()->add('owl.carousel.min.css', 'css/owl.carousel.min.css');

            $theme->asset()->usePath()->add('owl.carousel.min.js', 'js/owl.carousel.min.js');
            $theme->asset()->usePath()->add('jquery.easing.1.3.min.js', 'js/jquery.easing.1.3.min.js');

//            $theme->asset()->usePath()->add('style.css', 'css/style.css');
//            $theme->asset()->usePath()->add('scripts.js', 'js/scripts.js');

        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);