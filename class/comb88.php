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
        }
    }
    protected function find($string, $combination, $remainingDeep)
    {
        echo 'function call' . PHP_EOL;
        if ($remainingDeep != 0){
            echo "if rDeep - $remainingDeep" . PHP_EOL;
            for ($i = 0; $i < strlen($string); $i++){
                echo "for $i" . PHP_EOL;
                $newString = substr($string, 0, $i) . substr($string, $i+1);
                echo "newString - $newString" . PHP_EOL;
                $this->find($newString, $combination . $string[$i], $remainingDeep - 1);
            }
        }else{
            echo "write combination - $combination" . PHP_EOL;
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
$combination->findCombination($string, $deep);
$formula = $combination->placementsWithoutRepetitions($string, $deep);
echo 'Количество размещений: ' . count($combination->getResult()) . PHP_EOL;
echo 'По формуле: ' . $formula . PHP_EOL;
$combination->getErrors();