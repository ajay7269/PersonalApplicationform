<?php
$servername = "localhost";
$username = "root";
$password = ""; // Set your MySQL password here
$dbname = "my_database"; // Change to your database name

// Connect to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['upload'])) {
    $fileName = $_FILES['myfile']['name'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileError = $_FILES['myfile']['error'];

    // Folder to save uploaded files
    $uploadDir = "uploads/";

    // Create folder if not exists
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $targetPath = $uploadDir . basename($fileName);

    // Move file to folder
    if (move_uploaded_file($fileTmpName, $targetPath)) {
        // Insert into database
        $sql = "INSERT INTO files (file_name, file_path, file_size)
                VALUES ('$fileName', '$targetPath', $fileSize)";

        if ($conn->query($sql) === TRUE) {
            echo "File uploaded and saved to database successfully.";
        } else {
            echo "Database Error: " . $conn->error;
        }
    } else {
        echo "Failed to upload file.";
    }
}

$conn->close();
?>
