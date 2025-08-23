
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Personal Information Form</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Base Body Styling */
    body {
      background-color: #b1d0f1ff;
      padding: 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Unified Section Styling */
    .section-card,
    .form-section,
    .captcha-card {
      background-color: #ffffff;
      border: 1px solid #007bff;
      border-radius: 8px;
      padding: 25px;
      margin-bottom: 30px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }

    /* Section Title */
    .section-title,
    .form-section h5 {
      font-size: 1.2rem;
      font-weight: 600;
      color: #1f3c88;
      font-style: italic;
      text-decoration: underline;
      margin-bottom: 20px;
    }

    /* Form Labels */
    .form-label,
    label {
      font-size: 0.95rem;
      font-weight: 500;
      color: #1f3c88;
    }

    /* Inputs and Textarea */
    .form-control,
    textarea,
    select {
      font-size: 0.95rem;
      padding: 8px 12px;
      border-radius: 6px;
      width: 100%;
      max-width: 100%;
      box-sizing: border-box;
    }

    textarea {
      resize: none;
    }

    /* Tabular Add/Remove Buttons */
    .tabular-group-add {
      display: inline-block;
      background: #619af0;
      color: #fff;
      padding: 6px 12px;
      border-radius: 5px;
      margin-top: 10px;
      text-decoration: none;
    }

    .tabular-group-add:hover {
      background: #4086f0;
      text-decoration: none;
      color: #fff;
    }

    .remove-btn {
      color: red;
      cursor: pointer;
      font-weight: bold;
    }

    /* Placeholder Styling */
    .form-control::placeholder {
      font-size: 0.9rem;
      color: #adb5bd;
    }

    /* Upload Boxes */
    .upload-box,
    .file-upload,
    .captcha-box {
      width: 265px;
      border: 1px solid #4086f0;
      background-color: #f8f9fa;
      border-radius: 8px;
      text-align: center;
      padding: 20px;
      margin-top: 10px;
    }

    /* Upload Note */
    .custom-file-note,
    .form-note,
    .file-upload small {
      font-size: 0.8rem;
      color: #666;
      margin-top: 5px;
      display: block;
    }

    /* Captcha Text Styling */
    .captcha-image {
      font-family: monospace;
      font-size: 24px;
      font-weight: bold;
      letter-spacing: 5px;
      text-decoration: line-through;
      background-color: #ffffff;
      border: 1px solid #ccc;
      padding: 8px 15px;
      margin-top: 10px;
      display: inline-block;
    }

    .captcha-refresh {
      cursor: pointer;
      font-size: 20px;
      color: #0d6efd;
      margin-left: 8px;
      vertical-align: middle;
    }

    /* Employment Section Table */
    .employment-section input {
      min-width: 140px;
    }

    .employment-section .form-label {
      font-size: 0.85rem;
    }

    .employment-section th {
      text-align: center;
      font-size: 0.9rem;
      color: #1f3c88;
    }

    /* Title with Logo */
    .form-title {
      display: flex;
      margin-top: -19px;
      justify-content: space-between;
      align-items: center;
      background: linear-gradient(to right, #ddeaff, #d7e1f5);
      padding: 20px;
      border-bottom: 0 solid #4099ff;
    }

    .form-title h3 {
      margin: 0;
      color: #1e3a8a;
    }

    .form-title img {
      height: 60px;
    }

    /* Responsive Grid */
    .row {
      display: flex;
      flex-wrap: wrap;
      margin-left: -10px;
      margin-right: -10px;
    }

    [class^="col-"] {
      padding-left: 10px;
      padding-right: 10px;
      box-sizing: border-box;
    }

    .col-md-6,
    .col-md-4,
    .col-md-3,
    .col-md-2 {
      flex: 1 1 100%;
    }

    @media (min-width: 576px) {
      .col-md-6 {
        flex: 0 0 50%;
      }

      .col-md-4 {
        flex: 0 0 33.3333%;
      }

      .col-md-3 {
        flex: 0 0 25%;
      }

      .col-md-2 {
        flex: 0 0 16.6667%;
      }
    }

    /* Buttons */
    .btn-outline-light {
      border: 1px solid #ffffff;
      color: #141212;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: #ffffff;
      padding: 8px 16px;
      border-radius: 6px;
    }

    /* Full Screen Layout */
    .container-fluid,
    .container {
      width: 100%;
      max-width: 1200px;
      margin: auto;
    }

    /* Small Devices (phones) */
    @media (max-width: 575.98px) {
      .form-title {
        flex-direction: column;
        align-items: flex-start;
      }

      .form-title img {
        height: 40px;
        margin-top: 10px;
      }

      .upload-box,
      .file-upload,
      .captcha-box {
        width: 100%;
      }

      .section-card,
      .form-section,
      .captcha-card {
        padding: 15px;
      }

      .form-label {
        font-size: 0.85rem;
      }

      .section-title {
        font-size: 1rem;
      }

      .btn-primary,
      .btn-outline-light {
        width: 100%;
        margin-bottom: 10px;
      }
    }


    /*Small Devices (Moblie)*/
    @media (min-width: 320px) {
      .container {
        max-width: 425px;
      }
    }


    /* Medium Devices (Tablet) */
    @media (min-width: 768px) {
      .container {
        max-width: 960px;
      }
    }

    /* Large Devices (Laptop and Desktop) */
    @media (min-width: 992px) {
      .container {
        max-width: 1140px;
      }
    }
  </style>

</head>

<body>



  <!-- Header -->
  <div class="form-title">
    <img src="images/logo_54.png" alt="Logo" />
    <div>
      <h3>Personal Information form</h3>
      <div>ETERNAL HR SERVICES PVT. LTD.</div>
    </div>
  </div>

  <!-- Upload Section -->
  <div class="form-section">
    <div class="row g-4">
      <div class="col-md-4">
        <label class="form-label fw-semibold">Upload Adhaar Card copy <span class="text-danger">*</span></label>
        <input type="file" class="form-control" aadhaar_file="aadhaar_file" >

        <div class="custom-file-note">Only files between 5 KB to 100 KB and format should be .jpeg or .jpg</div>
      </div>
      <div class="col-md-4">
        <label class="form-label fw-semibold">Upload Account Proof copy <span class="text-danger">*</span></label>
        <input type="file" class="form-control" account_file="account_file" >
        <div class="custom-file-note">Only files between 5 KB to 100 KB and format should be .jpeg or .jpg</div>
      </div>
      <div class="col-md-4">
        <label class="form-label fw-semibold">Upload Employee's Latest Photo <span class="text-danger">*</span></label>
        <input type="file" class="form-control" photo_file="photo_file" >
        <div class="custom-file-note">Only files between 5 KB to 100 KB and format should be .jpeg or .jpg</div>
      </div>
    </div>
  </div>

  <!-- Aadhaar Card Details -->
  <form action="submit.php" method="POST" enctype="multipart/form-data">
  <div class="form-section">
    <h5><i>Adhaar Card Details</i></h5>
    <div class="row g-3">
      <div class="col-md-3">
        <label class="form-label">Name As per Aadhaar Card <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input  class="form-control"  type="text" name="name_as_per_aadhaar" placeholder="Enter your name">
           
        </div>
      </div>
      <div class="col-md-3">
        <label class="form-label invisible">Middle Name and Last Name</label>
        <input type="text" class="form-control mt-md-2" name="middle_last_name" placeholder="Only Middle and Last Name">
      </div>
      <div class="col-md-3">
        <label class="form-label">Adhaar Card Number <span class="text-danger">*</span></label>
        <input type="text" class="form-control" maxlength="12" name="aadhaar_number" placeholder="12-digit Number" />
      </div>
      <div class="col-md-3">
        <label class="form-label">Gender <span class="text-danger">*</span></label>
        <select class="form-select" >
          <option value="" name="gender">Select</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label class="form-label">Guardian Name <span class="text-danger">*</span></label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/people.svg" alt="person icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" name="guradian_name" placeholder="Father / Husband name">
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label">Guardian Relation</label>
          <select class="form-select">
            <option value="" name="guardian_relation">Select</option>
            <option value="Father">Father</option>
            <option value="Husband">Husband</option>
            <option value="Mother">Mother</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label class="form-label">Date of birth <span class="text-danger">*</span></label>
        <input type="date" class="form-control"  name="dob" >
        <small class="text-muted">Should Not be less than 18 years of age at the time of joining</small>
      </div>
      <div class="col-md-9">
        <label class="form-label">Permanent Address <span class="text-danger">*</span></label>
        <input type="text" class="form-control mb-2" name="address_line1" placeholder="Address Line 1" />
        <input type="text" class="form-control mb-2" name="address_line2" placeholder="Address Line 2" />
        <div class="row g-2">
          <div class="col-md-4">
            <input type="text" class="form-control" name="city" placeholder="City" />
          </div>
          <div class="col-md-4">
            <select class="form-select mb-2">
              <option value="" name="state">State</option>
              <option>Maharashtra</option>
              <option>Karnataka</option>
              <option>Delhi</option>
              <option>Andhra Pradesh</option>
              <option>Arunachal Pradesh</option>
              <option>Assam</option>
              <option>Bihar</option>
              <option>Chhattisgarh</option>
              <option>Goa</option>
              <option>Gujarat</option>
              <option>Haryana</option>
              <option>Himachal Pradesh</option>
              <option>Jharkhand</option>
              <option>Karnataka</option>
              <option>Kerala</option>
              <option>Madhya Pradesh</option>
              <option>Maharashtra</option>
              <option>Manipur</option>
              <option>Meghalaya</option>
              <option>Mizoram</option>
              <option>Nagaland</option>
              <option>Odisha</option>
              <option>Punjab</option>
              <option>Rajasthan</option>
              <option>Sikkim</option>
              <option>Tamil Nadu</option>
              <option>Telangana</option>
              <option>Tripura</option>
              <option>Uttar Pradesh</option>
              <option>Uttarakhand</option>
              <option>West Bengal</option>
              <option>Andaman and Nicobar Islands</option>
              <option>Chandigarh</option>
              <option>Dadra and Nagar Haveli and Daman and Diu
              </option>
              <option>Delhi</option>
              <option>Jammu and Kashmir</option>
              <option>Ladakh</option>
              <option>Lakshadweep</option>
              <option>Puducherry</option>
            </select>
          </div>
          <div class="col-md-2">
            <input type="text" class="form-control" name="zip_code" placeholder="ZIP code" />
          </div>
          <div class="col-md-2">
            <select class="form-select">
              <option selected name="state">India</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Basic Employee's Detail Section -->
  <div class="form-section">
    <h5><u><i>Basic Employee’s Detail</i></u></h5>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="mobile" class="form-label">Mobile Number <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/phone (1).svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" name="mobile_name" placeholder="Only 10 digits ">
        </div>
      </div>
      <div class="col-md-6">
        <label for="disability" class="form-label">Do you Have Any Physical Disability</label>
        <select class="form-select" id="disability">
          <option value="">Select an option</option>
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <div class="input-group">
        <span class="input-group-text">
          <img src="images/envelope-open.svg" alt="person icon" style="width: 16px; height: 16px;">
        </span>
        <input type="text" class="form-control" name="email" placeholder="Email ">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6">
        <label for="maritalStatus" class="form-label">Marital Status <span class="text-danger">*</span></label>
        <select class="form-select" id="maritalStatus" name="marital_status" >
          <option value="">Select status</option>
          <option>Single</option>
          <option>Married</option>
          <option>Unmarried</option>
          <option>Others</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="marriageDate" class="form-label">Date of marriage</label>
        <input type="date" class="form-control" id="marriageDate" name="dob_of_marriage" placeholder="dd-mmm-yyyy">
      </div>
    </div>

    <div class="mb-3">
      <label for="address1" class="form-label" name="mailing_address">Mailing Address</label>
      <input type="text" class="form-control mb-2" id="address1"  placeholder="Address Line 1">
      <input type="text" class="form-control mb-2" id="address2" placeholder="Address Line 2">
      <div class="row">
        <div class="col-md-4">
          <input type="text" class="form-control mb-2" name="mailing_state" placeholder="City">
        </div>
        <div class="col-md-4">
          <select class="form-select mb-2" >
            <option value="">State</option>
            <option>Maharashtra</option>
            <option>Karnataka</option>
            <option>Delhi</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
            <option>Andaman and Nicobar Islands</option>
            <option>Chandigarh</option>
            <option>Dadra and Nagar Haveli and Daman and Diu
            </option>
            <option>Delhi</option>
            <option>Jammu and Kashmir</option>
            <option>Ladakh</option>
            <option>Lakshadweep</option>
            <option>Puducherry</option>


          </select>
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control mb-2" name="mailing_zip_code" placeholder="Zip Code">
        </div>
        <div class="col-md-2">
          <select class="form-select mb-2" name="mailing_country">
            <option selected>India</option>
            <option>USA</option>
            <option>UK</option>
            <option>Other</option>
          </select>
        </div>
      </div>
    </div>
  </div>

  <!-- Bank Account Details Section -->
  <div class="form-section">
    <h5><u><i>Bank Account Details</i></u></h5>
    <form>
      <div class="row mb-3">
        <div class="col-md-4">
          <label for="bankName" class="form-label">Bank Name</label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="bankName" name="bankName" name="bank_name" placeholder="bankName" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="accountNumber" class="form-label">Account Number <span class="text-danger">*</span></label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/input-cursor.svg" alt="Account Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="accountNumber" name="account_Number"
              placeholder="Enter account number" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="accountHolder" class="form-label">Account Holder's Name</label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/person.svg" alt="User Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="accountHolder" name="account_holder_name" placeholder="Holder Name"
              required>
          </div>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="branchAddress" class="form-label">Branch Address / Location</label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/geo-alt.svg" alt="Location Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="branchAddress" name="branch_address_location" placeholder="Location"
              required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="ifsc" class="form-label">IFSC Code <span class="text-danger">*</span></label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/input-cursor.svg" alt="IFSC Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="ifsc" name="ifsc_code" maxlength="11" placeholder="IFSC code"
              required>
          </div>
        </div>
      </div>
  </div>

  <div class="form-section">
    <h5><u><i>PAN Card Details</i></u></h5>
    <div class="row g-3">
      <div class="col-md-4">
        <label for="panName" class="form-label">PAN Name <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="PAN Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="panName" name="pan_name" placeholder="Name as per PAN" required>
        </div>
      </div>
      <div class="col-md-4">
        <label for="fatherName" class="form-label">Father's Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="fatherName" name="father_name" placeholder="Father Name " required>
      </div>
      <div class="col-md-4">
        <label for="panNumber" class="form-label">PAN Number <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/file-spreadsheet.svg" alt="PAN Number Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="panNumber" name="pan_number" placeholder="Pan number"
            maxlength="10" required>
        </div>
      </div>
    </div>
    <div class="row g-3 mt-1">
      <div class="col-md-4">
        <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
        <input type="date" class="form-control" id="dob" name="dob_of_birth" value="dd-mmm-yyyy" required>
      </div>
      <div class="col-md-8">
        <label for="panFile" class="form-label fw-semibold">Upload PAN Card Copy <span
            class="text-danger">*</span></label>
        <input type="file" class="form-control" pan_card_file="pan_card_file" id="panFile" name="panFile" accept=".jpg, .jpeg" required>
        <small class="text-muted">Only files between 5 KB to 100 KB, format should be .jpeg or .jpg</small>
      </div>
    </div>
  </div>


  <div class="form-section">
    <h5 style="color: #1a237e;"><u><i>Current / Previous Employment Details</i></u></h5>
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center">
        <thead style="background-color: #f4f7f9;">
          <tr style="color: #1a237e;">
            <th class="text-start" style="color: #0d6efd;"> </th>
            <th style="color: #1a237e;">1</th>
            <th style="color: #1a237e;">2</th>
            <th style="color:  #1a237e;">3</th>
            <th style="color: #1a237e;">4</th>
            <th style="color: #1a237e;">5</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start" style="color: #1a237e;">Company Name</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Designation</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Date of joining</td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Date of leaving</td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
            <td><input type="" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">UAN</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">ESIC No.</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>



  <div class="form-section">
    <h5 style="color: #1a237e;"><u><i>Family Details</i></u></h5>
    <div class="table-responsive">
      <table class="table table-bordered align-middle text-center" style="background-color: #f4f7f9;">
        <thead>
          <tr style="color: #1a237e;">
            <th class="text-start" style="color: #1a237e;">Relation</th>
            <th style="color: #1a237e;">Family Member Name</th>
            <th style="color: #1a237e;">Relation With Emp.</th>
            <th style="color: #1a237e;">Adhaar Card No.</th>
            <th style="color: #1a237e;">Address</th>
            <th style="color: #1a237e;">Income Per Month</th>
            <th style="color: #1a237e;">Nominee (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-start" style="color: #1a237e;">Father</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Mother</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Spouse</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Child 1</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Child 2</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
          <tr>
            <td class="text-start" style="color: #1a237e;">Child 3</td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="text" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
            <td><input type="number" class="form-control" style="background-color: white;"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>




  <div class="form-section">
    <h5><i>Education Details</i><span class="text-danger">*</span></h5>
    <div id="education-container">

      <div class="row g-3 education-row">
        <div class="col-md-6">
          <label class="form-label">Course Name</label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/mortarboard-fill.svg" alt=" " style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="panName" name="course_name" placeholder="Course Name" required>
          </div><br>
          <label class="form-label">University / School Name</label>
          <div class="input-group">
            <span class="input-group-text">
              <img src="images/stack.svg" alt="PAN Icon" style="width: 16px; height: 16px;">
            </span>
            <input type="text" class="form-control" id="panName" name="university_school_name" placeholder="University / School Name"
              required>
          </div><br>
          <label class="form-label">Passing Year</label>
          <input type="text" class="form-control" placeholder="YYYY">
        </div>
        <div class="col-md-6">
          <label class="form-label d-block">Highest Education level</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="education" id="ug">
            <label class="form-check-label" for="ug">Under Graduate</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="education" id="g">
            <label class="form-check-label" for="g">Graduate</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="education" id="pg">
            <label class="form-check-label" for="pg">Post Graduate</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="education" id="diploma">
            <label class="form-check-label" for="diploma">Diploma</label>
          </div><br><br>
          <div class="col-md-12">
            <label class="form-label fw-semibold">Upload Education Certificates copy<span
                class="text-danger">*</span></label>
            <input type="file" class="form-control" certificate_file="certificate_file" multiple>
            <small class="text-muted">Only files between 5 KB to 100 KB and format should be .jpeg or .jpg Max 5
              files</small>
            <span class="remove-btn d-none">Delete</span>
          </div>
        </div>
      </div>
      <div class="crc-tabular-add">
        <a href="javascript:;" class="tabular-group-add" onclick="addEducationRow()">+ Add More</a>
      </div>
    </div>
  </div>
  </div>



  <div class="form-section">
    <h5><i>Emergency & References Contacts</i><span class="text-danger">*</span></h5>
    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label">Emergency Contact Name</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="contact name" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="Name" name="emergecy_contact_name " placeholder="Name  " required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. Contact Name</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="contact name" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="Name" name="ref_contact_name " placeholder=" Ref. Name  " required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. 2 Contact Name</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="contact name" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="Name" name="ref_2contact_name" placeholder="Ref. 2 Name  " required>
        </div>
      </div>

      <div class="col-md-4">
        <label class="form-label">Emergency Contact No.</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/phone (1).svg" alt=" contact " style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="" name="emergency_contact_number" maxlength="10" required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. Contact Number</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/phone (1).svg" alt=" contact " style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder=" number" name="ref_contact_name" maxlength="10" required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. 2 Contact Number</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/phone (1).svg" alt=" contact " style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder=" number" name="ref_2_contact_name" maxlength="10" required>
        </div>
      </div>

      <div class="col-md-4">
        <label class="form-label">Emergency Contact Address</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/geo-alt.svg" alt="Location Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" name="emergency_contact-address" placeholder="Location" required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. Contact Relation</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/geo-alt.svg" alt="Location Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="Location" name="ref_contact_relation" required>
        </div>
      </div>
      <div class="col-md-4">
        <label class="form-label">Ref. 2 Relation</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/geo-alt.svg" alt="Location Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control"   name="ref_2_contact_relation" placeholder="Location" required>
        </div>
      </div>
    </div>

  </div>


  <div class="form-section">
    <h5><i>EPF Related Details</i><span class="text-danger">*</span></h5>
    <div class="row g-3">
      <div class="col-md-4">
        <label>Whether earlier a member of the employees' provident fund scheme, 1952?</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control"  name="whether_earlier_a_member_of_the_employees_provident_fund_scheme_1952" placeholder=" if yes then give UAN number" required>
        </div>

      </div>
      <div class="col-md-4">
        <label>Whether earlier of the employees' pension scheme, 1995?</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder=" if yes then give UAN number" required>
        </div>
      </div>
      <div class="col-md-4">
        <label>Are you an International worker?</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" name="whether_earlier_of_the_employees_pension_scheme_1995" placeholder=" if yes then give Country of origin" required>
        </div>
      </div>
    </div>
  </div>

  <!-- Passport / Visa Details -->

  <div class="form-section">
    <h5><i>Passport / Visa Details</i></h5>
    <div class="row g-3">
      <div class="col-md-6">
        <label>Passport Number</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="Passport number" name="passport_name" required>
        </div>
      </div>
      <div class="col-md-6">
        <label>Visa Number</label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt="Bank Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="Visa number" name="visa_number" required>
        </div>
      </div>
      <div class="col-md-6">
        <label>Passport valid from</label>
        <input type="date" class="form-control" name="passport_vaild_form">

      </div>
      <div class="col-md-6">
        <label>Visa Valid From</label>
        <input type="date" class="form-control" name="visa_vaild_number">

      </div>
      <div class="col-md-6">
        <label>Passport Valid Till</label>
        <input type="date" class="form-control" name="passport_vaild_till">

      </div>
      <div class="col-md-6">
        <label>Visa Valid Till</label>
        <input type="date" class="form-control" name="visa_vaild_number">

      </div>
    </div>
  </div>

  <!-- Reporting Office Details -->
  <div class="form-section">
    <h5><i>Reporting office Details</i></h5>
    <div class="row g-3">
      <div class="col-md-6">
        <label>Client Name <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="Client Name" name="client_name">
        </div>
      </div>
      <div class="col-md-6">
        <label>Reporting Manager Name <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/person.svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="Reporting Manager Name" name="reporating_manager_name">
        </div>
      </div>
      <div class="col-md-6">
        <label>Project Name & Number <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/input-cursor.svg" alt=" " style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" placeholder="" name="project_name_&_number" required>
        </div>
      </div>
      <div class="col-md-6">
        <label>Reporting Manager Mobile <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/phone (1).svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" name="reporting_manager" placeholder="Only 10 digits ">
        </div>
      </div>
      <div class="col-md-6">
        <label>Working City & State <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/geo-alt.svg" alt="Location Icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" id="branchAddress" name="branch_Address" placeholder="City & State"
            required>
        </div>
      </div>
      <div class="col-md-6">
        <label>Reporting Manager Email <span class="text-danger">*</span></label>
        <div class="input-group">
          <span class="input-group-text">
            <img src="images/envelope-open.svg" alt="person icon" style="width: 16px; height: 16px;">
          </span>
          <input type="text" class="form-control" name="reporting_manager_name" placeholder="Email " >
        </div>
      </div>
    </div>
  </div>

  <!-- Declaration -->
  <div class="section-card">
    <div class="section-title">Declaration cum Certification cum Consent <span class="text-danger">*</span></div>

    <textarea class="form-control" rows="8" readonly>
I, the undersigned, hereby certify that all the information provided by me in this Personal Information & Declaration Form is true, complete, and accurate to the best of my knowledge and belief. I also declare that I am mentally, physically, and legally fit to perform the duties and responsibilities associated with my job role at ETERNAL HR SERVICES PVT LTD. I further authorize ETERNAL HR SERVICES PVT LTD (hereinafter referred to as “the Company”) to register, store, & process all personal information provided by me in this form, including but not limited to my email address, mobile number, personal details, & bank account information. I authorize the Company to share such details with relevant regulatory or compliance authorities as may be required, in accordance with applicable laws. I hereby consent to receive all communications and transactions, including but not limited to my appointment letter, payslips, salary, reimbursements, duties, policies, documents, terms & conditions, rules, regulations, & notifications, in electronic form, as permitted under the Information Technology Act, 2000 & any amendments thereto. This authorization shall remain effective throughout the duration of my employment with the Company & shall continue to be valid even after the termination of my employment. I agree that the Company's dispatch log reports will serve as conclusive evidence of delivery of any electronic communication, & such communication shall be deemed to have been received by me, notwithstanding any delays or non-receipt. Furthermore, I acknowledge & agree that the absence of a bounced email notification or a failed fund transfer notice shall be treated as successful delivery to my registered email address or bank account, respectively. I understand that, for the purpose of receiving such communications & transactions, it is my responsibility to maintain an active mobile number for SMS alerts, a valid email address for electronic communications, & a functional bank account for financial transactions. I confirm that the details provided in this form are accurate & active & hereby request the Company to activate the necessary SMS, email, & bank transfer settings under my employee code. I certify that neither ETERNAL HR SERVICES PVT LTD nor its clients shall be responsible for any of my illegal actions or legal liabilities, including but not limited to loans, recoveries, etc. I hereby declare that I will promptly inform the Company & all relevant authorities, such as ESIC, EPF, PTAX, Income Tax, etc., in writing within 24 hours of any changes to my email address or mobile number. I acknowledge that the Company reserves the right, at its sole discretion, to discontinue this service at any time without prior notice, whether through its website or any other communication channel. I understand that I am solely responsible for maintaining the security & confidentiality of my mobile phone, mobile number, computer, laptop, & email address used in connection with this service. I further acknowledge that any unauthorized access to or misuse of these devices or contact information will be my sole responsibility. I have read & fully understood the terms & conditions set forth on the Company’s website (www.eternalhr.com), & I agree to be bound by these terms, as they may be amended from time to time. My continued use of the Company’s services & facilities shall constitute my acceptance of such terms & conditions, including any subsequent modifications. In case any of the information provided is found incorrect or incomplete, I shall be solely responsible for the consequences, & the Company will not have any liability. Furthermore, the Company reserves the right to take disciplinary action against me, which may extend to termination of employment at any time in the future without notice or compensation in lieu thereof.
      </textarea><br>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="declarationCheck" />
      <label class="form-check-label" for="declarationCheck">
        I certify and give my consent on this declaration
      </label>
    </div>
  </div>

  <!-- EPF Exemption -->
  <div class="section-card">
    <div class="section-title">EPF Exemption Request</div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="epfExempt" name="epf_exemption_request">
      <label class="form-check-label" for="epfExempt">
        I declare that I have never been a member of "Employee Provident Fund Scheme" till now. I also declare that I
        don't have any amount outstanding or dues with "Employee Provident Fund" during my last assignments. I request
        the organization to kindly exempt me from "Employee Provident Fund" scheme.
        I'm making this request knowingly benefits of EPF Scheme and under no pressure as such. I've signed and
        submitted Form 11 for exemption from "Employee Provident Fund".
      </label>
    </div>
  </div>

  <!-- Terms of Appointment -->
  <div class="section-card">
    <div class="section-title">TERMS OF APPOINTMENT WITH ETERNAL HR SERVICES PVT. LTD. <span
        class="text-danger">*</span></div>
    <textarea class="form-control" rows="10" readonly>
We are pleased to engage you in ETERNAL HR SERVICES PVT. LTD. (herein after "company") as per the following terms and conditions on fixed term contract basis. The terms and conditions of your engagement are outlined below and will govern your relationship with the Company throughout the duration of your employment.

1 You engagement with the Company is for a fixed term commencing from [Date of Joining] to [Date of Expiry]. Upon expiration of this term, your employment will automatically terminate without any further written or verbal communication. If your contract is not renewed upon expiration, you shall have no right or entitlement to continued employment or to claim regularization or permanency in the Company. Contract renewal will only occur through written communication from the Company. In the absence of a written renewal, you will be considered on a month-to-month contract basis, and you will not be entitled to any claim of permanent employment thereafter.

2 You have to complete your joining formalities within 3 days of your joining including submission of complete & correctly filled welcome kit, address proof, age proof, Photo ID, Aadhaar card, UAN No., old ESIC No. Bank Account proof etc. You shall keep the Company and the deputed client informed of any change in your postal address, otherwise the last address communicated by you to the company or available in the Company’s and the deputed client record will be deemed as your postal address for the purpose of all communication from the Company or the deputed client. Any communication sent through any mode to your postal address would be considered as acknowledged by you irrespective of its return to office.

3 You have to render your services to the above-mentioned deputed client, at their premises. Your working location would be temporary and you are liable to be shifted from one job or department or city or state or client to another in accordance with the business exigencies /managerial requirements and you have to adhere to such changes without any delay and objection. if you do not give your consent or reported at transferred place within the given time, it will be deemed that you are not interested in the employment with our company and your contract will be treated as cancelled, null and void immediately without any notice or any compensation in lieu thereof and your name will be struck off from our payroll/attendance register.

4 Since you are being engaged for a fixed period as mentioned above, you agree that you will neither have any right (including but not limited to permanent job) nor a lien on the job held by you.

5 i) During your tenure you may leave the services by giving prior notice of [noticePeriod] days or pay in lieu to Company Similarly, Company may terminate your services by giving you prior notice of [noticePeriod] days or pay in lieu. However, in case of business exigencies company shall have full rights to terminate your contract prior to the end date without giving notice or pay in lieu of notice period. You agree that in such event you shall not claim or raise any dispute for non-payment of notice period.

ii) In event of your resigning the company at its sole discretion can relieve you of your services with immediate effect without giving you the notice period pay.

6 You have to faithfully perform your duties and services in a professional manner exclusively to the deputed Client, their employees, representatives and such performance shall not be inconsistent with any obligation you may have to other third parties. Your performance will be reviewed regularly and at any point of time if the performance is not found to be satisfactory, Company will be free to end the contract immediately without any notice or compensation for the same even before the contract ending date as specified above. Decision to re-engage your services is entirely at the discretion of the deputed client or the company.

7 You shall not engage yourself into any conduct which is detrimental to the interest of deputed Client, Indian law or our Company.

a)  You acknowledges that, in the course of performing and fulfilling your duties hereunder, you may have access to and be entrusted with confidential information (included but not limited to any trade secret or other information which is confidential or commercially sensitive in nature, relates to the business methods, management systems, marketing plans, strategic plans, finances, new or maturing business opportunities, marketing activities, processes, inventions, designs or similar of any Group Company, or to which any Group Company owes a duty of confidentiality to any third party (includes other employees who do not need such information in their work)) of the company/deputed client, the disclosure of any of the confidential information to the competitors of the company/deputed client would be highly detrimental to the interests of the Employer.

