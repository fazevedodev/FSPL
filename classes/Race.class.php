<?php
    class Race {
        private $id;
        private $name;
        private $tag;
        private $icon;

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
        function get_icon() {
            return $this->icon;
        }

        function set_icon($val) {
            $this->icon = $val;
        }
    }
?>