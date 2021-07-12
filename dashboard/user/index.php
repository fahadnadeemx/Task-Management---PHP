<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'app/Global.php');
include_once(ROOT . 'app/DB.php');
$db = new DB();
if (!empty($_GET['delme'])) {
    try {
        $db->query('UPDATE `users` SET `IsActive` = 0 WHERE `id`= ' . $_GET['delme']);
        $db->query('UPDATE `auth` SET `IsActive` = 0 WHERE `user_id` = ' . $_GET['delme']);
        flasher(['User Removed Sucessfully']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    } catch (\Throwable $th) {
        flasher(['Cant Delete this user']);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}
include_once(ROOT . 'shared/_head.php');
$user = user();
ByPass('admin');
$users = $db->query('SELECT * FROM `users` WHERE `IsActive` = 1');
$flash = flash();
?>
<!--section start-->
<section>

    <?php if (count($flash ?? []) > 0) {
        foreach ($flash as $key => $value) {
    ?>
            <div class="alert alert-lg alert-<?= $value == 'User Removed Sucessfully' ? 'success' : 'danger' ?>"><?= $value ?></div>
    <?php
        }
    } ?>
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
                        
                        <td><a onclick="return confirm('Are you sure you want to delete this user?')" href="./?delme=<?= $row['id'] ?>"><button class="btn deleteBtn">Delete</button></a></td>
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