b) You further acknowledges and agrees that the right to maintain the confidentiality of trade secrets, source code, website information, business plans or client information or other confidential or proprietary information, for the purpose of enabling the other party such information constitutes a proprietary right which the company/deputed client is entitled to protect.

c)  Accordingly, you covenants and agrees with the company/deputed client that you will not, under any circumstance during and after the continuance of this agreement, disclose any such confidential information to any person, firm or corporation, nor shall you use the same, except as required in the normal course of your engagement hereunder.

d) The company/deputed client owns any intellectual property created by you during the course of the employment, or in relation to a certain field, and you shall thereon have all the necessary rights to retain it. After termination of your employment, you shall not impose any rights on the intellectual property created. Any source code, software or other intellectual property developed, including but not limited to website design or functionality that was created by you, during the course of employment under this Agreement, shall belong to the company/deputed client.

8 You are not allowed to receive any payment or kind of any nature, either directly or indirectly from the deputed Client, co-employees, representatives or any other third party unless authorized by company in writing.

9 You are bound to comply with the safety, health, the service rules in force and amended by the deputed client or by company from time to time in relation to your service conditions, which will form part of your terms of contract.

10    You will not take any leave without prior written approval from your reporting manager. Any unapproved Leave for more than 3 consecutive days shall be treated as willfull resignation. Such event will be deemed that you are not interested in the employment with our company and your contract will be treated as cancelled, null and void immediately without any notice or any compensation in lieu thereof and your name will be struck off from our payroll / attendance register.

