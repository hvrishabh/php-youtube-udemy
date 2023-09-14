<?php

// with the help of if-else statement

// $n = 10;
// if($n > 0){

//     $div = 2 / $n;
//     echo $div;
// }else{
//     echo "enter a valid number";
// }


////////////////////////////////////////////////////

// $n = 0;

// try{
//    if($n <= 0){
//         throw new Exception("enter the valid number.");
//    }
//     $div = 2 / $n;
//     echo $div;

// }catch(Exception $e){
//     echo $e->getMessage();
// }

/////////////////////////////////////////
// Making a function of try-catch


// function division($n){


// try{
//    if($n <= 0){
//         throw new Exception("<br>enter the valid number.");
//    }
//     $div = 2 / $n;
//     echo "<br>". $div;

// }catch(Exception $e){
//     echo "The error is on line ".$e->getLine()."<br>";
//     echo $e->getMessage()."<br>";
//     echo "The Error is on the file named    ".$e->getFile()."<br>";
//     // echo $e->getCode();
// }finally{
//         echo "<br> Finally method runs always for try or catch both <br>";
//         echo "///////////////////////////////////////<br>";
// }

// }

// // division(2);
// division(0);
// division(4);


///////////////////////////////////////////////////
// Making our own Exception

class MyException extends Exception{
    function errorMessage(){
        $error = "<br>My Exception message is : " . $this->getMessage() . "<br>" . "Error on line no. " . $this->getLine();

        return $error;
    }

}

function division($n){


    try{
       if($n <= 0){
            throw new Exception("<br>enter the valid number.");
       }

       if($n == 3){
        throw new MyException("Number is 3.");
   }
        $div = 2 / $n;
        echo "<br>". $div;

    }catch(MyException $e){
        echo $e->errorMessage();
    }catch(Exception $e){
        echo $e->getMessage()."<br>";
    }finally{
            echo "<br> Finally method runs always for try or catch both <br>";
            echo "///////////////////////////////////////<br>";
    }

    }

    // division(2);
    division(0);
    division(3);