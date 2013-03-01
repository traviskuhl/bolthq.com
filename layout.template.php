<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bolt - a PHP framework</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/prod.kuhl.co/font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
        <style type="text/css">
            html, body {
                width: 100%;
                height: 100%;
                background: #56606D;


            }
            body {
                background-image: url(http://s3.amazonaws.com/prod.kuhl.co/generic/images/static.png);
                z-index: 1;
            }
            body:after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 3%, rgba(255,255,255,0.77) 25%, rgba(255,255,255,0) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(3%,rgba(255,255,255,1)), color-stop(25%,rgba(255,255,255,0.77)), color-stop(100%,rgba(255,255,255,0)));
                background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 3%,rgba(255,255,255,0.77) 25%,rgba(255,255,255,0) 100%);
                background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 3%,rgba(255,255,255,0.77) 25%,rgba(255,255,255,0) 100%);
                background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,1) 3%,rgba(255,255,255,0.77) 25%,rgba(255,255,255,0) 100%);
                background: radial-gradient(ellipse at center,  rgba(255,255,255,1) 3%,rgba(255,255,255,0.77) 25%,rgba(255,255,255,0) 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#00ffffff',GradientType=1 );
                opacity: .1;
            }

            section {
                z-index: 2;
                height: 200px;
                width: 500px;
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -100px 0 0 -250px;
                text-align: center;
            }

            h1 {
                font-family: "Roboto Condensed";
                font-size: 70px;
                color: #fff;
                text-align: center;
            }

            h1 em {
                display: inline-block;
                background: #383847;
                width: 70px;
                height: 70px;
                border-radius: 100px;
                position: relative;
                font-size: 62px;
                top: 8px;
                margin-left: 10px;
            }
            h1 em i {
                position: absolute;
                top: 3px;
                left: 19px;
                text-shadow: rgba(0,0,0,.5) 1px 1px;
            }
            h2 {
                font-family: "Roboto Condensed";
                font-size: 22px;
                color: rgba(255,255,255,.3);
            }
            nav {
                display: block;
                color: #fff;
                margin: 20px 0 10px;
            }
            nav a {
                -webkit-transition: all .5s ease-in;
                -moz-transition: all .5s ease-in;
                transition: all .5s ease-in;
                position: relative;
                display: inline-block;
                color: #fff;
                font-size: 32px;
                margin: 0 5px;
                text-shadow: rgba(0,0,0,.3) 1px 1px;
                opacity: 0;
                top: 30px;
            }
            nav a:nth-child(2) { top: 40px;}
            nav a:nth-child(3) { top: 50px;}
            nav a em {
                display: none;
            }

            code {
                -webkit-transition: all .5s ease-in;
                -moz-transition: all .5s ease-in;
                transition: all .5s ease-in;
                position: relative;
                top: 20px;
                margin-top: 20px;
                display: inline-block;
                color: #fff;
                text-shadow: rgba(0,0,0,.3) 1px 1px;
                opacity: 0;
                padding: 5px 20px;
                background: rgba(255,255,255,.1);
                border-radius: 5px;
                box-shadow: inset 1px 1px 2px rgba(0,0,0,.2);
            }
            body:hover code, body:hover nav a {
                opacity: 1;
                top: auto;
            }
        </style>
    </head>
    <body>
        <section>
            <h1><b>Bolt</b><em><i class="icon-bolt"></i></em></h1>
            <h2>a PHP Framework</h2>
            <code>curl -Ls http://bolthq.com/install | php</code>
            <nav>
                <a href="/download" class="icon-arrow-down"><em>Download</em></a>
                <a href="http://github.com/traviskuhl/bolt" class="icon-github"><em>Github</em></a>
                <a href="irc:://irc.oftc.net/#bolt" class="icon-comments-alt"><em>IRC</em></a>
            </nav>
        </section>
    </body>
</html>