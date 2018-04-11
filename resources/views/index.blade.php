<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Subscriber-Dashboard</title>
    
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content-wrapper">
        <div class="container">
            <div class="text-center mb-5">
                <div class="mb-5">
                    <img class="kliemannsland-logo" src="/img/kliemannsland-logo.jpg"/>
                </div>
                <div>
                    <h1 class="text-light">Wie viel sind n' wo dabei?</h1>
                </div>
            </div>
        </div>
        <div style="background-image: url('/img/counter-background.jpg');">
            <div class="follower-row-wrapper">
                <div class="container">
                    <div class="row py-4" id="app">
                        <div class="col-sm-4 text-color-youtube">
                            <youtube-component></youtube-component>
                        </div>
                        <div class="col-sm-4 text-color-twitter">
                            <twitter-component></twitter-component>
                        </div>
                        <div class="col-sm-4 text-color-instagram">
                            <instagram-component></instagram-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/js/app.js"></script>
</body>
</html>