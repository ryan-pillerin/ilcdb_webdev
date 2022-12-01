<?php
    $pageTitle = "Film";
    require_once("./layouts/sakila_header.php");
?>
<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="sakilastore.php">Actors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="sakilafilm.php">Film</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Customer</a>
        </li>
    </ul>

    <div class="section">
        <!-- Search Box: Search for records under film table with the condition of all fields. -->
        <div class="row">
            <div class="col-12">
                <form class="form-control" id="filmform">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" id="searchfilm" placeholder="Search Film by Keywords" />
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
                                <th width="5%">#</th>
                                <th width="15%">Title</th>
                                <th width="40%">Description</th>
                                <th width="10%">Release Year</th>
                                <th width="5%">Rating</th>
                                <th width="25%">Special Features</th>
                            </tr>
                        </thead>
                        <tbody id="ListOfFilms">
                            <tr>
                                <td colspan="6">
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
<script type="module">
    import Film from './assets/js/components/sakila_component/Film.js';
    Film().init();
</script>
<?php require_once("./layouts/footer.php"); ?>