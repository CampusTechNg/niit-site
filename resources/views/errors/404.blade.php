<!DOCTYPE html>
<html>
    <head>
        <title>Error 404</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet" type="text/css">
        <link href="/assets/plugins/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #1F8CDF;
                display: table;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .title {
                font-size: 3.4em;
                font-weight: 700;
                text-transform: uppercase;
            }
            .sub-title {
                font-size: 2em;
                font-weight: 300;
                text-transform: uppercase;
                margin-bottom: 10px;
            }
            .bottom-title {
                margin-top: 20px;
            }
            .bottom-title a {
                font-weight: 400;
                font-size: 1.1em;
                background-color: #1F8CDF;
                color: #fff;
                padding: 7px 10px;
                border-radius: 8px;
                display: inline-block;
                border: 2px solid transparent;
            }
            .bottom-title a:hover {
                text-decoration: none;
                outline: none;
                background-color: transparent;
                border: 2px solid #1F8CDF;
                color: #1F8CDF;
            }
            .bottom-title a:focus {
                text-decoration: none;
                outline: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="title">Error 404</div>
                <div class="sub-title">Page not found</div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <img src="/assets/img/404.png" class="img-responsives">
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
            <div class="row">
                <div class="bottom-title">
                    <a href="{{ url('/') }}">Back to Homepage</a>
                </div>
            </div>
        </div>
    </body>
</html>
