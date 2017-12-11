<?php
namespace Hoben\Auth;

class DataServer
{
    protected $host;
    protected $database_name;
    protected $user_name;
    protected $user_password;

    /**
     * Get the value of host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @return  self
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get the value of database_name
     */
    public function getDatabase_name()
    {
        return $this->database_name;
    }

    /**
     * Set the value of database_name
     *
     * @return  self
     */
    public function setDatabase_name($database_name)
    {
        $this->database_name = $database_name;

        return $this;
    }

    /**
     * Get the value of user_name
     */
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * Set the value of user_name
     *
     * @return  self
     */
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of user_password
     */
    public function getUser_password()
    {
        return $this->user_password;
    }

    /**
     * Set the value of user_password
     *
     * @return  self
     */
    public function setUser_password($user_password)
    {
        $this->user_password = $user_password;

        return $this;
    }

    public function __construct($host, $database_name, $user_name, $user_password)
    {
        $this->host = $host;
        $this->database_name = $database_name;
        $this->user_name = $user_name;
        $this->user_password = $user_password;
    }

}
