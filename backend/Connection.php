<?php
    define("dbhost", "localhost"); //Server Name
    define("dbname", "db_innercircle"); //Database Name
    define("dbuser", "root"); //Username
    define("dbpassword", ""); //Database Password

    class Connection
    {
        private $db_connection;

        function get_db()
        {
            $this->db_connection = new mysqli("localhost","root","","db_innercircle");
            if(!$this->db_connection)
            {
                die("Connection Failed");
            }
            else
            {
                return $this->db_connection;
            }

        }
    }
?>