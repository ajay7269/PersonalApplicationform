<?php
include 'db_connect.php';

// Uploads folder
$uploadDir = "uploads/";
if (!file_exists($uploadDir)) mkdir($uploadDir);

// Upload function
function uploadFile($input, $dir) {
    if (isset($_FILES[$input]) && $_FILES[$input]['error'] == 0) {
        $name = uniqid() . "_" . basename($_FILES[$input]['name']);
        $path = $dir . $name;
        move_uploaded_file($_FILES[$input]['tmp_name'], $path);
        return $path;
    }
    return "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form values (use proper sanitization in production)
    $name = $_POST['name_as_per_aadhaar'] ?? '';
    $aadhaar = $_POST['aadhaar_number'] ?? '';
    $email = $_POST['email'] ?? '';
    $mobile = $_POST['mobile_number'] ?? '';
    $dob = $_POST['dob'] ?? '';
    
    // File uploads
    $aadhaar_file = uploadFile('aadhaar_file', $uploadDir);
    $photo_file = uploadFile('photo_file', $uploadDir);

    // Save to database
    $sql = "INSERT INTO employee_info (name_as_per_aadhaar, aadhaar_number, dob, email, mobile_number, aadhaar_file, photo_file)
            VALUES ('$name', '$aadhaar', '$dob', '$email', '$mobile', '$aadhaar_file', '$photo_file')";

    if ($conn->query($sql)) {
        echo "Saved successfully. Generating PDF...";
        // Redirect to PDF generation
        header("Location: generate_pdf.php?email=" . urlencode($email));
        exit;
    } else {
        echo "Database Error: " . $conn->error;
    }

    $conn->close();
}
?>
