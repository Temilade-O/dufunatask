<?php
    /*Task 1- A brief description of Me*/
    echo "I am Temilade, A Participant of Dufuna-Fem Camp<br>";
    echo "I'm skilled in business development and project management<br>"; 
    echo "The Past 6 weeks has been great, exciting and challenging<br>" ;
    echo "i'm honing my skill as a software developer";
    echo "Thanks to Cotta&Cush, AHK Nigeria for this great opportunity";



    
    $name= 'Temi';
    $age= 12;
    $job= "Developer";
   $statement= "hello world <br>"."My name is <br>".$name ."<br>You are". $age;
    echo $statement. "<br>";

    define("MINSIZE", 200);

    echo MINSIZE. "<br>";


$x=30;
$y=15;

if ($x==$y){
    echo "X is equal to Y";
}else if($x==30){
    echo "X==30";
}else { 
    echo "X is not equal to Y";
}
        

$menu = "smoothie";
switch ($menu){
    case 'smoothie':
    echo "i want smoothie.";
break;
    case'cake':
    echo "serve me cake";
default:
    echo "serve me water"; 
break;
}
echo "send the bill";

$i = 100;
while( $i <150) {
$i++;

if( $i == 150 )break;
}
echo ("the number i = $i" );

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
echo "Key=" . $x . ", Value=" . $x_value;
echo "<br>";
}

function writeMessage() {
    echo "You are really a nice person, Have a nice time!";
    }
 writeMessage();

 function addFunction($num1, $num2) {
    $sum = $num1 + $num2;
    echo "Sum of the two numbers is : $sum";
    }
    addFunction(30, 20);
    echo "<br><br>";
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
        }
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);

        $x = 5; // local scope
        function myTest() {
                       
            }
            myTest();
            echo "<p>Variable x inside function is: $x</p>";

$x = 5;
$y = 10;
function myFest() {
global $x, $y;
$y = $x + $y;
}
myFest();
echo $y; // outputs 15

echo " <br>";

function myYest() {
    static $x = 0;
    echo $x;
    $x++;
    }
    myYest();
    myYest();
    myYest();
