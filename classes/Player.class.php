<?php
    class Player {
        private $id;
        private $team_id;
        private $race_id;
        private $name;
        private $password;
        private $email;
        private $is_captain;

        function get_id() {
            return $this->id;
        }

        function set_id($val) {
            $this->id = $val;
        }
        function get_team_id() {
            return $this->team_id;
        }

        function set_team_id($val) {
            $this->team_id = $val;
        }
        function get_race_id() {
            return $this->race_id;
        }

        function set_race_id($val) {
            $this->race_id = $val;
        }
        function get_name() {
            return $this->name;
        }

        function set_name($val) {
            $this->name = $val;
        }
        function get_password() {
            return $this->password;
        }

        function set_password($val) {
            $this->password = $val;
        }
        function get_email() {
            return $this->email;
        }

        function set_email($val) {
            $this->email = $val;
        }
        function get_is_captain() {
            return $this->is_captain;
        }

        function set_is_captain($val) {
            $this->is_captain = $val;
        }
    }
?>