<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <title>Document</title>
  <style>
    body {
      background:  #7d90dd;
    }
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }
  </style>
</head>

<body>
  <!-- Registration Form -->

  <section class="vh-100 background">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <form>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="fatherName" class="form-control form-control-lg" />
                      <label class="form-label" for="fatherName">Father Name</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="motherName" class="form-control form-control-lg" />
                      <label class="form-label" for="motherName">Mother Name</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" id="birthdayDate" />
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                  </div>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example8">Address</label>
                  </div>
                 
                  <div class="row">
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="email" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">State</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="tel" id="form3Example8" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example8">City</label>
                    </div>

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" id="form3Example8" />
                      <label for="form3Example8" class="form-label">Pin Code</label>
                    </div>

                  </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-12">

                    <select class="select form-control-lg">
                      <option value="1">Choose option</option>
                      <option value="2">Subject 1</option>
                      <option value="3">Subject 2</option>
                      <option value="4">Subject 3</option>
                    </select>
                    <label class="form-label select-label">Course</label>

                  </div>
                </div>

                <div class="mt-4 pt-5">
                  <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INSERT INTO `registration` (`id`, `name`, `lname`, `fname`, `mname`, `address`, `gender`, `state`, `city`, `dob`, `pincode`, `course`, `emailid`) VALUES ('1', 'test', 'xyz', 'abc', 'priti', 'bazar line.', 'mail', 'maharashtra', 'deulgaon raja', '2012-04-19', '443204', 'cse', 'test@gmail.com'); -->