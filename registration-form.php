
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $student_id = $_POST['student_id'];
    $course = $_POST['course'];
    // Process the data (e.g., save to database)
    echo "Registration successful for $name!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="post" action="">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="student_id">Student ID:</label>
        <input type="text" id="student_id" name="student_id" required><br><br>
        
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>