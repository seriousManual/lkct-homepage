<?php
$dates = include('inc/dates.inc.php');

function parseDates($dates, $when) {
    $now = new DateTime();
    $now->setTime(0,0,0);
    $res = Array();

    foreach($dates as $date) {
        if($date['date'] < $now && $when == 'past') {
            $res[] = $date;
        }

        if($date['date'] >= $now && $when == 'new') {
            $res[] = $date;
        }
    }

    return $res;
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>LikeACat - LKCT</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="reset.css">
        <link rel="stylesheet" type="text/css" href="style.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="script.js"></script>
	</head>
	<body>
        <div id="main">
            <div id="cat"></div>
            <div id="content">
                <h1>Like A Cat</h1>

                <h2>Dates</h2>
                <div class="box">
                    <ul class="dates">
                        <?php
                            foreach(parseDates($dates, 'new') as $date) {
                                $a = $date['date'];

                                echo '<li class="clearfix">';
                                echo '<div class="date">' . $a->format('d.m.Y') . '</div>';
                                echo '<div class="desc">' . $date['desc'] . '</div>';
                                echo '</li>';
                            }
                        ?>
                    </ul>
                </div>

                <div class="clearfix"></div>

                <h2>Music</h2>
                <div class="box">
                    <iframe width="450" height="400" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F37122693&amp;color=ff6600&amp;auto_play=false&amp;show_artwork=false"></iframe>
                </div>

                <div class="clearfix"></div>


                <h2>Contact</h2>
                <div class="box">
                    <a href="mailto:mail@likeac.at" target="_blank"><img src="pics/icon_mail.png"></a>
                    <a href="https://www.facebook.com/likeacatband" target="_blank"><img src="pics/icon_facebook2.png"></a>
                    <a href="https://soundcloud.com/lkct/" target="_blank"><img src="pics/icon_soundcloud2.png"></a>
                    <a href="http://www.youtube.com/likeacatband" target="_blank"><img src="pics/icon_youtube2.png"></a>
                </div>

                <div class="clearfix"></div>

                <h2>Past Dates</h2>
                <div class="box">
                    <ul class="dates past">
                        <?php
                        foreach(parseDates($dates, 'past') as $date) {
                            $a = $date['date'];

                            echo '<li class="past clearfix">';
                            echo '<div class="date">' . $a->format('d.m.Y') . '</div>';
                            echo '<div class="desc">' . $date['desc'] . '</div>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>

                <div class="clearfix"></div>
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
