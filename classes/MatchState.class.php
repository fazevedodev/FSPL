<?php
    class MatchState {
        private $id;
        private $state;

        function get_id() {
            return $this->id;
        }

        function set_id($val) {
            $this->id = $val;
        }
        function get_state() {
            return $this->state;
        }

        function set_state($val) {
            $this->state = $val;
        }
    }
?>