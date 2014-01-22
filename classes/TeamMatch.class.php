<?php
    class TeamMatch {
        private $team_id;
        private $match_id;

        function get_team_id() {
            return $this->team_id;
        }

        function set_team_id($val) {
            $this->team_id = $val;
        }
        function get_match_id() {
            return $this->match_id;
        }

        function set_match_id($val) {
            $this->match_id = $val;
        }
    }
?>