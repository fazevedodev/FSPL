<?php
    class Game {
        private $replay;
        private $map_id;
        private $match_id;
        private $game_state_id;

        function get_replay() {
            return $this->replay;
        }

        function set_replay($val) {
            $this->replay = $val;
        }
        function get_map_id() {
            return $this->map_id;
        }

        function set_map_id($val) {
            $this->map_id = $val;
        }
        function get_match_id() {
            return $this->match_id;
        }

        function set_match_id($val) {
            $this->match_id = $val;
        }
        function get_game_state_id() {
            return $this->game_state_id;
        }

        function set_game_state_id($val) {
            $this->game_state_id = $val;
        }
    }
?>