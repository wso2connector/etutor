<?php

if (!isset ($message)) $message = null;
if (!isset($form_action)) $form_action = "new";

?>

<div class="row">
    <div class="col-lg-12">

        <div class="bs-example">
            <div class="jumbotron">

                <p>If you dont have an account</p>

                <p><a class="btn btn-primary btn-lg" href="<?php echo site_url() . "/register/"; ?>">Click here to join
                        now</a></p>
            </div>

            <div class="jumbotron">

                <p>If you have account </p>

                <p><a class="btn btn-primary btn-lg" href="<?php echo site_url() . "/login/logout"; ?>">Click here to
                        Login</a></p>
            </div>
            <div class="jumbotron">

                <p>Post a Question</p>

                <p><a class="btn btn-primary btn-lg" href="<?php echo site_url() . "/question/"; ?>">Click here to
                        Post</a></p>
            </div>
        </div>
    </div>
