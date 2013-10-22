<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Like a Cat - LKCT</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="fancybox.css">

        <script type="text/javascript">
            var _gaq = [];
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="script.js"></script>
        <script src="fancybox.js"></script>
    </head>
    <body>
        <div id="main">
            <div id="cat"></div>
            <div id="content">
                <h1>Like a Cat</h1>
                <div id="nav">
                    <ul>
                        <li><a href="#band">Band</a></li>
                        <li><a href="#pics">Pics</a></li>
                        <li><a href="#dates">Dates</a></li>
                        <li><a href="#music">Music</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div id="body">
                    <?php
                        include('./pages/band.inc.php');
                        include('./pages/pics.inc.php');
                        include('./pages/dates.inc.php');
                        include('./pages/music.inc.php');
                        include('./pages/contact.inc.php');
                    ?>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-36687360-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>