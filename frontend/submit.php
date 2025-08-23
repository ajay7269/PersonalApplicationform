<?php
include 'db_connect.php';

// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Upload directory
$uploadDir = "uploads/";
if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);

// Function to handle file uploads
function uploadFile($fileInputName, $uploadDir) {
    if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === 0) {
        $filename = basename($_FILES[$fileInputName]['name']);
        $targetPath = $uploadDir . uniqid() . "_" . $filename;
        move_uploaded_file($_FILES[$fileInputName]['tmp_name'], $targetPath);
        return $targetPath;
    }
    return "";
}

// Uploaded file paths
$aadhaar_file = uploadFile('aadhaar_file', $uploadDir);
$account_file = uploadFile('account_file', $uploadDir);
$photo_file = uploadFile('photo_file', $uploadDir);
$pan_card_file = uploadFile('pan_card_file', $uploadDir);
$certificate_file = uploadFile('certificate_file', $uploadDir);
$family_photo = uploadFile('family_photo', $uploadDir);
$signature = uploadFile('signature', $uploadDir);

// Helper function to get safe POST data
function post($key) {
    return $_POST[$key] ?? '';
}

// Only handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Fetch all form inputs safely
    $name               = post('name_as_per_aadhaar');
    $middle             = post('middle_last_name');
    $aadhaar            = post('aadhaar_number');
    $gender             = post('gender');
    $guardian_name      = post('guardian_name');
    $guardian_relation  = post('guardian_relation');
    $dob                = post('dob');
    $address1           = post('address_line1');
    $address2           = post('address_line2');
    $city               = post('city');
    $state              = post('state');
    $zip                = post('zip_code');
    $country            = post('country');
    $mobile             = post('mobile_number');
    $email              = post('email');
    $marital            = post('marital_status');
    $dob_marriage       = post('dob_of_marriage');
    $mailing_address    = post('mailing_address');
    $mailing_state      = post('mailing_state');
    $mailing_zip        = post('mailing_zip_code');
    $mailing_country    = post('mailing_country');
    $bank               = post('bank_name');
    $acc_number         = post('account_number');
    $acc_holder         = post('account_holder_name');
    $branch             = post('branch_address_location');
    $ifsc               = post('ifsc_code');
    $pan_name           = post('pan_name');
    $father_name        = post('father_name');
    $pan_number         = post('pan_number');
    $pan_dob            = post('pan_dob');
    $company            = post('company_name');
    $designation        = post('designation');
    $doj                = post('dob_of_joining');
    $dol                = post('dob_of_leaving');
    $uan                = post('uan');
    $esic               = post('esic_no');
    $course             = post('course_name');
    $university         = post('university_school_name');
    $passing_year       = post('passing_year');
    $education_level    = post('highest_education_level');
    $emergency_name     = post('emergency_contact_name');
    $emergency_number   = post('emergency_contact_number');
    $emergency_address  = post('emergency_contact_address');
    $consent            = post('declaration_certificates_consent');
    $epf_exemption      = post('epf_exemption_request');
    $terms              = post('terms_of_appointment_eternal_hr');
    $text_in_box        = post('text_in_box');

    // Prepare SQL statement
    $sql = "INSERT INTO employee_info (
        name_as_per_aadhaar, middle_last_name, aadhaar_number, gender,
        guardian_name, guardian_relation, dob, address_line1, address_line2, city,
        state, zip_code, country, aadhaar_file, account_proof_file, photo_file, 
        mobile_number, email, marital_status, dob_of_marriage, mailing_address, 
        mailing_state, mailing_zip_code, mailing_country, bank_name, account_number, 
        account_holder_name, branch_address_location, ifsc_code, pan_name, father_name, 
        pan_number, pan_dob, pan_card_file, company_name, designation, dob_of_joining, 
        dob_of_leaving, uan, esic_no, course_name, university_school_name, passing_year, 
        highest_education_level, certificate_file, emergency_contact_name, 
        emergency_contact_number, emergency_contact_address, 
        declaration_certificates_consent, epf_exemption_request, 
        terms_of_appointment_eternal_hr, family_photo, signature, text_in_box
    ) VALUES (
        '$name', '$middle', '$aadhaar', '$gender',
        '$guardian_name', '$guardian_relation', '$dob', '$address1', '$address2', '$city',
        '$state', '$zip', '$country', '$aadhaar_file', '$account_file', '$photo_file', 
        '$mobile', '$email', '$marital', '$dob_marriage', '$mailing_address', 
        '$mailing_state', '$mailing_zip', '$mailing_country', '$bank', '$acc_number', 
        '$acc_holder', '$branch', '$ifsc', '$pan_name', '$father_name', 
        '$pan_number', '$pan_dob', '$pan_card_file', '$company', '$designation', 
        '$doj', '$dol', '$uan', '$esic', '$course', '$university', '$passing_year', 
        '$education_level', '$certificate_file', '$emergency_name', '$emergency_number', 
        '$emergency_address', '$consent', '$epf_exemption', '$terms', 
        '$family_photo', '$signature', '$text_in_box'
    )";

    // Execute the SQL
    if ($conn->query($sql) === TRUE) {
        echo "✅ Employee data saved successfully.";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Please submit the form first.";
}
?>
