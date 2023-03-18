<?php 

$name = $_GET["paragrafo"];

$p=$_GET["pass"];

echo $p;

echo strlen($name);

$par= str_replace('pass','****',$p);

echo '<br/>';
echo $par;
?>

<h1>ciao mi chiamo <?php echo $name; ?>
</h1>