11    You agree to defend, indemnify and hold our Company and the deputed Client harmless from any and all claims, damages, liability, attorney’s fees, environmental penalties, fines and expenses on account of your failure to satisfy any of your duties, obligations under this contract, legal dues of your previous jobs, inappropriate action, misconduct or violation of any law, agreement, or otherwise.

12    You will be responsible for safe keeping and return in good condition and order all the office properties, equipment, instruments, tools, books etc. which may be given to you for your use, custody and charge during your job. The Company and the deputed client have the right to deduct the money along with all such things from your dues and take such other action as the Company and the deputed client may deem proper in the event of failure to account for the aforesaid properties to the satisfaction of the Company and the deputed client.

13    Any dispute between you and the deputed Client / company shall be referred to a Sole Arbitrator appointed by the company. The arbitration shall be conducted in the English language, in accordance with the Arbitration & Conciliation Act, 1996, within your deputed working city. Your failure to attend and participate in the said proceedings will amount to sufficient compliance with principles of natural justice. Hence, the Arbitration proceedings may be held in your absence viz. Ex-party. Please note that any other Courts jurisdiction shall stand specifically barred.

14    You will be paid State Minimum Wages or as agreed at the time of your joining. All statutory dues arising out of your monthly compensation package will be deducted and deposited with the concerned government authorities accordingly. These statutory dues may include PF / ESIC / LWF / TDS / PTAX etc. You can get your salary details from Annexure-1. In the event of overpayment, this may be rectified and adjusted in the subsequent payment months or you may be asked to refund the excess amount immediately.

