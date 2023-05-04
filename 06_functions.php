<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Functions have their own local scope as opposed to global scope
*/

function registerUser()
{
  echo 'User has been registered!';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User ${username} has been registered!";
}

// Pass in an argument
registerUser2('Brad');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

//global variables
$y = 1;

function example($v) {
    global $y; // "catching" variable from global scope
    $x = 3;
    return $y + $x + $v;
}
echo '<br>';
echo example(10);
echo '<br>';
// ___________________

$sum = add(5, 5);
echo $sum;

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();

// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);
