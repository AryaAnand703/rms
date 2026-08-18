<?php include __DIR__ ."/db.php"?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body > 
    <?php include 'head.php' ?>
    <?php include 'sidebar.php'?>
    <div class=" flex justify-center items-center min-h-screen  mt-[-300px]">
        
        <table class="border border-black border-[2px]">
            <tr class="border border-black border-[2px]">
                <th class="border border-black border-[2px]">Id</th>
                <th class="border border-black border-[2px]">Name</th>
                <th class="border border-black border-[2px]">Roll No</th>
                <th class="border border-black border-[2px]">Class</th>
                <th class="border border-black border-[2px]">Total</th>
                <th class="border border-black border-[2px]">Grade</th>
                <th class="border border-black border-[2px]">Action</th>
            </tr>
            <?php
            $query = mysqli_query($connect,"SELECT * FROM reasult");
            while($row = mysqli_fetch_array($query)){
                $id = $row["id"];
                $name = $row['name'];
                $roll = $row['roll'];
                $class = $row['class'];
                $maths = $row['maths'];
                $english = $row['english'];
                $hindi = $row['hindi'];
                $science = $row['science'];
                $total = $maths+$english+$science+$hindi;
            ?>
            <tr class="border border-black border-[2px]">
                <td class="border border-black border-[2px]"><?php echo $id?></td>
                <td class="border border-black border-[2px]"><?php echo $name?></td>
                <td class="border border-black border-[2px]"><?php echo $class?></td>
                <td class="border border-black border-[2px]"><?php echo $roll?></td>
                <td class="border border-black border-[2px]"><?php echo $total?></td>
                <td class="border border-black border-[2px]"><?php 
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
                ?></td>
                <td class="border border-black border-[2px]">
                    <a href="edit.php?id=<?php echo $row['id']?>" class="text-blue-500 hover:text-blue-700">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']?>" class="text-red-500 hover:text-red-700 ml-2">Delete</a>
                </td>
            </tr>
            <?php
            }
            ?>
    </div>


</body>
</html>