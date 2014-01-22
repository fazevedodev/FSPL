<?php
    class Round {
        private $id;
        private $name;

        function get_id() {
            return $this->id;
        }

        function set_id($val) {
            $this->id = $val;
        }
        function get_name() {
            return $this->name;
        }

        function set_name($val) {
            $this->name = $val;
        }
    }
?>