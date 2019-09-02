<?php 

echo "1. Work on the type Casting <br>";

$i=65;

echo "The ASCII character corresponding to $i is : ".chr($i)."<br><br>";   // is printing the character corresponding to the ASCII value

echo "2. Creating the multi-dimensional arrays  <br>              
               11 12 13 <br>

                14 15 16 <br>

                17 18 19 <br>";
				
$arr[0]=array(11,12,13);
$arr[1]=array(14,15,16);
$arr[2]=array(17,18,19);

echo "<br>The matrix 3X3 is .<br>";

for($i=0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $arr[$i][$j]." ";
	}
	
	echo "<br>";
}

echo "<br>3. Do the following patterns with the while, do- while and for iterators  <br>";

$row=3;

echo "<br> Using For Loop : <br>";
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$row-$i-1;$j++)
	{
		echo "&nbsp;&nbsp;";
	}
	
	for($k=0;$k<(2*$i)+1;$k++)
	{
		echo "* ";
	}
	
	echo "<br>";
}

echo "<br><br>Using while loop : <br>";
$i=0;
$row=3;
while($i<$row)
{
	$j=0;
	while($j<$row-$i-1)
	{
		echo "&nbsp;&nbsp;";
		$j++;
	}
	$k=0;
	while($k<(2*$i)+1)
	{
		echo "* ";
		$k++;
	}
	$i++;
	echo "<br>";
}
 
echo "4. Reverse pattern of the previous one : <br>";
echo "<br> Using For Loop : <br><br>";

$row=3;
$value=2;
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$i;$j++)
	{
		echo "&nbsp;&nbsp;";
	}
	
	for($k=0;$k<(2*$value)+1;$k++)
	{
		echo "* ";
	}
	$value--;
	echo "<br>";
}

echo "<br> Using While Loop : <br><br>";
$row=3;
$value=2;
$i=0;
while($i<$row)
{
	$j=0;
	while($j<$i)
	{
		echo "&nbsp;&nbsp;";
		$j++;
	}
	
	$k=0;
	while($k<(2*$value)+1)
	{
		echo "* ";
		$k++;
	}
	
	$i++;
	$value--;
	echo "<br>";
}

echo "<br>5. Step Pattern : <br>";

echo "Using For Loop : <br>";
$row=4;
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		echo "*  ";
	}
	echo "<br>";
}	

echo "Using While Loop : <br>";
$row=4;
$i=0;
while($i<$row)
{
	$j=0;
	while($j<=$i)
	{
		echo "* ";
		$j++;
	}
	$i++;
	echo "<br>";
}

echo "<br><br>6. Fibanacci 0,1,1,2,3,5,8...<br>";

$a=0;
$b=1;

$seq=7;

echo "<br> The seq is : "; 
for($i=0;$i<$seq;$i++)
{
	echo "$a, ";
	$c=$a+$b;
	$a=$b;
	$b=$c;
}
echo "...<br><br>";
	
echo " <br> 7. Reversing the array [11, 18,  4, 76] -> [76, 4, 18, 11]<br>";

$arr1=array(11,18,4,76);
echo "The array before reversing is : ";
for($i=0;$i<count($arr1);$i++)
{
	echo $arr1[$i]."&nbsp;";
}	

$k=0;
$reversed=array();
for($i=count($arr1)-1;$i>=0;$i--)
{
	$reversed[$k]=$arr1[$i];
	$k++;
}

echo "<br> The reversed arrray is : ";
for($i=0;$i<count($reversed);$i++)
{
	echo $reversed[$i]."&nbsp;";
}
echo "<br><br>";

echo "8. palindrome number";
echo "<br>To check whether a number is a palindrome or not : ";

$number=101;
$temp=$number;
$reversed=0;
while(floor($temp))
{
	$rem=$temp%10;
	$reversed=($reversed*10)+$rem;
	$temp=$temp/10;
}
//echo "<br> $reversed<br>";
if($reversed==$number)
{
	echo "<br>The number $number is palindrome <br><br>";
}

