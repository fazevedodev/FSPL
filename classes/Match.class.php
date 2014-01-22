<?php
    class Match {
        private $id;
        private $round_id;
        private $match_state_id;
        private $match_day;

        function get_id() {
            return $this->id;
        }

        function set_id($val) {
            $this->id = $val;
        }
        function get_round_id() {
            return $this->round_id;
        }

        function set_round_id($val) {
            $this->round_id = $val;
        }
        function get_match_state_id() {
            return $this->match_state_id;
        }

        function set_match_state_id($val) {
            $this->match_state_id = $val;
        }
        function get_match_day() {
            return $this->match_day;
        }

        function set_match_day($val) {
            $this->match_day = $val;
        }
    }
?>