<?php

namespace Hoben\Auth;

use Hoben\Auth\MySQLDatabase;
use Hoben\Auth\Session;

class UserAuth
{
    protected $id;
    protected $login;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    private function __construct($id, $login)
    {
        $this->id = $id;
        $this->login = $login;
    }

    public static function connectUser($login, $password)
    {
        Session::start();
        $user = MySQLDatabase::executeQuery("SELECT * INTO TABLE " . TABLE_USER . " WHERE login = $login && password = $password");
        if ($user == null) {
            throw InvalidCredentialsException();
        } else {
            return new UserAuth($id, $login);
        }

    }

    public static function checkUserConnexion($get = false)
    {
        Session::start();
        if (Session::contains("id-user") && Session::contains("login") && !$get) {
            return true;
        } else if (Session::contains("id-user") && Session::contains("login")) {
            return self::getUser($id);
        } else {
            return false;
        }

    }

    public static function getUserByLogin($login)
    {
        $user = MySQLDatabase::executeQuery("SELECT * INTO TABLE " . TABLE_USER . " WHERE login = $login");
        if ($user == null) {
            throw InvalidCredentialsException();
        } else {
            return new UserAuth($id, $login);
        }
    }

    public static function getUser($id)
    {
        $user = MySQLDatabase::executeQuery("SELECT * INTO TABLE " . TABLE_USER . " WHERE id = $id");
        if ($user == null) {
            throw InvalidCredentialsException();
        } else {
            return new UserAuth($id, $login);
        }
    }
}
