<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'shared/_head.php');
include_once(ROOT . 'app/Global.php');
include_once(ROOT . 'app/DB.php');
$flash = flash();
$db = new DB();
$tasks = $db->query('SELECT t.*, u.`full_name` FROM `tasks` t INNER JOIN `users` u ON u.`id` = t.`user_id` WHERE t.`isActive` = 1 ORDER BY t.`status`');
ByPass('admin');
?>
<!--section start-->
<section>
    <div class="createTask">
        <a href="../admin/createTask.php"><button class="btn btn-primary submitBtn">Create Task</button></a>
        <br>
        <br>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Project Name</th>
                    <th scope="col">List</th>
                    <th scope="col">Assign To</th>
                    <th scope="col">Due Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $key => $task) { ?>
                    <tr>
                        <td><?= $task['title'] ?? '' ?></td>
                        <td><?= $task['description'] ?? '' ?></td>
                        <td><?= $task['full_name'] ?? '' ?></td>
                        <td><?= $task['due_data'] ?? '' ?></td>
                        <td><?= $task['status'] ?? '' ?></td>
                        <td><?= $task['priority'] ?? '' ?></td>
                        <td><a href="../admin/viewTaskForm.php?ref=<?= $task['id'] ?? '' ?>"><button class="btn btn-primary editBtn">View Task</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php
include_once(ROOT . 'shared/_foot.php');
?>
</body>
</html>