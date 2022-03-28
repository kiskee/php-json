<?php
session_start();
require __DIR__.'/partials/users.php';
ensure_user_is_authenticated();
$users = getUsers();

include 'partials/header.php';

?>
<h1>index page here</h1>





<?php
include 'partials/footer.php';

?>