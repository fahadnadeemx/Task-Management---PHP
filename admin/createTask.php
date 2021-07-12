<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'app/DB.php');
include_once(ROOT . 'app/Global.php');
ByPass('admin');
$db = new DB();
if (empty($_POST['createTask'])) {
    $flash = flash();
    include_once(ROOT . 'shared/_head.php');
    $user = user();
    $users = $db->query('SELECT * FROM `users` WHERE `IsActive` = 1');
?>
    <!--section start-->
    <!--section start-->
    <section>
        <?php if (count($flash ?? []) > 0) {
            foreach ($flash as $key => $value) {
        ?>
                <div class="alert alert-lg alert-<?= $value == 'task added!'?'success':'danger' ?>"><?= $value ?></div>
        <?php
            }
        } ?>
        <form action="#" method="POST" class="needs-validation" novalidate>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="projectTitle">Project Title:</label>
                </div>
                <div class="col-md-3">
                    <input name="title" type="text" class="form-control" id="projectTitle" placeholder="Project title" max="255" required>
                    <div class="invalid-feedback">
                        required project name!
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="projectDescription">Project Description:</label>
                </div>
                <div class="col-md-3">
                    <input name="description" type="text" class="form-control" id="projectDescription" placeholder="Add project description">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="assign">Assign:</label>
                </div>
                <div class="col-md-3">
                    <select name="user_id" id="assign" class="custom-select" required>
                        <option id="">select assign to</option>
                        <?php foreach ($users as $key => $user) { ?>
                            <option value="<?= $user['id'] ?>"><?= $user['full_name'] ?></option>
                        <?php }  ?>
                    </select>

                </div>
                <div class="col-md-6">
                    <span style="font-size: 12px;">Select the user to whom you want to assign a task.</span>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="dueDate">Due Date:</label>
                </div>
                <div class="col-md-3">
                    <input name="due_data" type="date" class="form-control" id="dueDate" required>
                </div>
                <div class="col-md-6">
                    <span style="font-size: 12px;">Select due date for deadline assurity</span>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="url">Requirement Url:</label>
                </div>
                <div class="col-md-3">
                    <input name="requirement_url" type="url" class="form-control" id="url" required>
                </div>
                <div class="col-md-6">
                    <span style="font-size: 12px;">Add URL of Drob box / Google Drive / One Drive or etc to download
                        files.</span>
                </div>

            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="priority ">Priority:</label>
                </div>
                <div class="col-md-3">
                    <select name="priority" id="priority" class="custom-select" required>
                        <option id="">Select Priority</option>
                        <option id="high">High</option>
                        <option id="medium">Medium</option>
                        <option id="low">Low</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="projectComments">Comments</label>
                </div>
                <div class="col-md-6">
                    <textarea name="comments" class="form-control" id="projectComments" placeholder="Add comments about project" rows="6"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2">
                </div>
                <div class="col-md-6">
                    <input name="createTask" class="btn btn-primary submitBtn" type="submit" value="Submit">
                </div>
            </div>


        </form>
    </section>
    <!--section end-->

    <!--section end-->
    <?php
    include_once(ROOT . 'shared/_foot.php');
    ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    </body>

    </html>
<?php } else {

    include_once(ROOT . 'app/Session.php');
    $session = new Session();
    try {
        $q = "INSERT INTO `tasks`(`title`,`description`,`user_id`,`due_data`,`requirement_url`,`priority`,`comments`) VALUES ('" . $_POST['title'] . "','" . $_POST['description'] . "','" . $_POST['user_id'] . "','" . $_POST['due_data'] . "','" . $_POST['requirement_url'] . "','" . $_POST['priority'] . "','" . $_POST['comments'] . "')";
        $db->query($q);
        $session->flasher(['task added!']);
        header("Refresh:0");
    } catch (\Throwable $th) {
        throw $th;
        $session->flasher(['Please fill the form properly!']);
        header("Refresh:0");
    }
} ?>