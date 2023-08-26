<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <?php
    include 'db_config.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        $query = "SELECT * FROM students WHERE id = $id";
        $result = $conn->query($query);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
    ?>
    <form action="" method="post">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
        Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"><br>
        Status: <input type="text" name="status" value="<?php echo $row['status']; ?>"><br>
        <input type="submit" name="submit" value="Update Student">
    </form>
    <?php
        } else {
            echo "Student not found.";
        }
    }
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $status = $_POST['status'];
        
        $query = "UPDATE students SET name='$name', email='$email', phone='$phone', age='$age', status='$status' WHERE id = $id";
        
        if ($conn->query($query) === TRUE) {
            echo "Student updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    ?>
</body>
</html>
