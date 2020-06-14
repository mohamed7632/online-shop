<?php
        session_start();
        include 'autoloader.php';
        $email=$_POST['email'];
        $pwd=$_POST['password'];
        $admin=new Admin($email,$pwd);
       
       
    //validation

        $validaion=new validation;
       $emptyMail=$validaion->checkInput($email);
       $emptyPwd=$validaion->checkInput($pwd);
       $admin->email=$validaion->cleanInput($admin->email);
       $admin->pwd=$validaion->cleanInput($admin->pwd);
// declare sessions
      //  $_SESSION ["islogin"]= false;
        $_SESSION['error']=array();
    //    $_SESSION ["email"];
        if($emptyMail||$emptyPwd){
            if($emptyMail)
            $_SESSION['error']['email']="please fill your email";
            if($emptyPwd)
            $_SESSION['error']['password']="please fill your password";

            header("location:adminlogin.php");
        }
        
        //header("location:adminlogin.php");
        else if(!$emptyMail){
            
            $sql="select email,password from admins where email='".$admin->email."' and password ='".$admin->pwd."' ";
             $connection=$admin->dbConnection();
             $ans=$connection->query($sql);
           
            
             if($ans->num_rows>0){
               // $_SESSION ["isadmin"]="you are admin";
                $_SESSION ["email"]= $admin->email;
                header("location:adminhome.php");
            }
            else{
               $_SESSION ["isadmin"]="you are not admin";
                header("location:adminlogin.php");
               
            }
            
        }
    
    
    