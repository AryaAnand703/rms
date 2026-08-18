<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include 'head.php' ?>
<?php include 'sidebar.php'?> 
<?php include __DIR__ ."/db.php"?> 
<body  class="bg-black"  >
    <?php
    if (isset($_POST["submit"])){
        $name =$_POST["name"];
        $class =$_POST["class"];
        $roll =$_POST["roll"];
        $maths =$_POST["maths"];
        $science =$_POST["science"];
        $hindi =$_POST["hindi"];
        $eng =$_POST["english"];

        $querya = "INSERT INTO reasult ( name,roll,class,maths,english,hindi,science) VALUES ('$name', '$roll', '$class', '$maths', '$eng', '$hindi', '$science')";
        mysqli_query($connect, $querya);
        echo"sucess";
    }
    
    ?>
     <div class="flex justify-center items-center min-h-screen mt-[-150px] ">
     <form action="result.php" method="post" class="flex  flex-col border border-white text-white    border-[3px] rounded-3xl    p-4 ml-4 gap-2    ">
        <label for=""> Name</label>
        <input type="text" name="name" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class="flex flex-col">
                <label for="">Class</label>
                <input type="text" class="border border-black rounded" name="class" placeholder="Enter Class">
            </div>
            <div class="flex flex-col">
                <label for=""> Roll No</label>
                <input type="number" name="roll" class="border  border-black rounded border-[1px]" placeholder="Enter Roll No">
            </div>
        </div>
        <hr class="border-black border-[2px]">
        <h4 class="text-center bg-gray-200 p-2">subject detail</h4>
        <hr class="border-black border-[2px]">

        <label for="">Maths</label>
        <input type="text" name="maths" class="border  border-black rounded border-[1px]"placeholder="Enter Name">
        <label for="">English</label>
        <input type="text" name="english" class="border  border-black rounded border-[1px]" placeholder="Enter Name">
        <label for="">Hindi</label>
        <input type="text" name="hindi" class="border  border-black rounded border-[1px]" placeholder="Enter Name">
        <label for="">Science</label>
        <input type="text" name="science" class="border  border-black rounded border-[1px]" placeholder="Enter Name">
        <input type="submit" name="submit"  class="bg-blue-500 w-[150px] text-white py-2 px-4 rounded capitalize" value="save">
    </form>
    </div>
        
</body>

</html>