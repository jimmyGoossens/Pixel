<?php



class UserController
{
    public $pdoModel;

    public function __construct()
    {
        $this->pdoModel = new pdoModel();
    }

    public function getRegisterPage()
    {
        require "views/register.php";
    }
    public function getHomePage()
    {
        require "views/home.php";
    }
    public function getaddAnImagePage()
    {
        require "views/addAnImage.php";
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
        $this ->pdoModel->upload($image, $name, )
    }

}


 ?>
