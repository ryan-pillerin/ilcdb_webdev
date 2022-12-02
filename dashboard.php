<?php
    $pageTitle = 'Dashboard';
    session_start();
    if ( !isset($_SESSION['accesstoken']) ) {
        header('Location: /ilcdb_webdev/');
    }
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->
<div class="row mt-5">
    <div class="col-12 mb-3">
        <button type="button" class="btn btn-success">Add Property</button>
    </div>
    <hr/>
    <div class="col-12 mb-3">
        <form id="formSearch">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="searchkeywords" placeholder="Search Property by Keywords" aria-label="Search Property by Keywords">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/images/logo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/logo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/images/logo.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="card-body">
                <h5 class="card-title">House</h5>
                <p class="card-text">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="material-icons-outlined align-middle">
                                home
                            </span>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </li>
                        <li class="list-group-item">
                            <span class="material-icons-outlined align-middle">
                                paid
                            </span> <span>₱ 1.5M - ₱2.5M</span>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- /HTML Body -->
<?php require_once('layouts/footer.php'); ?>