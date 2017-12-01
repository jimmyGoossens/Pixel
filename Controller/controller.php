<?php


class Controller
{
    public function getWelcomePage()
    {
        require "Views/welcome.html";
    }
    public function getRegisterPage()
    {
        require "Views/registerForm.html";
    }
    public function getLoginPage()
    {
        require "Views/login.html";
    }
    public function getHomePage()
    {
        require "Views/home.php";
    }
    public function getaddAnImagePage()
    {
        require "Views/addAnImage.html";
    }
    public function get404page()
    {
        require "Views/404.html";
    }
    public function administrateur()
    {
        require "Controller/admin.php";
    }
    public function getRegisterUser()
    {
        $register= new pdoModel;
        $register->insert();
        header('location:index.php?action=getLoginPage');
    }
    public function getLoginUser()
    {
        require 'login.php';
        // $login= new pdoModel;
        // $login->select();
        // header('location:index.php?action=getHomePage');
    }
    public function getaddAnImageUser()
    {
        $connectDB= new pdoModel;
        $connectDB->upload();
        header('location:index.php?action=getHomePage');
    }

}


 ?>
