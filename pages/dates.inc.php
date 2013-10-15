<?php
    $dates = include('./inc/dates.inc.php');

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

<div id="pagedates" class="page">
    <h2>Coming Up</h2>
    <?php
        $parsedDates = parseDates($dates, 'new');

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