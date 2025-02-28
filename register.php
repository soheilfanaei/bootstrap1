<?php
include("theme-header.php");
?>
        <form class="row" action="register_action.php" method="post">
            <input class="col-12 col-md m-2" type="text" name="name" placeholder="نام">
            <input class="col-12 col-md m-2" type="text" name="username" placeholder="نام کاربری">
            <input class="col-12 col-md m-2" type="text" name="password" placeholder="کلمه عبور">
            <input class="col-12 col-md m-2" type="submit" value="ثبت نام">
        </form>
<?php
include("theme-footer.html");
?>