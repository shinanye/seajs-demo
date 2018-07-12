<?php
    // $arr = [1,45,69,9,12,2,6,0,10];
    // sort($arr);
    // $arr1 = [];
    
    // $count = ceil(count($arr)/2);
    // $len = count($arr);
    // for($i=0;$i<$count;$i++){
    //     array_push($arr1,$arr[$len-1]);
    //     array_push($arr1,$arr[$i]);
    //     $len--;
    // }

    // if(count($arr)%2===1){
    //     unset($arr1[count($arr1)-1]);
    // }


    // for ($i = 0; $i < $len-1; $i++) {
    //     for ($j = 0; $j < $len-$i-1; $j++) {
    //         if ($arr[$j] > $arr[$j+1]) {
    //             $temp = $arr[$j];
    //             $arr[$j] = $arr[$j+1];
    //             $arr[$j+1] = $temp;
    //         }
    //     }
    // }

    // var_dump($arr);

    function Fibonacci($n){ 
        if ($n <= 0) { 
            return 0;  
      } elseif ($n == 1) { 
            return 1;      
   } else {   
          return Fibonacci($n - 1) + Fibonacci($n - 2); 
        } 
    } 

    $num=3;//n
    $sum=0;//合
    for($i=1;$i<=$num;$i++){
        $sum += Fibonacci($i);
    }
  

  