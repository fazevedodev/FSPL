<?php
    class Team {
        private $id;
        private $name;
        private $tag;
        private $logo;

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
        function get_tag() {
            return $this->tag;
        }

        function set_tag($val) {
            $this->tag = $val;
        }
        function get_logo() {
            return $this->logo;
        }

        function set_logo($val) {
            $this->logo = $val;
        }
    }
?>