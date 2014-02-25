<?php
    $dates = include('./inc/dates.inc.php');

    function parseDates($dates, $when, $direction) {
        $now = new DateTime();
        $now->setTime(0,0,0);
        $res = Array();

        foreach($dates as $date) {
            if($date['date'] < $now && $when == 'past') {
                $res[] = $date;
            }

            if($date['date'] > $now && $when == 'new') {
                $res[] = $date;
            }

            if($date['date'] == $now && $when == 'today') {
                $res[] = $date;
            }
        }

        usort($res, function(Array $a, Array $b) use ($direction) {
            return ($a['date']->getTimestamp() - $b['date']->getTimestamp()) * ($direction ? -1 : 1);
        });

        return $res;
    }
?>

<div id="pagedates" class="page">
<?php
    $parsedDates = parseDates($dates, 'today', false);

    if(count($parsedDates) > 0) {
        echo '<h2 class="dateToday">Today!</h2>';

        echo "<ul class=\"dates\">";
        foreach($parsedDates as $date) {
            $a = $date['date'];

            echo '<li class="clearfix">';
            echo '<div class="date">' . $a->format('d.m.Y') . '</div>';
            echo '<div class="desc">' . $date['desc'] . '</div>';
            echo '</li>';
        }
        echo "</ul>";
        echo "<br><br>";
    }
?>

<h2>Coming Up</h2>
<?php
    $parsedDates = parseDates($dates, 'new', false);

    if(count($parsedDates) > 0) {
        echo "<ul class=\"dates\">";
        foreach($parsedDates as $date) {
            $a = $date['date'];

            echo '<li class="clearfix">';
            echo '<div class="date">' . $a->format('d.m.Y') . '</div>';
            echo '<div class="desc">' . $date['desc'] . '</div>';
            echo '</li>';
        }
        echo "</ul>";
    } else {
        echo '...no upcoming dates...';
    }
?>
<br><br>
<h2>Past Dates</h2>
<ul class="dates past">
    <?php
        foreach(parseDates($dates, 'past', true) as $date) {
            $a = $date['date'];

            echo '<li class="past clearfix">';
            echo '<div class="date">' . $a->format('d.m.Y') . '</div>';
            echo '<div class="desc">' . $date['desc'] . '</div>';
            echo '</li>';
        }
    ?>
</ul>
</div>