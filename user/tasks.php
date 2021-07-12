<?php
if (empty($_GET['asd'])) {
    http_response_code(404);
    echo "<h3>404</h3>";
    exit;
}
$type = $_GET['asd'];
$pageName = ucfirst($type) . " Tasks";
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'shared/_head.php');
include_once(ROOT . 'app/Global.php');
include_once(ROOT . 'app/DB.php');
$user = user();
ByPass('user');
$db = new DB();
$q = 'SELECT * FROM `tasks` WHERE `status` = "' . $type . '" AND `user_id`=' . $user['user_id'] . ' AND `isActive`=1';
$tasks = $db->query($q);
try {
    $count = $db->count($tasks);
} catch (\Throwable $th) {
    $count = 0;
}
?>
<section>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">List</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (($count ?? 0) > 0) {
                    while ($row = mysqli_fetch_assoc($tasks)) { ?>
                        <tr>
                            <td><?= $row['title'] ?? 'N/A' ?></td>
                            <td><?= $row['description'] ?? 'N/A' ?></td>
                            <td><?= $row['due_data'] ?? 'N/A' ?></td>
                            <td><?= ucfirst($row['status'] ?? 'N/A') ?></td>
                            <td><?= $row['priority'] ?? 'N/A' ?></td>
                            
                        <td><a href="../user/viewTaskForm.php?ref=<?= $row['id'] ?? '' ?>"><button class="btn btn-primary editBtn">View Task</button></a></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="7">
                            No data found...
                        </td>
                    </tr>
                <?php }  ?>
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