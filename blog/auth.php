<?php
    include("function.php");
    auth($_REQUEST);

    header("Refresh:3;url=index.php");