<?php
    $pageTitle = 'Login';
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->
<div class="container mt-5">
    <div class="card w-50 mx-auto">
        <div class="card-header bg-primary">
        </div>
        <div class="card-body">           
            <h3 class="card-title text-center">Login</h3>
            <hr/>
            <div class="card-content">
                <form id="formLogin">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" id="txtUsername" placeholder="Username">
                        <label for="txtUsername">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="txtPassword" placeholder="Password">
                        <label for="txtPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <button type="submit" class="btn btn-success w-100">Log In</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /HTML Body -->
<script type="module">
    import Login from './assets/js/components/realtor/Login.js';
    
</script>
<?php require_once('layouts/footer.php'); ?>