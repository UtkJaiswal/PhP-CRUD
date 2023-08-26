<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="" method="post">
        Name: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Phone: <input type="text" name="phone"><br>
        Age: <input type="number" name="age"><br>
        Status: <input type="text" name="status"><br>
        <input type="submit" name="submit" value="Add Student">
    </form>

    <?php
    include 'db_config.php';
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $status = $_POST['status'];
        
        $query = "INSERT INTO students (name, email, phone, age, status) VALUES ('$name', '$email', '$phone', '$age', '$status')";
        
        if ($conn->query($query) === TRUE) {
            echo "Student added successfully";
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
