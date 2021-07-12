<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'shared/_head.php');
include_once(ROOT . 'app/Global.php'); #/app/Global.php');
include_once(ROOT . 'app/DB.php');
$user = user();
ByPass('admin');
$db = new DB();
$users = $db->query('SELECT * FROM `users` WHERE `IsActive` = 1');
?>
<!--section start-->
<section>
    <div class="addUser">
        <a href="<?= MYHTTP ?? '../' ?>dashboard/user/add/""><button class=" btn btn-primary submitBtn">Add User</button></a>
        <br>
        <br>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">UserName</th>
                    <th scope="col">Department</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($users)) { ?>
                    <tr>
                        <td><?= $row['full_name'] ?></td>
                        <td><?= $row['department'] ?></td>
                        <td><?= $row['designation'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><a href="#"><button class="btn btn-primary editBtn">Edit</button></a></td>
                        <td> <button class="btn deleteBtn">Delete</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<!--section end-->
<?php
include_once(ROOT . 'shared/_foot.php');
?>
</body>

</html>