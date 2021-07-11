<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/taskman/');
include_once(ROOT . 'shared/_head.php');
include_once(ROOT . 'app/Global.php');
$user = user();
// ByPass('admin');
include_once(ROOT . '/dashboard/DB_' . ($user['role'] ?? 'fool') . '.php');
include_once(ROOT . '/shared/_foot.php');
?>
</body>

</html>