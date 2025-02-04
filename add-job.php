<?php
require_once ('layouts/header.php');
?>

<section>
        <div class="container ">
            <div class="row">
                <div class="col-md-6 mx-auto my-auto">
                    <div class="card">
                        <div class="card-body text-center">

                            <form>
                                <h1 class="h3 mb-3 fw-normal">Add a job</h1>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tilte"
                                        placeholder="Add your job title">
                                    <label for="tilte">Job title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="description" id="" cols="30" rows="10"></textarea>
                                    <label for="description">Job title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tilte"
                                        placeholder="Add your company name">
                                    <label for="tilte">Company name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="tilte"
                                        placeholder="Add your end date">
                                    <label for="tilte">End Date</label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once ('layouts/footer.php');
?>