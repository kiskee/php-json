<?php

$users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);

var_dump($users);

function users(){
    foreach($users as $user){
        
    }
}


?>