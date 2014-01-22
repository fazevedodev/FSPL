<?php
    class Map {
        private $id;
        private $name;
        private $image;

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
        function get_image() {
            return $this->image;
        }

        function set_image($val) {
            $this->image = $val;
        }
    }
?>