<?php
    require_once 'model/Muser.php';
    $class = new user();
    switch ($action){
        case 'login':
            if($_POST){
                $data=$_POST['frm'];
                $password=sha1($data['password']);
                $user=$class->select_user($data['username']);
                if($user['password']==$password){
                   
                }
            }
        break;
        case 'logout':
                
        break;
        

    }

    require_once "view/$controller/$action.php";