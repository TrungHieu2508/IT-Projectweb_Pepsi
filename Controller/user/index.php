<?php
    // include "Model/DBconfig.php";

        if(isset($_GET['action'])){
            $action = $_GET['action'];
        }else{
            $action = '';
        }
        $thanhcong = array();
        switch ($action) {
            case 'add':{
                if(isset($_POST['add_user'])){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $db->InsertData($name,$email,$password);
                    if ($db) {
                        $thanhcong[] = 'Thêm mới thành công';
                    }
                }
                require_once('View/user/add_user.php');
                break;
            }
            case 'edit':{
                require_once('View/user/edit_user.php');
                break;
            }
            case 'list': {
                $tblTable = 'user';
               $data = $db->getAllData($tblTable);
                require_once('View/user/list.php');
                break;
            }
            default:{
                require_once('View/user/list.php');
                break;
            }
        }
?>