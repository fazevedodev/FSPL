<?php
    class MapPool {
        private $map_id;
        private $round_id;

        function get_map_id() {
            return $this->map_id;
        }

        function set_map_id($val) {
            $this->map_id = $val;
        }
        function get_round_id() {
            return $this->round_id;
        }

        function set_round_id($val) {
            $this->round_id = $val;
        }
    }
?>