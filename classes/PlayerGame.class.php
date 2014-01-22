<?php
    class PlayerGame {
        private $player_id;
        private $game_replay;

        function get_player_id() {
            return $this->player_id;
        }

        function set_player_id($val) {
            $this->player_id = $val;
        }
        function get_game_replay() {
            return $this->game_replay;
        }

        function set_game_replay($val) {
            $this->game_replay = $val;
        }
    }
?>