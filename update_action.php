<?php
// updateRecord.php
include("connectdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from AJAX request
    $studentid = $_POST['studentid'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    try {
        // Prepare and execute update query
        $stmt = $conn->prepare("UPDATE student SET firstname = :firstname, middlename = :middlename, lastname = :lastname, contact = :contact, email = :email WHERE studentid = :studentid");

        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':middlename', $middlename);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':contact', $contact);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':studentid', $studentid, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Failed to update record.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
