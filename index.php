<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $toantu = $_POST["toantu"];
}
class Calculator{
//    function __construct($number1, $number2,$toantu)
//    {
//        $this->number1 = $number1;
//        $this->number2 = $number2;
//        $this->toantu = $toantu;
//    }
//    function add($number1, $number2){
//        $result = $number1+$number2;
//        return $result;
//
//    }
//    function tru($number1, $number2){
//        $result = $number1-$number2;
//        return $result;
//    }
//    function nhan($number1, $number2){
//        $result = $number1*$number2;
//        return $result;
//    }
//    function chia($number1, $number2){
//        $result = $number1/$number2;
//        return $result;
//    }
//    function tinhtoan($number1, $number2, $toantu){
//        if ($toantu =="+"){
//            $result = $this->add($number1, $number2);
//        }
//        if ($toantu =="-"){
//            $result = $this->tru($number1, $number2);
//        }
//        if ($toantu =="*"){
//            $result = $this->nhan($number1, $number2);
//        }
//        if ($toantu =="/"){
//            $result = $this->chia($number1, $number2);
//        }
//        return $result;
//    }
    function __construct($number1, $number2, $toantu)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->toantu = $toantu;
    }
    function add(){
        $result = $this->number1+$this->number2;
        return $result;
    }
    function tru(){
        $result = $this->number1-$this->number2;
        return $result;
    }
    function nhan(){
        $result = $this->number1*$this->number2;
        return $result;
    }
    function chia(){
        $result = $this->number1/$this->number2;
        return $result;
    }
    function tinhtoan($toantu){
        if ($toantu =="+"){
            $result = $this->add();
        }
        if ($toantu =="-"){
            $result = $this->tru();
        }
        if ($toantu =="*"){
            $result = $this->nhan();
        }
        if ($toantu =="/"){
            $result = $this->chia();
        }
        return $result;
    }
    function checkNum (){
        if($this->number2==0 && $this->toantu =="/"){
            throw new Exception("Loi 0");
        }
//        if ($this->number1 ==0 && $this->number2 ==0 && $this->toantu =="/"){
//            throw new Exception("Loi 0 0");
//        }
    }
}
$cal = new Calculator($number1, $number2, $toantu);

?>
<form action="" method="post">
    <input type="number" name="number1">
    <select name="toantu" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="number2">
    <span>Ket Qua:
        <?php try {
            $cal->checkNum();
            echo $cal->tinhtoan($toantu);
            }
            catch(Exception $message){
                echo $message->getMessage();
            }
        ?>
    </span>
    <br>
    <button type="submit">Tinh</button>
</form>

</body>
</html>
