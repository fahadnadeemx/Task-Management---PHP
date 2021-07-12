<?php
define(
    'ROOT',
    $_SERVER['DOCUMENT_ROOT'] . '/taskman/'
);
include_once(ROOT . 'app/Global.php');
include_once(ROOT . 'app/DB.php');
$db = new DB();
$tasks = $db->toArray($db->query('SELECT t.*, u.`full_name` FROM `tasks` t INNER JOIN `users` u ON u.`id` = t.`user_id` WHERE t.`isActive` = 1 AND t.`id`=' . ($_GET['ref'] ?? '0')));
$tasks = $tasks[0];
if (empty($tasks)) {
    http_response_code(404);
    echo "<h3>404</h3>";
    exit;
}
if (!empty($_POST['updateTask'])) {
    try {
        $db->query("UPDATE `tasks` SET `status`='complete'
        ,`submit_date`='" . $_POST['submit_date'] . "'
        ,`submit_url`='" . $_POST['submit_url'] . "'
        ,`submit_comment`='" . ($_POST['submit_comment'] ?? '') . "' WHERE `id`=" . ($_GET['ref'] ?? '0'));
        $tasks = $db->toArray($db->query('SELECT t.*, u.`full_name` FROM `tasks` t INNER JOIN `users` u ON u.`id` = t.`user_id` WHERE t.`isActive` = 1 AND t.`id`=' . ($_GET['ref'] ?? '0')));
        $tasks = $tasks[0];
        $flash = ['Task submitted'];
    } catch (\Throwable $th) {
        throw $th;
        $flash = ['Fill the form properly'];
    }
}
ByPass('user');
include_once(ROOT . 'shared/_head.php');
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
    <h3><?= $tasks['title'] ?? '' ?></h3>
    <label>Project description</label>
    <p><?= $tasks['description'] ?? '' ?></p>
    <label>Requirement Url:</label><br>
    <a href="<?= $tasks['requirement_url'] ?? '' ?>"><?= $tasks['requirement_url'] ?? '' ?></a><br>
    <label>Due Date</label><br>
    <p><?= $tasks['due_data'] ?? '' ?></p>
    <label>Priority:</label><br>
    <p><?= $tasks['priority'] ?? '' ?></p>
    <hr style="border: 1px solid #838383;">
    <?php
    if (!empty($tasks['submit_date'])) { ?>

        <h3>Submission Details</h3>
        <br>
        <label>Date:</label>
        <div class="form-control"><?= $tasks['submit_date'] ?? '' ?></div>
        <br>
        <label>Add project Url:</label>
        <div class="form-control">
            <a href="<?= $tasks['submit_url'] ?? '' ?>"> <?= $tasks['submit_url'] ?? '' ?></a>
        </div>
        <br>
        <label>Project comments</label>
        <div class="form-control"><?= $tasks['submit_comment'] ?? '' ?></div>
        
    <?php } else { ?>
        <h3>Submit Task</h3>
        <br>
        <form method="POST">
            <label>Date:</label>
            <input name="submit_date" type="date" class="form-control" id="date" value="getDate()" required style="max-width: 400px;">
            <br>
            <label>Add project Url:</label>
            <input name="submit_url" type="url" class="form-control" id="url" required style="max-width: 400px;">
            <br>
            <label>Project comments</label>
            <textarea name="submit_comment" class="form-control" id="textArea" rows="3" style="max-width: 400px;"></textarea>
            <br>
            <div class="form-group">
                <input name="updateTask" class="btn btn-primary submitBtn" type="submit" value="Submit">
            </div>
        </form>
    <?php } ?>
</section>
<!--section end-->
<?php
include_once(ROOT . 'shared/_foot.php');
?>
</body>

</html>