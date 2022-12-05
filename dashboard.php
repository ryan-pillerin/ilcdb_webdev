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
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProperyModal">Add Property</button>
    </div>
    <hr/>
    <div class="col-12 mb-3">
        <form id="formSearchProperty">
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

<!-- Add Property Modal -->
<div class="modal fade" id="addProperyModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Property</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-6">
                    <form id="formAddProperty">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="txtPropertyName" class="form-label">Property Name</label>
                                <input type="text" class="form-control" id="txtPropertyName" name="propertyname" placeholder="Property Name" aria-label="Property Name">
                            </div>
                            <div class="col-12">
                                <label for="txtDescription" class="form-label">Property Description</label>
                                <textarea class="form-control" rows="3" style="height: 150px;" id="txtDescription" name="description" placeholder="Property Description"></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="txtPropertyClassification" class="form-label">Property Classification</label>
                                <select class="form-select" name="propertclassification" id="txtPropertyClassification">
                                    <option selected>Choose Property Classification</option>
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="agricultural">Agricultural</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="txtLandArea" class="form-label">Land/Floor Area (square meter)</label>
                                <input type="number" class="form-control" id="txtLandArea" name="landarea" placeholder="Land/Floor Area" aria-label="Land/Floor Area">
                            </div>
                            <div class="col-md-4">
                                <label for="txtPropertyStatus" class="form-label">Property Status</label>
                                <select class="form-select" name="propertystatus" id="txtPropertyStatus">
                                    <option selected value="sale">Sale</option>
                                    <option value="rent">Rent</option>
                                    <option value="lease">Lease</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="txtStreet">Street, Purok, Village, or Sitio</label>
                                <input type="text" class="form-control" id="txtStreet" name="street" placeholder="Street" aria-label="Street">
                            </div>
                            <div class="col-md-4">
                                <label for="cmbProvince" class="form-label">Province</label>
                                <select class="form-select" name="province" id="cmbProvince">
                                    <option value="davaodelsur">Davao Del Sur</option>
                                    <option value="davaodelnorte">Davao Del Norte</option>
                                    <option value="davaodeoro">Davao De Oro</option>
                                    <option value="davaooriental">Davao Oriental</option>
                                    <option value="davaooccidental">Davao Occidental</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="cmbCity" class="form-label">City/Municipality</label>
                                <select class="form-select" name="city" id="cmbCity">
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
                                <select class="form-select" name="barangay" id="cmbBarangay">
                                    <option value="poblacion">Poblacion</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Price</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="minprice" id="txtMinPrice" class="form-control" placeholder="Minimum Price" aria-label="Minimum Price">
                                    <span class="input-group-text"> - </span>
                                    <input type="text" name="maxprice" id="txtMaxPrice" class="form-control" placeholder="Maximum Price" aria-label="Maximum Price">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            Property Images
                        </div>
                        <div class="card-body" style="height: 65vh; overflow: auto;">
                            <div class="d-flex justify-content-between" id="diplayPropertyImage">
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <form id="formPropertyImage">
                                <div class="input-group">
                                    <input type="file" class="form-control" name="image" id="image">
                                    <button class="btn btn-outline-secondary" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- /HTML Body -->
<script type="module">
    import ImageProcessing from './assets/js/components/realtor/ImageProcessing.js';
    ImageProcessing().init();
</script>
<?php require_once('layouts/footer.php'); ?>