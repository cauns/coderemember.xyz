<div class="content">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ setting('site.title') }}</title>
        <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/templatemo-xtra-blog.css') }}" rel="stylesheet">
    </head>
    <body>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">{{ setting('site.title') }}</h1>
            </div>
            {{ menu('Frontend Main','frontend.layouts.menu') }}
            <div class="tm-mb-65">
                <a rel="nofollow" href="{{ setting('site.facebook_follow') }}" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
               {{ setting('site.description') }}
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">