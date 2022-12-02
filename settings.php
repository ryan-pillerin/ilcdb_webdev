<?php
    $pageTitle = 'Account Settings';
    session_start();
    if ( !isset($_SESSION['accesstoken']) ) {
        header('Location: /ilcdb_webdev/');
    }
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->
<div class="card mt-5">
    <div class="card-header">
        Account Settings
    </div>
    <div class="card-body">
        <form class="row g-3" id="formAccount">
            <div class="col-md-4">
                <label for="txtFirstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="txtFirstname" placeholder="Enter First Name">
            </div>
            <div class="col-md-4">
                <label for="txtMiddlename" class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middlename" id="txtMiddlename" placeholder="Enter Middle Name">
            </div>
            <div class="col-md-4">
                <label for="txtLastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="txtLastname" placeholder="Enter Last Name">
            </div>
            <div class="col-md-6">
                <label for="txtLastname" class="form-label">Birth Date</label>
                <input type="date" class="form-control" id="txtBirthDate" name="birthdate" placeholder="Birth Date">
            </div>
            <div class="col-md-6">
                <label for="txtLastname" class="form-label">Age</label>
                <input type="number" class="form-control" id="txtAge" name="age" placeholder="Age">
            </div>
            <hr/>
            <div class="col-12">
                <label for="txtStreet" class="form-label">Street, Purok, or Sitio</label>
                <textarea class="form-control" rows="3" style="height: 150px;" id="txtStreet" name="street" placeholder="Enter Street, Purok, or Sitio"></textarea>
            </div>
            <div class="col-md-4">
                <label for="cmbProvince" class="form-label">Province</label>
                <select class="form-select" aria-label="Province" id="cmbProvince" name="province" placeholder="Province">
                    <option value="davaodelsur">Davao Del Sur</option>
                    <option value="davaodelnorte">Davao Del Norte</option>
                    <option value="davaodeoro">Davao De Oro</option>
                    <option value="davaooriental">Davao Oriental</option>
                    <option value="davaooccidental">Davao Occidental</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="cmbCity" class="form-label">City/Municipality</label>
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
            </div>
            <div class="col-md-4">
                <label for="cmbBarangay" class="form-label">Barangay</label>
                <select class="form-select" aria-label="Barangay" id="cmbBarangay" name="barangay" placeholder="Barangay">                       
                    <option value="poblacion">Poblacion</option>
                </select>
            </div>
            <hr/>
            <div class="col-md-6">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="txtPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="txtPhone" name="phone" placeholder="Phone">
            </div>
            <hr/>
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<div class="modal" tabindex="-1" id="updateAccountConfirmation">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You have was successfully updated your account.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="accountConfirmation">Ok</button>        
      </div>
    </div>
  </div>
</div>
<!-- /HTML Body -->
<script type="module">
    import AccountSettings from './assets/js/components/realtor/AccountSettings.js';
    AccountSettings().init();
</script>
<?php require_once('layouts/footer.php'); ?>