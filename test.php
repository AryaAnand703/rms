<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="text" name="total" placeholder="Enter total marks">
        <input type="submit" value="Submit">
    </form>
    <?php
    
    
     if($total<=400){
                    echo "A+";
                }elseif($total<=250){
                    echo "A";
                }elseif($total<=200){
                    echo "B";
                }elseif($total<= 100){
                    echo "C+";
                }else{
                    echo "C";
                } 
            ?>
    
</body>
</html>