<?php
echo "<h1>PHP - Practical Sheet : </h1>";

echo "<i><b>Ques.1 : Write a program to check student grade based on the marks using if-else statement. </i></b></br>";
echo "Ans :- </br>";

$stud_marks = 50;
print "Student Marks : $stud_marks"."</br>";
if($stud_marks >= 60)
{
    echo "First Division !</br>";
}
elseif($stud_marks >=45 and $stud_marks<=59)
{
    echo "Second Division</br>";
}
elseif($stud_marks >=33 and $stud_marks<=44)
{
    echo "Third Division</br>";
}
else
{
    echo "Fail Sorry !</br>";
}

echo "<p>";

echo "<i><b>Ques.2 : Write a program to show day of the week using switch case. </i></b></br>";
echo "Ans :- </br>";

$day = 1;
echo "Day Is : $day </br>";
switch($day)
{
    case 1:
        {
            echo "Monday </br>";
            break;
        }
    case 2:
        {
            echo "Tuesday </br>";
            break;
        }
    case 3:
        {
            echo "Wednesday </br>";
            break;
        }
    case 4:
        {
            echo "Thrusday </br>";
            break;
        }
    case 5:
        {
            echo "Friday </br>";
            break;
        }
    case 6:
        {
            echo "Saturday </br>";
            break;
        }
    case 7:
        {
            echo "Sunday </br>";
            break;
        }    
    default:
        {
            echo "Invalid Day ! </br>";
        }   
}

echo "<p>";

echo "<i><b>Ques.3 : Write a program to find factorial of a number. </i></b></br>";
echo "Ans :- </br>";

function factorial($given_num)
{
    if($given_num==0)
    {
        return 1;
    }
    else
    {
        return $given_num * factorial($given_num-1);
    }
}

$given_num = 5;
echo "Given Number : $given_num </br>";

if ($given_num < 0 )
{
    echo "Negative Numbers Don't Have Factorial !";
}
else
{
    $ans = factorial($given_num);
    echo "Factorial of $given_num is $ans .";
}

echo "<p>";

echo "<i><b>Ques.4 : Write a program to check number is Odd or Even. </i></b></br>";
echo "Ans :- </br>";

$your_num = 9;
echo "Number is : $your_num </br>";

if ($your_num % 2 == 0)
{
    print "$your_num is odd.";
}
else
{
    echo "$your_num is even.";
}

echo "<p>";

echo "<i><b>Ques.5 : Write a PHP program to check if a person is eligible to vote using UDF. </i></b></br>";
echo "Ans :- </br>";

$age = (int) readline ("Enter Your Age : ");
echo "You Enterd : $age. </br>";

if($age>=18)
{
    echo "Yeah Buddy You Can Vote !";
}
else
{
    echo "Sorry You Cannot Vote !";
}

echo "<p>";

echo "<i><b>Ques.6 : Write a program to find Largest and Smallest Number in Array. </i></b></br>";
echo "Ans :- </br>";

function Large_Small($arr)
{
    $n = count($arr);
    if($n==0)
    {
        return null;
    }

    $largest = $arr[0];
    $smallest = $arr[0];

    for($i = 1 ; $i < $n ; $i++)
    {
        if($arr[$i] > $largest)
        {
            $largest = $arr[$i];
        }
        if($arr[$i] < $smallest)
        {
            $smallest = $arr[$i];
        }
    }
    
    return array('Largest : '=> $largest , 'Smallest : '=>$smallest);
}

$numbers = [78,45,21,9,15];
$ans_array = Large_Small($numbers);

if ($ans == null)
{
    echo "Array Is Empty ! </br>";
}
else
{
    echo "Largest Num : ".$ans_array['Largest : ']."<br>";
    echo "Smallest Num : ".$ans_array['Smallest : ']."<br>";
}

echo "<p>";

echo "<i><b>Ques.7 : Write a Program to create given pattern with * using for loop. </i></b></br>";
echo "Ans :- </br>";

$pattern_size = 5;
echo "Size Of Pattern : $pattern_size </br>";

for($i = 1; $i <= $pattern_size; $i++)
{
    for($j = 1; $j<=$i ; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<p>";

echo "<i><b>Ques.8 :Write a program to calculate Electricity bill in PHP. </i></b></br>";
echo "Ans :- </br>";

$given_electricity_bill_1 = 50;
$given_electricity_bill_2 = 100;
$given_electricity_bill_3 = 100;
$given_electricity_bill_4 = 250;

if($given_electricity_bill_1<100)
{
    $for_first = $given_electricity_bill_1*3.50;
    echo "For First 50 Units : $for_first Rs. </br>";
}
if($given_electricity_bill_2<250)
{
    $for_second = $given_electricity_bill_2*4.00;
    echo "For Next 100 Units : $for_second Rs. </br>";
}
if($given_electricity_bill_3<250)
{
    $for_third = $given_electricity_bill_3*5.20;
    echo "For Next 100 Units : $for_third Rs. </br>";
}
if($given_electricity_bill_4<=250)
{
    $for_last = $given_electricity_bill_4*6.50;
    echo "For Units Above 250 : $for_last Rs. </br>";
}

echo "<p>";

echo "<i><b>Ques.9 : Write a program to Find Prime Number. </i></b></br>";
echo "Ans :- </br>";

function is_prime($num1)
{
    if($num1 <= 1)
    {
        return false;
    }
    
    for($i = 2; $i<=sqrt($num1); $i++)
    {
        if($num1 % $i === 0)
        {
            return false;
        }
    }

    return true;
}

$given_number = 5;
echo "Given Number : $given_number . <br>";

if(is_prime($given_number))
{
    print "$given_number is Prime Number. </br>";
}
else
{
    echo "$given_number is Not Prime Number. </br>";
}

echo "<p>";

echo "<i><b>Ques.10 : Write a simple calculator program in PHP using switch case. </i></b></br>";
echo "Ans :- </br>";

    print "1.Addition :- </br>";
    print "2.Subtraction :- </br>";
    print "3.Multiplication :- </br>";
    print "4.Division :- </br>";
    print "5.Exit :- </br>";

    $choice = (int) readline("Enter The Choice : ");

    switch($choice)
    {
    case 1:
        {
            $a = (int) readline("Enter Value For A : ");
            $b = (int) readline("Enter Value For B : ");
            $sum = $a+$b;
            echo("Addition : $sum </br>");
            break;
        }
    case 2:
        {
            $a = (int) readline("Enter Value For A : ");
            $b = (int) readline("Enter Value For B : ");
            $sub = $a-$b;
            echo("Subtraction : $sub </br>");
            break;
        }
    case 3:
        {
            $a = (int) readline("Enter Value For A : ");
            $b = (int) readline("Enter Value For B : ");
            $mul = $a*$b;
            echo("Multiplication : $mul </br>");
            break;
        }
    case 4:
        {
            $a = (int) readline("Enter Value For A : ");
            $b = (int) readline("Enter Value For B : ");
            $div = $a/$b;
            echo("Division : $div </br>");
            break;
        }
    case 5:
        {
            echo "Exiting...</br>";
            return; 
        }
    default:
        {
            echo "Invalid Option !</br>";
            break;
        }
    }
?>