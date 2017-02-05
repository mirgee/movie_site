<?php session_start();
?>
<html>
<head>
<title>How many days in this month?</title>
</head>
<body>
<?php
function timesLoaded() {
	if ($_SESSION['timesLoaded'] == NULL) { $_SESSION['timesLoaded'] = 1;}
	else { ++$_SESSION['timesLoaded']; }
	echo $_SESSION['timesLoaded'];
}
date_default_timezone_set(‘America/New_York’);
$month = date('n');
$monthText = date('F');
$remDays = 365 - date('z');
$hour = date('G');

echo 'The month is ' . $monthText . '<br/>';
echo 'Numbuer of days is ';
if ($month == 1) { echo '31'; }
if ($month == 2) { echo '28 (unless it\’s a leap year)'; }
if ($month == 3) { echo '31'; }
if ($month == 4) { echo '30'; }
if ($month == 5) { echo '31'; }
if ($month == 6) { echo '30'; }
if ($month == 7) { echo '31'; }
if ($month == 8) { echo '31'; }
if ($month == 9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
echo '<br/>';
echo 'There are ' . $remDays . ' days left in this year';
echo '<br/>';

if ($hour < 12) { echo 'Good morning!'; }
else if ($hour < 17) { echo 'Good afternoon!'; }
else { echo 'Good evening!'; }

timesLoaded();
?>
</body>
</html>
