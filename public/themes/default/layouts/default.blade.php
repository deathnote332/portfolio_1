<!DOCTYPE html>
<html>
<head>
    <title>{!! Theme::get('title') !!}</title>
    <meta charset="utf-8">
    <meta name="keywords" content="{!! Theme::get('keywords') !!}">
    <meta name="description" content="{!! Theme::get('description') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
    <style>
        .content-container{height: 100%;
        }
    </style>
</head>
    <body data-spy="scroll" data-target=".navbar">
        {{--<div class="loader-container">--}}
            {{--<div class="loader"></div>--}}
        {{--</div>--}}
        <div class="content-container">
            {!! Theme::content() !!}
        </div>


    </body>
</html>
