<?php

$a= array();
$b = readline('Enter the no: ');
for($i=0;$i<=$b;$i++){
    $input = readline('Enter the no: ');
    array_push($a,$input);
}
print_r($a);
echo count($a);


$a=array(3,8,9,3,1,7,2,8);
$em=array();
for($i=0;$i<100;$i++)
{
     if(in_array($i,$a))
       {
          array_push($em,$i);
       }
}
  print_r($em);



$a="i am a string";
$b=strlen($a);

for($i=0;$i<$b;$i++)
  {
      $count=1;
    $s=$a[$i];
    for($j=0;$j<$b;$j++)
    {
       
       if($i==$j)
       {
           continue;
       }

      elseif($s==$a[$j])
       {
           $count++;
       }

       
    }
  print_r('count of'.$s.'is' . $count ."\n");


   }

 

$a=array(1,4,8,9,2,5,7,-1,-7,17);
$length=count($a);


for($i=0;$i<$length; $i++)
{
    $d=$a[$i];
    
    for($j=$i+1;$j<=$length;$j++)
    {
       
        if($d+$a[$j]==10)
        {
             echo  "[" . $d ."," . $a[$j]."]" ;
             echo "\n";
        }
    }
}



?>