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
        if (preg_match("/^[a-zA-Z0-9]+$/", $string) !== 1){
            $this->addError('Искомая строка содержит недопустимые символы.');
        }
        if (preg_match("/^[0-9]+$/", $deep) !== 1){
            $this->addError('Неверно указана глубина выборки');
        }
        if (intval($deep) === 0){
            $this->addError('Неверно указана глубина выборки');
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

    //проверяем входные данные, запускаем поиск размещений, проверяем результат 
    function findCombination($string, $deep)
    {
        $this->isErrors($string, $deep);
        if (!empty($this->errors)){
            return false;
        }

        $this->find($string, '', $deep);

        if ($this->formula($string, $deep) !== count($this->result)){
            $this->addError('Проверка ответа не пройдена');
            return false;
        }
        return true;
    }

    //рекурсивный поиск размещений
    protected function find($string, $combination, $remainingDeep)
    {
        if ($remainingDeep !== 0){
            for ($i = 0; $i < strlen($string); $i++){
                $newString = substr($string, 0, $i) . substr($string, $i+1);
                $this->find($newString, $combination . $string[$i], $remainingDeep - 1);
            }
        }else{
            $this->result[] = $combination;
        }
    }

    //n!/(n-m)!
    function formula($string, $m)
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
$deep = readline('Глубина выборки: ');
//$string = 'sdf1r232';
//$deep = '3';

$combination = new Combination;

if ($combination->findCombination($string, $deep)){
    echo 'Количество размещений: ' . count($combination->getResult()) . PHP_EOL;
}else{
    $combination->getErrors();
}



