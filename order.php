<?php
include 'autoloader.php';
 //inputs
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
  //validation  
  //check if the inputs is empty
    $validaion=new validation;

    $checkEmptyName=$validaion->checkInput($name);
    $checkEmptyEmail=$validaion->checkInput($email);
    $checkEmptyPhone=$validaion->checkInput($phone);
    $checkEmptyAddress=$validaion->checkInput($address);
   // validate  inputs
    $name=$validaion->cleanInput($name);
    $email=$validaion->cleanInput( $email );
    $phone=$validaion->cleanInput($phone);
    $address=$validaion->cleanInput($address); 
    
    $Customer=new Customer($name,$email,$phone,$address);
    $Myqueries=new Myqueries;
    $Myqueries->addCustomerData($Customer);    
   