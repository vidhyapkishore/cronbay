<?php
require_once ('layouts/header.php');
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between p-3">
                <h1>Jobs posted by you</h1>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Job
                </button>
            </div>
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">Job title</h5>
                            <span class="end-date">No of bids till now: 5</span>
                        </div>
                        <span>Company name</span>
                        <p class="card-text job-description">Some quick example text to build on the card title and make
                            up the bulk of
                            the card's content.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Button trigger modal -->
                             <div>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Remove 
                            </button>
                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                View your bids 
                            </button></div>
                            <span class="end-date">Ends:05/02/2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once ('layouts/footer.php');
?>