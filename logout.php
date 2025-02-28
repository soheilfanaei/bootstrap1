<?php
include("theme-header.php");
unset($_SESSION["login"]);
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php

include("theme-footer.html");
?>