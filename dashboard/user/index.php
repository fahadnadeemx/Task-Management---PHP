<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . '/mushiPHP/fahad/');
include_once(ROOT.'shared/_head.php');
include_once(ROOT.'app/Global.php'); #/app/Global.php');
$user = user();
ByPass('admin');
?>
<!--section start-->
<section>
    <div class="addUser">
        <a href="<?= MYHTTP ?? '../' ?>dashboard/user/add/""><button class="btn btn-primary submitBtn">Add User</button></a>
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
                <tr>
                    <td>Name #1</td>
                    <td>It</td>
                    <td>Web Developer</td>
                    <td>name@gmail.com</td>
                    <td><a href="../admin/editUser.html"><button class="btn btn-primary editBtn">Edit</button></a></td>
                    <td> <button class="btn deleteBtn">Delete</button></td>
                </tr>
                <tr>
                    <td>Name #1</td>
                    <td>It</td>
                    <td>Web Developer</td>
                    <td>name@gmail.com</td>
                    <td><a href="../admin/editUser.html"><button class="btn btn-primary editBtn">Edit</button></a></td>
                    <td> <button class="btn deleteBtn">Delete</button></td>
                </tr>
                <tr>
                    <td>Name #1</td>
                    <td>It</td>
                    <td>Web Developer</td>
                    <td>name@gmail.com</td>
                    <td><a href="../admin/editUser.html"><button class="btn btn-primary editBtn">Edit</button></a></td>
                    <td> <button class="btn deleteBtn">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<!--section end-->
<?php
include_once(ROOT.'shared/_foot.php');
?>
</body>

</html>