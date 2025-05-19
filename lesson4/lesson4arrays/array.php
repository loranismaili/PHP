<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php  
        // $sport1="football";
        // $sport2="Basketball";
        // $sport3="Handball";
        // $sport4="Volleyball";

        // $sports= array('Football','Basketball','Handball','Volleyball')

        $sports = ['Football','Basketball','Handball','Volleyball'];
        // echo $sports[0];
        // echo end($sports);

        // echo count($sports)

        // for($i=0,$i < 4,$i++){
        //     echo $sports[$i],"\n";
        // }

        $len = count($sports);

        for($i = 0; $i < $len; $i++){
            echo $sports[$i],"\n";
        }
    ?>



</body>
</html>