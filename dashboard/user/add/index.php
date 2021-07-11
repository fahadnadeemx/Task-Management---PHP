<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/mushiPHP/fahad/');
include_once(ROOT . 'shared/_head.php');
include_once(ROOT . 'app/Global.php');
include_once(ROOT . 'app/DB.php');
$flash = flash();
$user = user();
ByPass('admin');
?>
<!--section start-->
<section>

    <?php if (count($flash ?? []) > 0) {
        foreach ($flash as $key => $value) {
    ?>
            <div class="alert alert-lg alert-danger"><?= $value ?></div>
    <?php
        }
    } ?>
    <form class="needs-validation" method="POST" action="<?= MYHTTP ?>dashboard/user/add/add.php" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fullName">Full Name<span style="color: red;">*</span></label>
                <input name="full_name" type="text" class="form-control " id="fullName" placeholder="First name">
                <div class="invalid-feedback">
                    full name!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="phoneNo">Phone No<span style="color: red;">*</span></label>
                <input name="phone_no" type="text" class="form-control" id="phoneNo" placeholder="enter your phone number">
                <div class="invalid-feedback">
                    Phone No!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="department">Department<span style="color: red;">*</span></label>
                <input name="department" type="text" class="form-control" id="department" placeholder="enter your department">
                <div class="invalid-feedback">
                    Department Name!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="designation">Designation<span style="color: red;">*</span></label>
                <input name="designation" type="text" class="form-control" id="designation" placeholder="employee designation">
                <div class="invalid-feedback">
                    designation!
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #838383; max-width: 950px;">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email<span style="color: red;">*</span></label>
                <input name="email" type="email" class="form-control" id="email" placeholder="enter your email address">
                <div class="invalid-feedback">
                    correct email!
                </div>

            </div>
            <div class="form-group col-md-6">
                <label for="password">Password<span style="color: red;">*</span></label>
                <input name="password" type="password" class="form-control" id="password" placeholder="enter your password" maxlength="16">
                <div class="invalid-feedback">
                    password between 16 characters!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="confirmpassword">Confirm Password<span style="color: red;">*</span></label>
                <input name="cpassword" type="password" class="form-control" id="confirmpassword" placeholder="enter your confirm password" maxlength="16">
                <div class="invalid-feedback">
                    password between 16 characters!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label></label><br>
                <button type="submit" class="btn btn-primary submitBtn" style="margin-top: 7px;">Submit</button>
            </div>

        </div>

    </form>
</section>
<!--section end-->

<?php
include_once(ROOT . 'shared/_foot.php');
?>
</body>

</html>