<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Title Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .error-box{
        background: #fff9f9;
        border: 1.5px solid #c02b0a;
        border-radius: 5px;
        box-shadow: 0 1px 4px rgba(0,0,0,.11), 0 0 4px rgba(18,25,97,.041);
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .simple-box{
        background: #E9ECEF;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .title{
        color: #0b435b
    }
  </style>
</head>
<body>
<div class="page-wrapper">
<div class="preloader"></div>
    <?php include 'header.php'; ?>
  <div class="container mt-5">
    <form id="jobTitleForm" class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-12">
                <h1 class="title">Job Application Form</h1>
                <h6 class="form-label mt-5">Job Title</h6>
                <div class="simple-box">
                    Neighborhood Health Team Lead Nurse - Home Care, Island of Montreal, West-Island, North Shore and South Shore
                </div>
                <h6 class="mt-4">Please enter all relevant personal information in the fields below</h6>

                <div class="row mt-5">
                    <div class="col-md-6 col-sm-12">
                        <h6 for="fname" class=" form-label">First Name</h6>
                        <input type="text" class="form-control" id="fname" required>
                        <div class="invalid-feedback error-box">
                            This field is required. Please complete the following fields: First, Last.   
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h6 for="lname" class="form-label">Last Name</h6>
                        <input type="text" class="form-control" id="lname" required>
                        <div class="invalid-feedback error-box">
                            This field is required. Please complete the following fields: First, Last.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 for="email" class=" form-label">Email</h6>
                        <input type="email" class="form-control" id="email" required>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 for="tel" class=" form-label">Phone</h6>
                        <input type="tel" class="form-control" id="phone" required>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 for="address" class=" form-label">Address</h6>
                        <input type="text" class="form-control" id="address" required>
                        <h6 for="saddress" class="mt-4">Street Address</h6>
                        <input type="text" class="form-control " id="saddress" required>

                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="city" class=" form-label">City</h6>
                                <input type="text" class="form-control" id="city" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h6 for="state" class="form-label">State / Province / Region</h6>
                                <input type="text" class="form-control" id="state" required>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="zip" class=" form-label">ZIP / Postal Code</h6>
                                <input type="text" class="form-control" id="zip" required>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h6 for="country" class="form-label">Country</h6>
                                <input type="text" class="form-control" id="country" required>
                            </div>
                        </div>

                        <div class="invalid-feedback error-box">
                            This field is required. Please complete the following fields: Street Address, City, State / Province, ZIP / Postal Code, Country.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 class="form-label">Are you legally authorized to work in Canada with any employer?</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employer" id="Yes" value="Yes" required>
                            <label class="form-check-label" for="Yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="employer" id="No" value="No" required>
                            <label class="form-check-label" for="No">No</label>
                        </div>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 class="form-label">Have you ever worked for any Bayshore location previously?</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prev" id="Yes" value="Yes" required>
                            <label class="form-check-label" for="Yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="prev" id="No" value="No" required>
                            <label class="form-check-label" for="No">No</label>
                        </div>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <h6 for="file" class=" form-label">Upload Attachments</h6>
                        <label>Add your resume, cover letter or other attachment here.</label>
                        <input type="file" class="form-control mt-2 mb-2" id="file" required>
                        <label>Accepted file types: doc, docx, xls, xlsx, txt, wpd, rtf, pdf, odt, Max. file size: 2 MB.</label>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>

                <h1 class="title form-label mt-4">e-signature & Submit</h1>
                <label class="form-label mt-4">Please read the following statement carefully, then acknowledge that you have read and approved it by providing the information requested at the bottom of the page. Please note that an esignature is the electronic equivalent of a hand-written signature.</label>
                <label class="form-label mt-3">I hereby certify that the information herein provided in this Employment Application is true and complete to the best of my knowledge. I understand that false statements or omissions may disqualify me from employment, or if employed, cause my dismissal without notice and/or severance. It is understood and agreed that my employment is subject to satisfactory references and criminal record checks. Carecor Health Services is authorized to obtain employment references and make inquiries concerning the information given herein and I agree to release any person or organization from liability for the consequences of answers to such enquiries. I hereby release Carecor Health Services from any liability associated with the provision of references related to my employment at Carecor Health Services, during my employment or thereafter.</label>
               
                <h1 class="title form-label mt-4">Do Not E-Sign Until You Have Read The Above Statement</h1>
                <label class="form-label mt-4">By my eSignature below, I certify that I have read, fully understand and accept all terms of the foregoing statement. Please signify your acceptance by entering the information requested in the fields below.</label>
                
                <div class="row mt-4 mb-4">
                    <div class="col-md-12">
                        <h6 for="fullName" class=" form-label">Please enter your full name</h6>
                        <input type="text" class="form-control" id="fullName" required>
                        <div class="invalid-feedback error-box">
                            This field is required.   
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary mb-4">Submit</button>
            </div>
        </div>
    </form> 
  </div>
  
  <?php include 'footer.php' ?> 
</div>

  <script>
    // JavaScript to handle form submission and validation
    const form = document.getElementById('jobTitleForm');

    form.addEventListener('submit', function(event) {
      event.preventDefault();
      if (form.checkValidity() === false) {
        event.stopPropagation();
      } else {
        // Handle form submission here (e.g., send data to server)
        alert('Job title submitted successfully!');
        form.reset(); // Optional: Reset the form after successful submission
      }
      form.classList.add('was-validated');
    });
  </script>
</body>
</html>