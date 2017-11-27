<?php



class Controller
{
    public $pdoModel;

    public function __construct()
    {
        $this->pdoModel = new pdoModel();
    }

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
        require "Views/loginForm.html";
    }
    public function getHomePage()
    {
        require "Views/home.html";
    }
    public function getaddAnImagePage()
    {
        require "Views/addAnImage.html";
    }
    public function get404page()
    {
        require "Views/welcome.html";
    }
    public function administrateur()
    {
        require "Controller/admin.php"
    }


    public function login($pseudo, $password)
    {
        if ($this->pdoModel->select($pseudo, $password)) {
            header("location:index.php?action=UserController@getHome");
        } else {
            header("location:index.php?action=UserController@getSignup");
        }
    }
    public function register($pseudo, $password, $email)
    {
        $this->pdoModel->insert($pseudo, $password, $email);
        header("location:index.php?action=UserController@getLogin");
    }
    public function upload()
    {
        $this ->pdoModel->upload($image, $name);
          header("location:index.php?action=UserController@getSignup");
    }

}


 ?>
