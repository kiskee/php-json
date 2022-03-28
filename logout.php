<?php

session_start();
session_unset();
session_destroy();
require __DIR__.'/partials/users.php';


redirect('login.php')


?>