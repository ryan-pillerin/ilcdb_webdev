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
                <?php if ( !isset($_SESSION['accesstoken']) ) { ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageTitle == 'Register') echo "active"; ?>" href="./register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($pageTitle == 'Login') echo "active"; ?>" href="./login.php">Login</a>
                </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($pageTitle == 'Dashboard') echo "active"; ?>" href="./dashboard.php">Dashboard</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php if ( isset($_SESSION['accesstoken']) ) { ?>
        <div class="btn-group dropdown">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-icons-outlined align-middle" style="font-size: 2rem;">
                account_circle
            </span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="settings.php">
                        <span class="material-icons-outlined align-middle">
                            manage_accounts
                        </span>
                        Settings
                    </a>
                </li>
                <li><hr/></li>
                <li>
                    <a class="dropdown-item" href="./app/realtor/login/logout.php">
                        <span class="material-icons-outlined align-middle">
                            logout
                        </span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <?php } ?>
    </div>
</nav>