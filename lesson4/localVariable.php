

<?php 
    $x=5; //globally variable

    function localVariable(){
        $y=10; //local variable
        // echo $x;
        echo $y;
    }

    localVariable();
    echo "\n,$x";
?>