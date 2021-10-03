<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
    public function get(){
        return view('welcome');

    }

    public function array_merge(){
        $a1= array("c"=>"red", "d"=>"green");
        $a2= array("red", "green" , "blue");
        print_r(array_merge($a1,$a2));

        }


    public function array_combine(){
        $a1= array(0, 1);
        $a2= array("red", "green");
        print_r(array_combine($a1,$a2));
        
    }

    public function array_map(){
        function myfunction($v)
        {
          return($v*$v);
        }
        
        $a=array(1,2,3,4,5);
        $result=array_map(myfunction($a));


    }


    public function array_column(){
        $a = array(
            array(
              'id' => 5698,
              'first_name' => 'Peter',
              'last_name' => 'Griffin',
            ),
            array(
              'id' => 4767,
              'first_name' => 'Ben',
              'last_name' => 'Smith',
            ),
            array(
              'id' => 3809,
              'first_name' => 'Joe',
              'last_name' => 'Doe',
            )
          );
          
          $last_names = array_column($a, 'last_name', 'id');
          print_r($last_names);

    }

    public function array_key(){

        $a=array("Volvo","BMW");
       if (array_key_exists(0,$a))
        {
         echo "Key exists!";
        }
       else
        {   
         echo "Key does not exist!";
        }

     }
    
}



