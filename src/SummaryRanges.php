<?php
    function summaryRanges($intArr) {
        $firstNumber;
        $result = array();

        for($i = 1; $i < count($intArr); $i++) {
            $current = $intArr[$i];
            $previous = $intArr[$i - 1];

            if($current - $previous == 1) {
                $firstNumber = isset($firstNumber) ? $firstNumber : $previous;
            } elseif(isset($firstNumber)) {
                $result[] = "$firstNumber->$previous";
                unset($firstNumber); 
            }
        }
        
        return $result;
    }
?>