<?php

//$users = json_decode(file_get_contents(__DIR__ . '/users.json'), true);


function getUsers(){
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true); 
 }

 function getUsersById($id){

    $users = getUsers();
    foreach ($users as $user){
        if($user['id']==$id){
            return $user;
        }
        
    }
    return null;

}
function createUser($data){
    $users = getUsers();
    $data['id'] = rand(1000000,20000000);
    $users[]= $data;

    putJson($users);    

    return $data;

}
?>