15    Your contract is coterminous with the contract between deputed client you are deputed and Company. You will be paid only as per the payouts approved and provided by the deputed client. You will be paid full and final payment (if any) within 30 days from your date of leaving or date of receiving your resignation and no dues certificate from your supervisor whichever is later.

16    * Your net take home amount will be affected by prevailing laws like Income Tax, LWF, Professional Tax and other state level compliance contributions as applicable. Company has the authority to change or remove any or the entire allowance\ reimbursement components without any written or verbal communication\confirmation to\from you.

17    All your rights and obligations in the course of this contract are strictly limited to the terms and conditions of this contract. Accordingly, except as specifically indicated in this contract, you will not be entitled to any other benefits, subsidy, allowances or compensation from the deputed Client/company.

18    Your contract can be terminated earlier also by the Staffing Agency company without any notice or payment of any kind In lieu of notice, if:-

a. You are found indulging in any act of dishonesty, disobedience, Insubordination, incivility, intemperance, irregularity in attendance or other misconduct or neglect of duty or incompetence on your part in the discharge of your duties or the breach on your part of any of the terms, conditions or stipulations contained in this letter or a violation on your part of any of the Deputed Client/company's service rules & regulations.

b. You are held guilty by a competent court for any offence involving moral turpitude.

c. Or without assigning any reasons thereof by giving one week notice or without any notice solely at the discretion of the Deputed Client/company.

