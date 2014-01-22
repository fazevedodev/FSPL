<?php
    class DbConnector {
        protected $database_name;
        protected $hostname;
        protected $username;
        protected $password;
        protected $connection;
        
        function __construct($db_hostname, $db_name, $db_user, $db_pass) {
            $this->hostname = $db_hostname;
            $this->database_name = $db_name;
            $this->username = $db_user;
            $this->password = $db_pass;
        }
        
        function createDatabase() {
            return false;
        }
        
        function connect() {
            return false;
        }
        
        function execSql($sql) {
            return false;
        }
        
        function execScript($script) {
            return false;
        }
    }
?>