<?php

// In PHP, write a function to Find the last Friday of the current month. If today is past that date, find the last Friday of the next month.

function findLastFriday() {
    $currentDate = new DateTime(); // Get the current date
    $currentMonth = $currentDate->format('Y-m');
    $lastDayOfMonth = new DateTime("last day of $currentMonth");

    // Find the last Friday of the current month
    while ($lastDayOfMonth->format('l') !== 'Friday') {
        $lastDayOfMonth->modify('-1 day');
    }

    // If today is past the last Friday of the current month, find the last Friday of next month
    if ($currentDate > $lastDayOfMonth) {
        $nextMonth = $currentDate->modify('first day of next month')->format('Y-m');
        $lastDayOfNextMonth = new DateTime("last day of $nextMonth");

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