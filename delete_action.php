<?php
// deleteRecord.php
include("connectdb.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the student ID from the AJAX request
    $studentid = $_POST['studentid'];

    try {
        // Prepare and execute delete query
        $stmt = $conn->prepare("DELETE FROM student WHERE studentid = :studentid");
        $stmt->bindParam(':studentid', $studentid, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Record deleted successfully.";
        } else {
            echo "Failed to delete record.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method.";
}
?>
