<?php
    $pageTitle = 'Home';
?>
<?php require_once('layouts/header.php'); ?>
<!-- HTML Body -->

<div class="row">
    <div class="col-12">
        <div class="input-group mb-3">
            <span class="input-group-text" style="width: 120px;">Search</span>
            <input type="text" id="txtSearch" class="form-control" placeholder="Search user by last name" aria-label="Search" />
            <button type="button" class="btn btn-success input-group-append" id="btnSearch">Search</button>
        </div>
    </div>
    <div class="col-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
            </thead>
            <tbody id="display">
                <!-- Content -->
            </tbody>
        </table>
    </div>
</div>
<script type="module" src="./assets/js/index.js"></script>
<!-- /HTML Body -->
<?php require_once('layouts/footer.php'); ?>