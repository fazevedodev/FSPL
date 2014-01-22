<?php
    require("DbConnector.class.php");

    class MySqlConnector extends DbConnector {
    
        function createDatabase() {
            $this->connection = new mysqli($this->hostname,
                                           $this->username,
                                           $this->password);
            
            $this->connection->query("DROP SCHEMA IF EXISTS '".$this->database_name."'");
            $this->connection->query("CREATE SCHEMA IF NOT EXISTS '".$this->database_name."' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
            $this->connection->query("USE '".$this->database_name."'");
        }
    
        function connect() {
            $this->connection = new mysqli($this->hostname,
                                           $this->username,
                                           $this->password,
                                           $this->database_name);
            
            if(mysqli_connect_error()) {
                return false;
            } else {
                return true;
            }
        }
        
        function execSql($sql) {
            $query_result = $this->connection->query($sql);
            
            if($query_result === false ||
               $query_result === true) {
               return $query_result;
            }
            
            $rows = array();
            
            while($array_result = $query_result->fetch_array(MYSQLI_ASSOC)) {
                array_push($rows, $array_result);
            }
            
            $query_result->free();
            
            return $rows;
        }
        
        function execScript($script) {
            $lines = explode('\n', $script);
            $commands = '';
            
            foreach($lines as $line) {
                $line = trim($line);
                
                if($line && !$this->startsWith($line, '--')) {
                    $commands .= $line.'\n';
                }
            }
            
            $commands = explode(';', $commands);
            
            foreach($commands as $command) {
                if(trim($command)) {
                    $this->execSql($command);
                }
            }
        }
        
        private function startsWith($haystack, $needle) {
            $length = strlen($needle);
            
            return (substr($haystack, 0, $length) === $needle);
        }
    }
?>