<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $idNo = $_POST['idNo'];
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $middleName = $_POST['mName'];
    $course = $_POST['course'];
    $yearLevel = $_POST['yearLevel'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    // Debugging: Print out the values
    echo "ID No: $idNo<br>";
    echo "First Name: $firstName<br>";
    echo "Last Name: $lastName<br>";
    echo "Middle Name: $middleName<br>";
    echo "Course: $course<br>";
    echo "Year Level: $yearLevel<br>";
    echo "Username: $username<br>";
    echo "Password: $password<br>";

    $checkUsername = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsername);
    if($result->num_rows > 0){
        echo "Username Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users (idNo, firstName, lastName, middleName, course, yearLevel, username, password)
                        VALUES ('$idNo', '$firstName', '$lastName', '$middleName', '$course', '$yearLevel', '$username', '$password')";
        
        // Debugging: Print the insert query
        echo $insertQuery;

        if($conn->query($insertQuery) === TRUE){
            echo "Registration successful!";
            header("location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
    exit(); // Ensure the script exits after processing signUp
}

if(isset($_POST['signIn'])){
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = md5($password);
    
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Not Found, Incorrect Username or Password";
        }
    } else {
        echo "Username and Password are required.";
    }
}
?>