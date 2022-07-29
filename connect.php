<?php
    $name = $_POST['name'];
    $name = $_POST['email'];
    $name = $_POST['gender'];

    //Database connection
    $conn = new myspli('localhost','root','','test2')
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error)
    }else{
        $stmt = $conn->prepare("insert into registration(username,email,gender) values(?,?,?)");
        $stmt->bind_param("sss", $username, $email, $gender);
        $stmt_execute();
        echo "registered successfully";
        $stmt->close();
        $conn->close();
    }
    ?>