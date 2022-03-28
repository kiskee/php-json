<?php 


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
function updateUser($data,$id){
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user){
        if($user['id']==$id){

            $users[$i] = $updateUser = array_merge($user,$data);
        }
        
    }
putJson($users);
    
    return $updateUser;
}



function deleteUser($id){

    $users = getUsers();

    foreach ($users as $i => $user){
        if ($user['id'] == $id){
            //array_splice($users, $i, 1);
            unset($users[$i]);
        }
    }

    putJson($users);     

}

 


function aunthenticate_user($email,$password){
    $users = getUsers();
    foreach($users as $user){
        if($email==$user['email'] && $password==$user['password']){
             $username = $user['email'];
            $password = $user['password'];   
            return $email == $username && $password == $password;

        }
    }
    return null;

   
    
    
}

function redirect ($url){
    header("Location: $url");
}

function is_authenticated(){
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated(){
    if(!is_authenticated()){
        redirect('login.php');
    }
}


function putJson($users){
    file_put_contents(__DIR__ . '/users.json', json_encode($users,JSON_PRETTY_PRINT));

}






?>