d. You may also choose to terminate this contract by giving one week notice in writing or if no notice is submitted and you remain absent continuously for 8 days then it will be deemed that you are not interested in the employment with our organisation and as such your contract will be treated as cancelled, null and void and your name will be struck off from our payroll/attendance register.

For Eternal HR Services Private Limited,





Authorized Signatory

I understand & accept all the terms and conditions mentioned above. I certify that the information provided by me in the documents submitted to the company is true, complete and valid. I declare that I will not indulge myself in any sort of theft, fraud, misrepresentation, attempt to defraud the Company and deputed client in any manner or any other illegal act neither in the employment space nor outside the premise of employment. If I conduct any of the above action than I will be solely responsible, the Company/ deputed client shall not be liable for such an act. I promise that i will perform all of my duties with full dedication and in accordance with all the rules, regulations and policies of the Company/deputed client as notified from time to time.


      </textarea><br>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="termsCheck" name="terms_of_appointement_with_eternal_hr_services_pvt_ltd">
      <label class="form-check-label" for="termsCheck">
        I accept the Terms and Conditions.
      </label>
    </div>
  </div>

  <!-- Upload Section -->
  <div class="section-card">
    <div class="section-title">Family Photo and Scanned Employee signature</div>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label fw-semibold">Upload Family photo for ESIC</label>
        <input type="file" class="form-control" family_photo="family_photo" >
        <div class="form-note">Only files between 50 KB to 200 KB (.jpeg / .jpg)</div>
      </div>
      <div class="col-md-6">
        <label class="form-label fw-semibold">Upload Scanned Signature of employee <span
            class="text-danger">*</span></label>
        <input type="file" class="form-control" signature="signature">
        <div class="custom-file-note">Upload only .jpeg/.jpg (5 KB - 100 KB), white background</div>
      </div>
    </div>
  </div>
  </div>
  </div>

  <div class="captcha-card">
    <div class="row align-items-center">
      <div class="col-md-3">
        <label class="form-label fw-bold text-primary">Verification Code <span class="text-danger">*</span></label>
      </div>
      <div class="col-md-4">
        <div class="captcha-box">
          <label class="form-label">Enter the text in the box below</label>
          <!-- <div class="input-group mb-2">
            <input type="text" id="captchaInput" class="form-control" placeholder="Enter Captcha"> -->
          <div class="captcha-input-group">
            <input type="text" id="captchaInput" class="captcha-input" name="enter_the_text_in_the_box_below" placeholder="Enter Captcha" required />
            <span class="captcha-refresh" onclick="generateCaptcha()">&#x21bb;</span>
          </div>
          <div id="captchaText" class="captcha-image">------</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Buttons -->
  <div class="d-flex justify-content-center mt-3">
    <button class="btn btn-outline-light me-2" name="save_and_submit_later">Save and submit later</button>
    <button class="btn btn-primary"   type="submit" value="Submit" name="submit" onclick="validateCaptcha()">Submit</button>
  </div>
 