else
{
	echo "<br>The number $number is not palindrome <br><br>";
}

echo "9.  [10, 12, 13] double the each item in the array : <br>";
$arr1=array(10,12,13);

for($i=0;$i<count($arr1);$i++)
{
	$arr1[$i]=$arr1[$i]*2;
}

echo "The updated array is : ";
for($i=0;$i<count($arr1);$i++)
{
	echo "$arr1[$i]  ";
}

echo "<br><br>";

echo "10. find the value is present in the array or not Ex :12<br>";
$arr1=array(11,12,13,14,15);
$value=12;
$isPresent=0;
$pos=0;
for($i=0;$i<count($arr1);$i++)
{
	if($arr1[$i]==$value)
	{
		$isPresent=1;
		$pos=$i;
	}
}

if($isPresent==1)
{
	echo "The value is present at pos $pos <br><br>";
}

else
{
	echo "The value is not present <br><br>";
}

echo "<br>11. print the highest and lowest number in the array <br>";
$arr1=array(17,16,85,2,9);

echo "The array is : ";
for($i=0;$i<count($arr1);$i++)
{
	echo "$arr1[$i] ";
}

for($i=0;$i<count($arr1)-1;$i++)
{
	for($j=0;$j<count($arr1)-1;$j++)
	{
		if($arr1[$j]>$arr1[$j+1])
		{
			$temp=$arr1[$j];
			$arr1[$j]=$arr1[$j+1];
			$arr1[$j+1]=$temp;
		}	
	}
}
$min=$arr1[0];
$max=$arr1[count($arr1)-1];
echo "<br> The smallest value in an array is $min and the largest value in an array is $max <br><br>";

echo "12. Sort the array  in asc and dsc Ex: [11, 18,  4, 76] -> [4, 11, 18, 76] [11, 18,  4, 76] -> [76, 18,11 ,4]";
$arr1=array(11,18,4,76);
$ascending=$arr1;
$descending=$arr1;
for($i=0;$i<count($ascending)-1;$i++)
{
	for($j=0;$j<count($ascending)-1;$j++)
	{
		if($ascending[$j]>$ascending[$j+1])
		{
			$temp=$ascending[$j];
			$ascending[$j]=$ascending[$j+1];
			$ascending[$j+1]=$temp;
		}	
	}
}

echo "<br> The array in ascending order  : ";

for($i=0;$i<count($ascending);$i++)
{
	echo "$ascending[$i] ";
}

echo "<br>";

for($i=0;$i<count($descending)-1;$i++)
{
	for($j=0;$j<count($descending)-1;$j++)
	{
		if($descending[$j]<$descending[$j+1])
		{
			$temp=$descending[$j];
			$descending[$j]=$descending[$j+1];
			$descending[$j+1]=$temp;
		}	
	}
}

echo "The array in descending order  : ";

for($i=0;$i<count($descending);$i++)
{
	echo "$descending[$i] ";
}
echo "<br><br>";

echo "<br>14. Create an array <br>";

echo "a['fruits'] = [ 'apple', 'orange', 'kiwi' ];<br>";

echo "a['numbers'] = [1 , 2 , 3 ];<br>";

echo "a['hobbies'] = ['cricket', 'Music', 'tennis'];<br>";

echo "Print all values using the foreach*/<br>";

$a=array("apple"=>"1","orange"=>"2","kiwi"=>"3");
//$a['numbers'] = array(1 , 2 , 3 );
//$a['hobbies'] = array('cricket', 'Music', 'tennis');

foreach($a as $fruits=>$quantity)
{
	echo $fruits. "=>".$quantity."<br>";
}
?>
Do the below examples with the foreach iterator

13.   Check the multi-dimensional associate array.

foreach ( $array as $key => $value ){

                …….

}

Ex: $personal_details=array("name" => "Payal", "occupation" => "Engineer", age => 23, "country" => "India");

 

