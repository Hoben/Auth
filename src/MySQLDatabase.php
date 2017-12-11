<?php
namespace Hoben\Auth;

class MySQLDatabase implements Database
{
    protected $data_server;
    /**
     * Get the value of data_server
     */
    public function getDataServer()
    {
        return $this->data_server;
    }

    /**
     * Set the value of data_server
     *
     * @return  self
     */
    public function setDataServer($data_server)
    {
        $this->data_server = $data_server;

        return $this;
    }

    /**
     * connects to database
     *
     * @return
     */
    public function connect()
    {
        echo ("hii");
        echo ($this->getDataServer()->getHost());
    }

    public function __construct()
    {
        $data_server = new \Hobben\Auth\DataServer(\HOST, \DATABASE_NAME, \USER_NAME, \USER_PASSWORD);
        $this->data_server = $data_server;
    }
}
