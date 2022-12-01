<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/logo.png" alt="" width="128" height="64">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageTitle == 'Home') echo "active"; ?>" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageTitle == 'Register') echo "active"; ?>" href="./register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageTitle == 'Login') echo "active"; ?>" href="./login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>