<?php include 'data/db.php'?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php include 'store/head.php' ?>
<?php include 'store/sidebar.php'?> 
<body  class="bg-[#FFF7EB]"  >
    <?php
    if (isset($_POST["submit"])){
        $name =$_POST["name"];
        $class =$_POST["class"];
        $roll =$_POST["roll"];
        $maths =$_POST["maths"];
        $science =$_POST["science"];
        $hindi =$_POST["hindi"];
        $eng =$_POST["english"];
        $total = $maths+$eng+$science+$hindi;
        if ($total >= 350) {
            $grade = "A+";
        } elseif ($total >= 300) {
            $grade = "A";
        } elseif ($total >= 250) {
            $grade = "B+";
        } elseif ($total >= 200) {
            $grade = "B";
        } elseif ($total >= 150) {
            $grade = "C+";
        } else {
            $grade = "C";
        }
        $querya = "INSERT INTO reasult ( name,roll,class,maths,english,hindi,science,gread) VALUES ('$name', '$roll', '$class', '$maths', '$eng', '$hindi', '$science' ,'$grade')";
            mysqli_query($connect, $querya);
        if (mysqli_query($connect, $querya)) {

            echo "<script>
                alert('Data inserted successfully');
                window.location.href = 'result.php';
            </script>";
        exit;
        }
        }
    
    ?>
     <div class="flex justify-center  items-center  mt-[-150px] "> 
     <form action="result.php" method="post" class="flex  flex-col border border-black     border-[3px] rounded-3xl    p-4 ml-4 gap-2    ">
      
        <h4 class="text-center bg-gray-200 p-2">student detail</h4>
     <label for=""> Name</label>
        <input type="text" name="name" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class="flex flex-col w-[200px]">
                <label for="">Class</label>
                <select class="border border-gray-300 rounded-lg  py-1  W-[200px] focus:outline-none focus:ring-2 " name="class">
                    <optgroup label="B.tech">
                        <option value="B.Tech/CSE">CSE</option>
                        <option value="B.Tech/EEE">EEE</option>
                        <option value="B.Tech/ECE">ECE</option>
                        <option value="B.Tech/CIVIL">CIVIL</option>
                        <option value="B.Tech/ME">ME</option>
                    </optgroup>
                    <optgroup label="BBA/BCA">
                        <option value="BBA">BBA</option>
                        <option value="BCA">BCA</option>
                    </optgroup>
                </select>    
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
        <input type="submit" name="submit"  class="bg-blue-500 w-[150px] text-white py-2 px-4 rounded  self-center mt-4" value="Save">
    </form>
    </div>
        
</body>

</html>