<?php
class classes{
    function maxRange($firstVAL, $secondVAL){
        $maxLen = $firstVAL + $secondVAL - 1;
        return $maxLen;
    }

    function binaryCount($binVAL){
        $numberCount = 0;
        while($binVAL)
        {
            $numberCount += ($binVAL & 1);
            $binVAL = $binVAL >> 1;
        }
        return $numberCount;
    }

    function twoParts($pathONE, $pathTWO){
        $joinedprt = str_replace('/', '', $pathONE);
        $joinedprt .= "/" . str_replace('/', '', $pathTWO);
        return $joinedprt;
    }

    function sastry($sastryNUM){
        $conc = $sastryNUM . $sastryNUM +1;
        $check = 0;
        for ($i = 1; $i * $i <= $conc; $i++) {
                if (($conc % $i == 0) && ($conc / $i == $i)) {
                    $check = 1;
                    return "<h1>"."The answer is ". $sastryNUM . " → ".$conc . " → " ."TRUE(". $sastryNUM. "is a perfect square)";
        
                }
            }
        if($check == 0){
        return "<h1>"."The answer is ". $sastryNUM . $conc . " →". "FALSE(". $sastryNUM. " is not a perfect square)" . "</h1>";
        }
    }
}