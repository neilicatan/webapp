<?php 
include "connectdb.php";

try {
    $studentnum = $_POST["studentnum"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $birthdate = $_POST["birthdate"];


    // Check if the email already exists
    $stmt = $conn->prepare("SELECT * FROM student WHERE email = :email");
    $stmt->execute(['email' => $email]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(array("response" => "error", "message" => "Email already exists."));
        exit;
    } 

    // Check if the student number already exists
    $stmt = $conn->prepare("SELECT * FROM student WHERE studentnum = :studentnum");
    $stmt->execute(['studentnum' => $studentnum]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(array("response" => "error", "message" => "Student number already exists."));
        exit;
    } 

    $stmt = $conn->prepare("SELECT * FROM student WHERE contact = :contact");
    $stmt->execute(['contact' => $contact]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(array("response" => "error", "message" => "Phone number already exists."));
        exit;
    } 


    // Insert new user
    $stmt = $conn->prepare("INSERT INTO student (studentnum,firstname,middlename,lastname,contact,email,birthdate) 
    VALUES (:studentnum, :firstname, :middlename, :lastname, :contact, :email, :birthdate)");
    $stmt->bindParam(':studentnum', $studentnum);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':middlename', $middlename);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':contact', $contact);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':birthdate', $birthdate);

    if ($stmt->execute()) {
        echo json_encode(array ("response" => "success", "message" => "Successfully registered"));
    } else {
        echo json_encode(array("response" => "error", "message"=> "Registration failed"));
    } 

}catch (PDOException $e) {
    echo json_encode(array("response" => "error", "message" => "Database error" . $e->getMessage()));
}
?>
