<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./flower/flower.css">
    <link rel="stylesheet" href="./rain4/rain4.css">
    <link rel="stylesheet" href="./rain6/rain6.css">
    <link rel="stylesheet" href="./star/star.css">
    <link rel="stylesheet" href="./maple/maple.css">
    <link rel="stylesheet" href="./shootingStar/shootingStar.css">
    <link rel="stylesheet" href="./leaf/leaf.css">
    <link rel="stylesheet" href="./snow/snow.css">
</head>

<body>

    <?php

    $cal = [];
    $lCal = [];
    $nCal = [];
    $year = (isset($_GET['y'])) ? $_GET['y'] : date("Y");
    $month = (isset($_GET['m'])) ? $_GET['m'] : date("n");

    $prevMonth = $month - 1;
    $nextMonth = $month + 1;
    $prevYear = $year;
    $nextYear = $year;

    if ($nextMonth == 13) {
        $nextMonth = 1;
        $nextYear = $year + 1;
    } elseif ($prevMonth == 0) {
        $prevMonth = 12;
        $prevYear = $year - 1;
    }

    $year = str_pad($year, 4, "0", STR_PAD_LEFT);
    // echo $year;
    // echo date("Y-1-1",strtotime("$year-1-1"));


    // 月份第一天
    $firstDay = $year . "-" . $month . "-1";
    // 本月第一天是星期幾
    $firstDayWeek = date("N", strtotime($firstDay));
    // 本月共有幾天
    $monthDays = date("t", strtotime($firstDay));
    // 本月前的空白天數
    $spaceDays = $firstDayWeek - 1;
    // 本月共有幾週
    $weeks = ceil(($monthDays + $spaceDays) / 7);
    // 本月的日期
    $days = date("Y-m-d", strtotime("$year-$month-d"));
    // 今天的日期
    $today = date("Y-m-d");

    // echo $firstDay;
    // echo $firstDayWeek;
    // echo $monthDays;
    // echo $spaceDays;
    // echo $weeks;
    // echo $days;
    // echo $today;


    // 上個月的第一天
    $lastFD = date("Y-m-d", strtotime("-1 month", strtotime($firstDay)));
    // 上個月共有幾天
    $lastMD = date("t", strtotime($lastFD));
    // 上個月的日期
    // $lastDs=date("Y-m-d", strtotime("-1 month", strtotime("$year-$month-d")));

    // echo $lastFD;
    // echo $lastMD;
    // echo $lastDs;


    // 下個月的第一天
    $nextFD = date("Y-m-d", strtotime("+1 month", strtotime($firstDay)));
    // 上個月共有幾天
    $nextMD = date("t", strtotime($nextFD));
    // 上個月的日期
    // $nextDs=date("Y-m-d", strtotime("+1 month", strtotime("$year-$month-d")));
    // echo $nextFD;
    // echo $nextMD;
    // echo $nextDs;


    // 上個月的陣列
    for ($l = 0; $l < $lastMD; $l++) {
        $lCal[] = date("Y-m-d", strtotime("+$l days", strtotime($lastFD)));
    }
    // print_r($lCal);


    // 這個月的陣列
    // for ($i = 0; $i < $spaceDays; $i++) {
    //     $cal[] = '';
    // }

    for ($i = 0; $i < $monthDays; $i++) {
        $cal[] = date("Y-m-d", strtotime("+$i days", strtotime($firstDay)));
    }
    // print_r($cal);


    // 下個月的陣列
    for ($n = 0; $n < $nextMD; $n++) {
        $nCal[] = date("Y-m-d", strtotime("+$n days", strtotime($nextFD)));
    }
    // print_r($nCal);

    ?>
    <?php
    switch ($month) {
        case 1:
            $bg = "background1";
            break;
        case 2:
            $bg = "background2";
            break;
        case 3:
            $bg = "background3";
            break;
        case 4:
            $bg = "background4";
            break;
        case 5:
            $bg = "background5";
            break;
        case 6:
            $bg = "background6";
            break;
        case 7:
            $bg = "background7";
            break;
        case 8:
            $bg = "background8";
            break;
        case 9:
            $bg = "background9";
            $seasonleft = "mapleleft";
            break;
        case 10:
            $bg = "background10";
            break;
        case 11:
            $bg = "background11";
            break;
        case 12:
            $bg = "background12";
            break;
    }

    ?>


    <div class="weather <?= $bg ?>">
        <div class="main">
            <div class="left <?= $seasonleft ?>"></div>
            <div class="container">
                <div class="top">
                    <div class="m">
                        <div class="point-left"> <a href="?y=<?= $prevYear ?>&m=<?= $prevMonth ?>">&lt;&emsp;</a></div>
                        <h1><?= date("F", strtotime($firstDay)) ?> , <?= $year ?></h1>
                        <div class="point"> <a href="?y=<?= $nextYear ?>&m=<?= $nextMonth ?>">&emsp;&gt;</a></div>
                    </div>
                </div>

                <div class="calendar">

                    <div class="weeks">
                        <div class="w"> Mon</div>
                        <div class="w"> Tuse</div>
                        <div class="w"> Wed</div>
                        <div class="w"> Thur</div>
                        <div class="w"> Fri</div>
                        <div class="w"> Sat</div>
                        <div class="w"> Sun</div>
                    </div>

                    <div class="days">

                        <?php

                        // 印上個月
                        for ($l = $lastMD - $spaceDays; $l < $lastMD; $l++) {
                            echo "<div class='d dd'>";
                            // echo $l;
                            echo date('j', strtotime($lCal[$l]));
                            echo "</div>";
                        }

                        // 印這個月
                        foreach ($cal as $i => $days) {
                            // echo $days;
                            if ($today == $days) {
                                echo "<div class='d'>";
                                echo "<div class='td-dtyle'>";
                                echo date('j', strtotime($days));
                                echo "</div>";
                                echo "</div>";
                            } else {
                                echo "<div class='d'>";
                                // echo $days;
                                echo date('j', strtotime($days));
                                echo "</div>";
                            }
                        }

                        // 印下個月
                        // echo $weeks*7 -($monthDays + $spaceDays);
                        for ($n = 0; $n < $weeks * 7 - ($monthDays + $spaceDays); $n++) {
                            echo "<div class='d dd'>";
                            echo date('j', strtotime($nCal[$n]));
                            echo "</div>";
                        }

                        ?>
                    </div>

                </div>
            </div>
            <div class="right">
                <div class="search" id="demo">
                    <form action="./calendar.php" method="get">
                        <div>
                            Year
                            <br>
                            <input class="search_input" type="number" name="y" id="" min="1" size="2" required>
                        </div>
                        <br>
                        <div>
                            Month
                            <br>
                            <input class="search_input" type="number" name="m" id="" min="1" max="12" required>
                        </div>
                        <br>
                        <div>
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="cute" >
                        <div class="cat"></div>
                </div>
            </div>
        </div>
        <footer>
            <div class="today"><a href="./index.php">BACK</a></div>
        </footer>
    </div>
    <script src="./search.js"></script>

    <script src="./flower/flower.js"></script>
    <script src="./rain4/rain4.js"></script>
    <script src="./rain6/rain6.js"></script>
    <script src="./star/star.js"></script>
    <script src="./maple/maple.js"></script>
    <script src="./shootingStar/shootingStar.js"></script>
    <script src="./leaf/leaf.js"></script>
    <script src="./snow/snow.js"></script>
</body>

</html>