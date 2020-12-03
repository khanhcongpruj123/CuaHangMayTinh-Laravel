<?php
// General singleton class.

namespace LoginManager;

class LoginManager
{

    public static $instance = NULL;
    private $user = NULL;

    private function __construct()
    {
    }


    public static function getInstance()
    {
        if (self::$instance == NULL) {
            echo 'Create new instance';
            self::$instance = new static();
        }

        return self::$instance;
    }

    public function set_user($user)
    {
        $this->user = $user;
    }

    public function get_user()
    {
        return $this->user;
    }
}
