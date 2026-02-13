<!-- SET -A  -->

<!-- Create a task scheduler program that allows users to add tasks for different days. 
Implement the following functionalities:
Allow users to input tasks for each day of the week using a loop and conditional statements.
Implement a function that takes a day as input and displays all tasks scheduled for that day.
Provide an option for users to view all tasks for the entire week.
Handle cases where there are no tasks scheduled for a specific day. -->

<?php
echo "<h1> CA-1 Question -1";
function displayDayTasks($schedule, $day) {
    echo "<h3>Tasks for $day:</h3>";
    if (!empty($schedule[$day])) {
        echo "<ul>";
        foreach ($schedule[$day] as $task) {
            echo "<li>$task</li>";
        }
        echo "</ul>";
    } else {
        echo "No tasks scheduled for $day.<br>";
    }
}
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$weeklySchedule = [];

foreach ($days as $day) {
   
    $weeklySchedule[$day] = []; 
}
$weeklySchedule["Monday"][] = "Go to walk ";
$weeklySchedule["Wednesday"][] = "FOOTBALL MATCH WITH FRIENDS";
displayDayTasks($weeklySchedule, "Monday");
displayDayTasks($weeklySchedule, "Tuesday");
echo "<h2>Full Weekly Schedule</h2>";
foreach ($weeklySchedule as $day => $tasks) {
    if (!empty($tasks)) {
        echo "<strong>$day:</strong> " . implode(", ", $tasks) . "<br>";
    } else {
        echo "<strong>$day:</strong> No tasks.<br>";
    }
}
?>