</form>

  <script>
    function generateCaptcha() {
      const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
      let captcha = '';
      for (let i = 0; i < 6; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
      }
      document.getElementById('captchaText').innerText = captcha;
    }

    function validateCaptcha() {
      const input = document.getElementById('captchaInput').value.trim().toUpperCase();
      const captcha = document.getElementById('captchaText').innerText.trim().toUpperCase();
      if (input === captcha) {
        alert('Captcha Verified ✅');
      } else {
        alert('Invalid Captcha ❌');
        generateCaptcha();
        document.getElementById('captchaInput').value = '';
      }
    }

    // Initialize captcha on load
    window.onload = generateCaptcha;
  </script>
  <script>
    // External JavaScript file
    document.getElementById('externalScriptBtn').addEventListener('click', function () {
      console.log('External script executed');
      alert('External script loaded and executed!');

      // Demonstrate that external scripts have access to the DOM
      this.style.backgroundColor = '#ff9800';
      this.style.color = 'white';
    });
  </script>

  <script>
    let rowCount = 1;

    function addEducationRow() {
      const container = document.getElementById('education-container');
      const originalRow = container.querySelector('.education-row');
      const newRow = originalRow.cloneNode(true);

      // Update radio button group name/id for uniqueness
      const radios = newRow.querySelectorAll('input[type="radio"]');
      radios.forEach((radio, idx) => {
        const level = radio.id.split('-')[0]; // ug/g/pg/diploma
        radio.name = 'education-level-' + rowCount;
        radio.id = level + '-' + rowCount;
        const label = newRow.querySelector('label[for="' + radio.id + '"]');
        if (label) label.setAttribute('for', radio.id);
      });

      // Clear input values
      const inputs = newRow.querySelectorAll('input[type="text"], input[type="date"], input[type="file"]');
      inputs.forEach(input => input.value = '');

      // Show remove button
      newRow.querySelector('.remove-btn').classList.remove('d-none');
      newRow.querySelector('.remove-btn').addEventListener('click', () => newRow.remove());

      container.appendChild(newRow);
      rowCount++;
    }

    // Enable remove for cloned rows after first
    document.querySelector('.remove-btn')?.addEventListener('click', function () {
      this.closest('.education-row').remove();
    });
  </script>

  </form>

  </div>
</body>

</html>