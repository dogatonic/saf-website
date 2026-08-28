<?php

// Find the last Friday of the current month. After 10 PM Chicago time
// on that date, find the last Friday of the next month.

function findLastFriday() {
    $chicagoTimeZone = new DateTimeZone('America/Chicago');
    $currentDate = new DateTime('now', $chicagoTimeZone);
    $currentMonth = $currentDate->format('Y-m');
    $lastDayOfMonth = new DateTime("last day of $currentMonth", $chicagoTimeZone);

    // Find the last Friday of the current month
    while ($lastDayOfMonth->format('l') !== 'Friday') {
        $lastDayOfMonth->modify('-1 day');
    }
    $lastDayOfMonth->setTime(22, 0);

    // After 10 PM on the last Friday, find the last Friday of next month.
    if ($currentDate > $lastDayOfMonth) {
        $nextMonth = $currentDate->modify('first day of next month')->format('Y-m');
        $lastDayOfNextMonth = new DateTime("last day of $nextMonth", $chicagoTimeZone);

        while ($lastDayOfNextMonth->format('l') !== 'Friday') {
            $lastDayOfNextMonth->modify('-1 day');
        }

        return $lastDayOfNextMonth->format('F d');
    }

    return $lastDayOfMonth->format('F d');
}

// Example usage:
// echo findLastFriday();
?>
