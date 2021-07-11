<?php
include_once(ROOT . 'app/DB.php');
$db = new DB();
$data  = [
    'counts' => $db->toArray($db->query('SELECT COUNT(*) as "count",`status` FROM `tasks` WHERE `isActive`=1 AND `user_id`=' . $user['user_id'] . ' GROUP BY `status`')),
    'icons' => [
        'check',
        'building',
        'users',
        'tasks'
    ],
];

?>
<!--section start-->
<section>
    <div class="container">
        <center><img src="../assets/images/logo.png" alt="" width="300px"></center>
        <br>
        <br>
        <div class="row">
            <?php foreach (($data['counts'] ?? []) as $key => $dd) { ?>
                <div class="col-md">
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-8">
                                <h3 class="card-title" style="color: white;"><?= ($dd['count'] ?? '0') ?></h3>
                                <h5><?= ucfirst($dd['status'] ?? '') ?> Tasks</h5>
                            </div>
                            <div class="col-sm-4" style="text-align: right;">
                                <h1 style="font-size: 65px;"> <i class="fas fa-<?= $data['icons'][$key] ?? 'tasks' ?>"></i></h1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!--section end-->