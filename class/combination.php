<?php
/*
$MyString = 'abcdefg';
$MyNewString = substr($MyString, 0, 2) . substr($MyString, 2+1);
echo $MyNewString;*/

$result = array();

/**
 * 
 */
class Prog
{
    
    public $result = array();

    function CombinationSearching($MyString, $Combination, $RemainingDeep)
    {
        if ($RemainingDeep != 0){
            for ($i = 0; $i < strlen($MyString); $i++){
                $MyNewString = substr($MyString, 0, $i) . substr($MyString, $i+1);
                $this->CombinationSearching($MyNewString, $Combination . $MyString[$i], $RemainingDeep - 1);
            }
        }else{
            echo $Combination.PHP_EOL;
            $this->result[] = $Combination;

    }
}

}

$res = new Prog;

$res->CombinationSearching('12345', '', 3);
var_dump($res->result);