<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
<div class="container bg-primary" >
  <br>
  <hr/>
  
  <h1 class="heading"><marquee behavior="alternate"><img src="image\PHP-logo.svg-removebg-preview.png" width="100px">"My First Php Script!"</marquee></h1>
  <br>
  <hr/>
<?php
echo "<h1>Syntax</h1>";
echo "My first PHP script!";
?>
<br/>
<hr/>
<?php
$txt = "PHP";
echo "I love $txt,";
echo "PHP is so much fun!"
?>
<br/>
<hr/>
<?php
$string = 'Hello world!';
$replace = 'world';
$new = 'Every Body';
echo str_replace($replace, $new, $string);
?>
<br/>
<hr/>
<?php
echo "<h2>REPLACE</h2>";
$string = 'My name is unknown';
$replace = 'unknown';
$new = 'Sonam Dendup';
echo str_replace($replace, $new, $string);
?>
<br/>
<hr/>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 
<br/>
<hr/>
 <?php
$t = date("H");
echo $t;

if ($t < "20") {
  echo "Have a good day!";
}
?>
<br/>
<hr/>
<?php
echo "<h1>Print and echo</h1>";
$cars = array("car1" => array("Volvo", "Bolero", "Prado"),
"car2" => "BMW",
"car3" => "Toyota");
echo "<pre>";
print_r($cars['car1']);
print_r($cars['car2']);
print_r($cars['car3']);
//echo "</pre>";
?>
<br/>
<hr/>
<?php
echo "<h1>Variables</h1>";
$txt = "Monger";
echo " You are from " . $txt . "?";
?>
<?php
$txt = "Located";
echo "Where is Monger" . $txt . "?";
?>
<?php
$txt = "Pig";
echo "You are looking like a" . $txt . "!";
?>
<br/>
<hr/>
<?php
$x = 5 + 10;
$y = 4 + 12;
echo $x + $y;
?>
<br/>
<hr/>
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>
<br/>
<hr/>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello Everybody!<br>";
echo "I'm about to learn PHP!<br>";
echo "Learning ", "PHP", "will", "surely ", "help", "you", "while", "developing", "website.";
?>
<br/>
<hr/>
<?php
$txt1 = "Learn PHP";
$txt2 = "Through";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "W3school " . $txt2 . "<br>";
echo $x + $y;
?>
<br/>
<hr/>
<?php
echo "<h1>PHP string</h1>";
$x = "While learning you should always explore new things!";
$y = 'Get help grom google rimpochoe to learn more about it!';

echo $x;
echo "<br>";
echo $y;
?>
<br/>
<hr/>
<?php
echo "<h1>PHP Integer</h1>";
$x = 5985;
var_dump($x);
?>
<br/>
<hr/>
<?php
echo "<h1>PHP Float</h1>";
$x = 10.365;
var_dump($x);
?>
<br/>
<hr/>
<?php
echo "<h1>strlen() - Return the Length of a String</h1>";
echo strlen("Strlen used here!"); // outputs 12
?>
<br/>
<hr/>
<?php
echo "<h1>str_word_count() - Count Words in a String</h1>";
echo str_word_count("str_word_count used here!"); // outputs 2
?>
<br/>
<hr/>
<?php
echo "<h1>strrev() - Reverse a String</h1>";
echo strrev("strrev used here!"); // outputs !dlrow olleH
?>
<br/>
<hr/>
<?php
echo "<h1>strpos() - Search For a Text Within a String</h1>";
echo strpos("Hello world!", "world"); // outputs 6
?>
<br/>
<hr/>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
<br/>
<hr/>
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<br/>
<hr/>
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>
<br/>
<hr/>
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
<br/>
<hr/>
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
<br/>
<hr/>
<?php
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?>
<br/>
<hr/>
<?php
define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING;
myTest();
?>
<br/>
<hr/>
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<br/>
<hr/>
<?php
echo "<h2>Operators</h2>";
echo "Which one is your favorite color?";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
print_r($x['a']);
?> 
<br/>
<hr/>
<?php
echo "Is given X equal to Y?";
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
echo "No!";
?>  
<br/>
<hr/>
<?php
echo "<h1>If elseif statement!</h1>";
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "<h1>Have a good day!</h1>";
} else {
  echo "Have a good night!";
}
?>
<br/>
<hr/>
<?php
echo "<h1>Min() and Max()</h1>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
?> 
<br>
<hr/>
<?php
echo "<h1>Round()</h1>";
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
?>
<br>
<hr/>
<?php
echo "<h1>Random or rand()</h1>";
echo(rand());
?>
<br>
<hr/>
<?php
echo "<h1>Switch</h1>";
$colors = array("red", "blue", "green");

foreach($colors as $key =>$value){
test($value);
}
echo $key;
echo $value;
function test($color){
switch ($color) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
}
?>
<br>
<hr/>
<?php
echo "<h1>While loop</h1>";
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>
<br>
<hr/>
<?php
echo "<h1>Another while loop Ex:</h1>";
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<hr/>
<?php
echo "<h1>Do while loop Ex:</h1>";
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of Do while loop </h1>";
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of For loop</h1>";
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of For loop</h1>";
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of foreach loop</h1>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of foreach loop</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of Break loop</h1>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of continue loop</h1>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of Function</h1>";
function familyName($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName("Sonam", "1975");
familyName("Penjor", "1978");
familyName("Kinzang", "1983");
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of function</h1>";
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 13 = " . sum(7,13) . "<br>";
echo "2 + 4 = " . sum(2,4);
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of Array</h1>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of indexed array</h1>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of indexed array</h1>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>
<br>
<hr/>
<?php
echo "<h1>Ex; of Associative array</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: of associative array</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of Multudimensional</h1>";
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
<br>
<hr/>
<?php
echo "<h1>Another Ex: Multidimenxional</h1>";
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<br>
<hr/>
<?php
echo "<h1>Ex: of sorting array</h1>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
<br>
<hr/>
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<br>
<hr/>
</div>
</body>
</html>

