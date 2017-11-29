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
        require "Controller/register.php";
    }
    public function getLoginUser()
    {
        require "Controller/login.php";
    }
    public function getaddAnImageUser()
    {
        $connectDB= new pdoModel;
        $connectDB->upload();
    }

    // public function login($pseudo, $password)
    // {
    //     if ($this->pdoModel->select($pseudo, $password)) {
    //         header("location:index.php?action=getRegisterUser");
    //     } else {
    //         header("location:index.php?action=getWelcomePage");
    //     }
    // }
    // public function register($pseudo, $password, $email)
    // {
    //     $this->pdoModel->insert($pseudo, $password, $email);
    //     header("location:index.php?action=getRegisterPage");
    // }

}


 ?>
