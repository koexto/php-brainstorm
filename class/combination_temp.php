<?php

class Combination
{
    protected $errors = array();
    protected $result = array();

    protected function addError($error)
    {
        $this->errors[] = $error;
    }

    protected function isErrors($string, $deep)
    {
        if (preg_match("/^[a-zA-Z0-9]+$/",$string) !== 1){
            $this->addError('Искомая строка содержит недопустимые символы.');
        }
        if (strlen($string) < $deep){
            $this->addError('Глубина выборки больше искомой строки.');
        }
    }

    function getErrors()
    {
        if (empty($this->errors)){
            echo 'Ошибки не обнаружены' . PHP_EOL;
        }else{
            foreach ($this->errors as $value) {
                echo $value . PHP_EOL;
            }
        }
    }

    function getResult()
    {
        return $this->result;
    }

    function findCombination($string, $deep)
    {
        $this->isErrors($string, $deep);
        if (empty($this->errors)){
            $this->find($string, '', $deep);
            return true;
        }else{
            return false;
        }
    }

    protected function find($string, $combination, $remainingDeep)
    {
        if ($remainingDeep != 0){
            for ($i = 0; $i < strlen($string); $i++){
                $newString = substr($string, 0, $i) . substr($string, $i+1);
                $this->find($newString, $combination . $string[$i], $remainingDeep - 1);
            }
        }else{
            $this->result[] = $combination;
        }
    }

    //n!/(n-m)!
    function placementsWithoutRepetitions($string, $m)
    {   
        $n = strlen($string);
        $difference = $n - $m;
        $factorial = 1;
        while ($n > $difference) {
            $factorial *= $n;
            $n--;
        }
        return $factorial;
    }
}

$string = readline('Строка символов: ');
$deep = (int)readline('Глубина выборки: ');
//$string = 'sdf1r232';
//$deep = '3';



$combination = new Combination;

if ($combination->findCombination($string, $deep)){
    $formula = $combination->placementsWithoutRepetitions($string, $deep);
    echo 'Количество размещений: ' . count($combination->getResult()) . PHP_EOL;
    echo 'По формуле: ' . $formula . PHP_EOL;
}else{
    $combination->getErrors();
}



