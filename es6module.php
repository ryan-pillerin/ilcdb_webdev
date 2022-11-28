<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->
<div class="container"> 
    <div class="row">
        <div class="col-12 mt-5">
            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">First Name *</span>
                    <input type="text" id="txtFirstName" name="firstname" class="form-control" required placeholder="First Name" aria-label="First Name" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Middle Name *</span>
                    <input type="text" id="txtMiddleName" name="middlename" class="form-control" required placeholder="Middle Name" aria-label="Middle Name" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Last Name *</span>
                    <input type="text" id="txtLastName" name="lastname" class="form-control" required placeholder="Last Name" aria-label="Last Name" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Email *</span>
                    <input type="email" id="txtEmail" name="email" class="form-control" required placeholder="Email" aria-label="Email" />
                    <div class="invalid-feedback" id="emailErrorMessage">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Address *</span>
                    <input type="text" id="txtAddress" name="address" class="form-control" required placeholder="Address" aria-label="Address" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Username *</span>
                    <input type="text" id="txtUsername" name="username" class="form-control" required placeholder="Username" aria-label="Username" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" style="width: 120px;">Password *</span>
                    <input type="password" id="txtPassword" name="password" class="form-control" required placeholder="Password" aria-label="Password" />
                    <div class="invalid-feedback">
                        This is a required field.
                    </div>
                </div>
                <button type="submit" class="btn btn-success mb-3" id="btnAddUser">Add</button>
            </form>
        </div>
        <div class="col-12">
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 120px;">Search</span>
                <input type="text" id="txtEmail" class="form-control" placeholder="Search user by last name" aria-label="Search" />
                <button type="button" class="btn btn-success input-group-append">Search</button>
            </div>

        </div>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="displayUsers">
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /HTML Body -->
<script type="module" src="./assets/js/es6module.js"></script>
<?php require_once('layouts/footer.php'); ?>