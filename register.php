<?php
    $pageTitle = 'Register';
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->
<div class="row">
    <div class="col-3">&nbsp;</div>
    <div class="col-6">
        <form id="registration_form">
            <div class="card mt-3">
                <div class="card-header bg-primary text-white">
                    <h3>
                        <span class="material-icons-outlined align-middle" style="font-size: 1.8rem;">
                            how_to_reg
                        </span>
                        Registration
                    </h3>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="txtFirstname" name="firstname" placeholder="First Name">
                        <label for="txtFirstname">First Name</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="txtMiddlename" name="middlename" placeholder="Middle Name">
                        <label for="txtFirstname">Middle Name</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="txtLastname" name="lastname" placeholder="Last Name">
                        <label for="txtFirstname">Last Name</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="date" class="form-control" id="txtBirthDate" name="birthdate" placeholder="Birth Date">
                        <label for="txtBirthdate">Birth Date</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="number" class="form-control" id="txtAge" name="age" placeholder="Age">
                        <label for="txtAge">Age</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <textarea class="form-control" rows="3" style="height: 150px;" id="txtStreet" name="street" placeholder="Street"></textarea>
                        <label for="txtStreet">Street, Purok, Village, or Sitio</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <select class="form-select" aria-label="Province" id="cmbProvince" name="province" placeholder="Province">
                            <option value="davaodelsur">Davao Del Sur</option>
                            <option value="davaodelnorte">Davao Del Norte</option>
                            <option value="davaodeoro">Davao De Oro</option>
                            <option value="davaooriental">Davao Oriental</option>
                            <option value="davaooccidental">Davao Occidental</option>
                        </select>
                        <label for="cmbProvince">Province</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <select class="form-select" aria-label="City" id="cmbCity" name="city" placeholder="City/Municipality">                           
                            <option value="Davao City">Davao City</option>
                            <option value="panabocity">Panabo City</option>
                            <option value="tagumcity">Tagum City</option>
                            <option value="mati">City of Mati</option>
                            <option value="govgen">Governor Generoso</option>
                            <option value="pantukan">Pantukan</option>
                            <option value="digoscity">Digos City</option>
                            <option value="malita">Malita</option>
                        </select>
                        <label for="cmbCity">City/Municipality</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <select class="form-select" aria-label="Barangay" id="cmbBarangay" name="barangay" placeholder="Barangay">                       
                            <option value="poblacion">Poblacion</option>
                        </select>
                        <label for="cmbBarangay">Barangay</label>
                        <div class="invalid-feedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Email">
                        <label for="txtEmail">Email</label>
                        <div class="invalid-feedback" id="emailInvalidFeedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="txtPhone" name="phone" placeholder="Phone">
                        <label for="txtPhone">Phone</label>
                        <div class="invalid-feedback" id="phoneInvalidFeedback">This is a required field.</div>
                    </div>
                    <hr/>
                    <div class="form-floating mb-1">
                        <input type="text" class="form-control" id="txtUsername" name="username" placeholder="Username">
                        <label for="txtUsername">Username</label>
                        <div class="invalid-feedback" id="usernameInvalidFeedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" id="txtPassword" name="password" placeholder="Password">
                        <label for="txtPassword">Password</label>
                        <div class="invalid-feedback" id="passwordInvalidFeedback">This is a required field.</div>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control" id="txtConfirmPassword" name="confirmpassword" placeholder="Confirm Password">
                        <label for="txtConfirmPassword">Confirm Password</label>
                        <div class="invalid-feedback" id="confirmPasswordInvalidFeedback">This is a required field.</div>
                    </div>                
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-success w-100">Register</div>
                </div>
            </div>
        </form>` 
    </div>
    <div class="col-3">&nbsp;</div>
</div>

<div class="modal" tabindex="-1" id="registrationmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration: Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You have was successfully registered to Realto Application.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>        
      </div>
    </div>
  </div>
</div>

<!-- /HTML Body -->
<script type="module">
    import Registration from './assets/js/components/realtor/Registration.js';
    Registration().init();
</script>
<?php require_once('layouts/footer.php'); ?>