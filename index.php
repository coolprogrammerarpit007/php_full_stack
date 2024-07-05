<?php

    // variables in php

    $name = 'Arpit Mishra';
    $my_age = 25;
    $study_at = "Engineering";
    $is_married = false;


    $married_status = $is_married ? "Is Married" : "Not Married!";

    // echo $name . " is {$my_age} years old. he studied: {$study_at} and currently {$married_status}";


    // Arrays in PHP

    $my_array = [1,2,3,4,5,6];
    // print_r($my_array);

    $my_object = 
    [
        "name" => "Rajesh",
        "age"=>27,
        "is_married" => false,
        "income" => null
    ];

    // print_r($my_object);


    // conditional statment in PHP

    // if(2){
    //     echo "True Condition";
    // }


    // functions in php

    function add_numbers($num1,$num2){
        return $num1 + $num2;
    }

    // echo add_numbers(25,75);

    $friend = "Rohit";
    function hello(){
        $friend = "Vick Kaushal";
    }

    // hello();
    // echo $friend;


    // itteration in php


    // for($i = 0;$i < 25;$i++){
    //     echo $i . "<br>";
    // }


    // super globals in php
    // $Global , $POST,$GET,$SESSION,$COOKIE,$FILE in PHP

    // $SESSION variables are use to store information through multiple pages till browser closes.

    $number = 78;

    function test(){
        global $number;
        echo $number;
    }

    test();