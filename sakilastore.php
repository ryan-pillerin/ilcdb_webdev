<?php
$pageTitle = "Sakila Store";
require_once("./layouts/sakila_header.php");
?>
<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Actors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Film</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Customer</a>
        </li>
    </ul>

    <div class="section">
        <!-- Search Box: Search for records under actor table with the condition of first and last name. -->
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="actorform">
                    <div class="input-group mb-3">
                        <span class="input-group-text">First Name</span>
                        <input type="text" class="form-control" name="firstname" placeholder="First Name" />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Last Name</span>
                        <input type="text" class="form-control" name="lastname" placeholder="Last Name" />
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- ./Search Box -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="ListOfActors">
                            <tr>
                                <td colspan="2">
                                    <div class="alert alert-info text-center" role="alert">
                                        No Record Found!
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
    <div>
</div>
<script type="module" src="./assets/js/sakilastore.js"></script>
<?php
require_once("./layouts/footer.php");
?>