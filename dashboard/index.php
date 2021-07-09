<?php
include_once('_head.php');
?>
<!--section start-->
<section>
    <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fullName">Full Name<span style="color: red;">*</span></label>
                <input type="text" class="form-control " id="fullName" placeholder="First name" required>
                <div class="invalid-feedback">
                    required full name!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="phoneNo">Phone No<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="phoneNo" placeholder="enter your phone number" required>
                <div class="invalid-feedback">
                    required Phone No!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="department">Department<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="department" placeholder="enter your department" required>
                <div class="invalid-feedback">
                    required Department Name!
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="designation">Designation<span style="color: red;">*</span></label>
                <input type="text" class="form-control" id="designation" placeholder="employee designation" required>
                <div class="invalid-feedback">
                    required designation!
                </div>
            </div>
        </div>
        <hr style="border: 1px solid #838383; max-width: 950px;">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email<span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="email" placeholder="enter your email address" required>
                <div class="invalid-feedback">
                    required correct email!
                </div>

            </div>
            <div class="form-group col-md-6">
                <label for="password">Password<span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="password" placeholder="enter your password" maxlength="16" required>
                <div class="invalid-feedback">
                    required password between 16 characters!
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="confirmpassword">Confirm Password<span style="color: red;">*</span></label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="enter your confirm password" maxlength="16" required>
                <div class="invalid-feedback">
                    required password between 16 characters!
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
include_once('_foot.php');
?>
</body>

</html>