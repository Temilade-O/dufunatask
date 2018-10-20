<?php
/*quiz 1- A brief description of Me*/
echo "<br> Quiz1<br>";
    echo "I am Temilade, A Participant of Dufuna-Fem Camp<br>";
    echo "I'm skilled in business development and project management<br>"; 
    echo "The Past 6 weeks has been great, exciting and challenging<br>" ;
    echo "I'm honing my skill as a software developer<br>";
    echo "Thanks to Cotta&Cush, AHK Nigeria for this great opportunity<br><br><br>";

    /*quiz-2 Create 3 different variables with names of your choice, assign numbers to them and
    perform the following operations:...*/
    echo "<br> Quiz2<br>";
    $k=50;
    $j=60;
    $l=70;

    $m= $k*$l;
    $n= $j-$k;
    $o= $l/$j;

    echo "<br>The product of K and L is "."$m";
    echo "<br>The difference between J and K is "."$n";
    echo "<br>The division of L by J is "."$o";

    echo "<br>";
    /*quiz 3-- Create a variable that stores the temperature of the day.
If the temperature is less than or equal 20 degree Celsius, Display “It is really cold today”
If the temperature is greater than 20 degree Celsius but less than 30 degree Celsius, Display “The weather is just perfect.”
If the temperature is greater than or equal 30 degree Celsius but less than 40 degree Celsius, Display “It’s so hot today.”
If the temperature is greater than or equal 40 degree Celsius, Display “Am I in the Sahara Desert?!”*/
echo "<br> Quiz3<br>";
    $t = 20;
    if ($t <=20 ){
    echo "It is really cold today.<br>";
    } else if ($t>20 && $t<30){
    echo "The weather is just perfect.<br>";
    } else if ($t>=30 && $t<40){
        echo "It’s so hot today.<br>";
    } else if ($t>=40){
    echo "Am I in the Sahara Desert?!.<br>";
    }else {
        echo "I dont know what temperature it is. <br>";
    };
      
    

/*quiz-4 Write a PHP program that displays every number between 100 and 150 each on a
    new line using a loop (for loop or while loop) */
    echo "Quiz 4<br>";
        for ($k =101; $k < 150; $k++) {
        echo " $k <br>";
        }
    
        echo "<br>";
/*quiz-4 Write a PHP program that displays all every number between 0 and 50 each on
a new line using a loop (for loop or while loop)*/

   for ($m =1; $m < 50; $m++){
    echo " $m <br>";
    }

/*quiz 5 -Create two arrays. The first should store the first name of three people, the second should store respective hobbles. */
echo "<br> Quiz5<br>";
$name = array("Temilade", "Temitope", "Omotolani");
$hobby =array(" travelling", " cooking", "jumpimg");
for($i=0; $i<count($name);$i++)
 {
    echo "My name is $name[$i]. I love $hobby[$i]<br>";
}


/*quiz 6- */

echo "<br> Quiz6<br>";
$a = 34;
$b = 52;
function myTest() {
global $a, $b;
$m = $a + $b;
$n = $a * $b;
}
myTest();
echo " The sum of a and b is "."$m<br>";
echo " The sum of a and b is "."$n<br>";
<br>;
