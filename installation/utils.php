<?php
    function createPairings($teams) {
        if(count($teams) < 4) {
            return null;
        }
        
        $upper = array();
        $lower = array();
        
        for($i=0; $i<count($teams)/2; $i++) {
            $upper[$i] = $teams[$i];
        }
        
        for($i=count($teams)/2, $j=0; $i<count($teams); $i++, $j++) {
            $lower[$j] = $teams[$i];
        }
        
        $rounds = array();
        
        for($r=0; $r<count($teams)-1; $r++) {
            $round = array();
                        
            for($p=0; $p<count($teams)/2; $p++) {
                $pair = array('team_1' => $upper[$p],
                              'team_2' => $lower[$p]);
                
                array_push($round, $pair);
            }
                        
            $rotation = rotate($upper, $lower);
            
            $upper = $rotation['array1'];
            $lower = $rotation['array2'];
            
            array_push($rounds, $round);
        }
        
        return $rounds;
    }
    
    function rotate($array1, $array2) {
        $base = array_shift($array1);
        array_unshift($array1, array_shift($array2));
        array_push($array2, array_pop($array1));
        array_unshift($array1, $base);
        
        return array('array1' => $array1, 'array2' => $array2);
    }
    
    function getRandomSubArray($array, $n) {
        if(count($array) < $n) {
            return null;
        }
        
        $selected = array();
        
        for($i = 0; $i < $n;) {
            $index = rand(0, count($array)-1);
        
            if(!in_array($array[$index], $selected)) {
                array_push($selected, $array[$index]);
                
                $i++;
            }
        }
        
        return $selected;
    }
?>