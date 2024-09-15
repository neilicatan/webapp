<?php 
include "connectdb.php";

try {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $newpassword = md5($password);

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Username already exists
        echo json_encode(array("response" => "error", "message" => "Username already exists"));
    } else {
        // Insert new user if username does not exist
        $stmt = $conn->prepare("INSERT INTO user (fullname, username, password) VALUES (:fullname, :username, :password)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $newpassword);

        if ($stmt->execute()) {
            echo json_encode(array("response" => "success", "message" => "User registered successfully"));
        } else {
            echo json_encode(array("response" => "error", "message" => "Error registering user"));
        }
    }

} catch (PDOException $e) {
    echo json_encode(array("response" => "error", "message" => "Connection failed: " . $e->getMessage()));
}
?>
