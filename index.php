<?php


/////////////////////////////////////// 1/  //////////////////////////////////////-function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2024;
year_check($my_year);



/////////////////////////////////////// 2/  //////////////////////////////////////-
function season_check($temp)
{
   if ($temp <= 20)
      print("we are in winter");
  
   else
      print("the season is summer");
}
$temp = 20;
season_check($temp);


/////////////////////////////////////// 3/  //////////////////////////////////////-

function best($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo best(1, 2)."\n";
echo best(3, 2)."\n";
echo best(2, 2)."\n";   


/////////////////////////////////////// 4/  //////////////////////////////////////-
function test($n) 
{
     $x = 100;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test(101)."\n";



/////////////////////////////////////// 5/  //////////////////////////////////////-

function sum_num($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(sum_num(30, 0));
var_dump( sum_num(25, 5));
var_dump( sum_num(20, 30));
var_dump(sum_num(20, 25));  


/////////////////////////////////////// 6/  //////////////////////////////////////-

function testing($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10){
      echo $x;
   }        
}

testing(103);




/////////////////////////////////////// 7/  //////////////////////////////////////-

function test($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));


/////////////////////////////////////// 8/  //////////////////////////////////////-
function test($s) 
{
  if (strlen($s) > 2 && substr($s,0, 2) == "if")
            {
                return $s;
            }
      return "if ".$s;
}

echo test("if else")."\n";
echo test("else")."\n";  

/////////////////////////////////////// 9/  //////////////////////////////////////-
function test($s, $n) 
{
   return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo test("Python", 1)."\n";
echo test("Python", 0)."\n";
echo test("Python", 4)."\n";

/////////////////////////////////////// 10  ///////////////////////////////////////

function test($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test(100, 199));
var_dump(test(250, 300));
var_dump(test(105, 190));


/////////////////////////////////////// 11  ///////////////////////////////////////

function test($x, $y) 
{
   return ($x <= 100 || $y >= 200) || ($y <= 100 || $x >= 200);
}

var_dump(test(20, 84));
var_dump(test(14, 50));
var_dump(test(11, 45));
var_dump(test(75, 100));

/////////////////////////////////////// 12  ///////////////////////////////////////

function test($x, $y, $z) 
{
  $max = max($x, max($y, $z));
  return $max;
}

echo test(1, 2, 3433)."\n";
echo test(1, 3, 2)."\n";
echo test(1, 1, 1)."\n";
echo test(1, 2, 2)."\n";


/////////////////////////////////////// 13  ///////////////////////////////////////

function test($x, $y) 
{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   return $val == $val2 ? 0 : ($val < $val2 ? $x : $y);
}

echo test(78, 95)."\n";
echo test(95, 95)."\n";
echo test(99, 70)."\n";



/////////////////////////////////////// 14  ///////////////////////////////////////


function test($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

var_dump(test(5, 4));
var_dump(test(4, 3));
var_dump(test(1, 4));

?>