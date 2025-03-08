<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (name, roll_no, class, section, gender, mobile, email, address) 
            VALUES ('$name', '$roll_no', '$class', '$section', '$gender', '$mobile', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student Registered Successfully');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');window.history.back();</script>";
    }

    $conn->close();
}
?>
