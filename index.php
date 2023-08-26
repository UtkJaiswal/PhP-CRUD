<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
</head>
<body>
    <h1>Student CRUD Application</h1>
    <a href="create.php">Add Student</a>
    <br><br>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        
        <?php
        include 'db_config.php';

        // echo "<pre>";
        // print_r($conn);
        
        $query = "SELECT * FROM students";
        $result = $conn->query($query);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['age']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td><a href='update.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
