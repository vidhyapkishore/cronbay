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
                                <h1 class="h3 mb-3 fw-normal">Place your bid for {{Job name}} at {{company name}}</h1>

                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
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