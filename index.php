<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equation</title>
</head>
<body>
<form method="post">
    <input type="text" name="a" placeholder="a">
    <input type="text" name="b" placeholder="b">
    <input type="text" name="c" placeholder="c">
    <input type="submit" value="Result">
</form>
<?php
class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    function getterA()
    {
        return $this->a;
    }
    function getterB()
    {
        return $this->b;
    }
    function getterC()
    {
        return $this->c;
    }
    function getDiscriminant()
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $quadraticEquation = new QuadraticEquation($a,$b,$c);
    $root1 = 0;
    $root2 = 0;
    if ($quadraticEquation->getDiscriminant() > 0) {
        $root1 = (-$quadraticEquation->getterB() - sqrt($quadraticEquation->getDiscriminant())) / (2 * $quadraticEquation->getterA());
        $root2 = (-$quadraticEquation->getterB() + sqrt($quadraticEquation->getDiscriminant()))/ (2 * $quadraticEquation->getterA());
        echo 'root 1 = '.$root1.'<br/>';
        echo 'root 2 =   '.$root2;
    } else if ($quadraticEquation->getDiscriminant() === 0) {
        $root1 = -$quadraticEquation->getterB() / (2 * $quadraticEquation->getterA());
        echo 'root 1 = root 2 =  '.$root1;
    } else
        echo 'The equation has no root';
}
?>
</body>
</html>