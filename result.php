<?php include 'data/db.php'?> 
<?php include 'store/link.php' ?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<?php include 'store/head.php' ?>
<?php include 'store/sidebar.php'?> 
<body  class="bg-[#FFF7EB]"  >
    <?php
    if (isset($_POST["submit"])){
        $name =$_POST["name"];
        $class =$_POST["class"];
        $roll =$_POST["roll"];
        $father =$_POST["father"];
        $mother =$_POST["mother"];
        
        $address =$_POST["address"];
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
        $querya = "INSERT INTO reasult ( name,roll,class,father,mother,address,maths,english,hindi,science,gread) VALUES ('$name', '$roll', '$class', '$father', '$mother', '$address', '$maths', '$eng', '$hindi', '$science' ,'$grade')";
            // mysqli_query($connect, $querya);
        if (mysqli_query($connect, $querya)) {
        exit;
        }
        }
    
    ?>
     <div class="flex justify-center  items-center  mt-[-150px] "> 
     <form action="result.php" method="post" class="flex  flex-col border border-black border-[3px] rounded-3xl p-4 ml-4 gap-2 ">
        <h4 class=" font-bold text-l  p-2 flex gap-1"><svg class="text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
  <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
</svg> Insert Student Detail</h4>
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class=" flex flex-col w-[200px]">
                <label for="">Student Full Name*</label>
                <input type="text" name="name" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
            </div>
            <div class="flex flex-col">
                <label for=""> Roll No*</label>
                <input type="number" name="roll" class="border  border-black rounded border-[1px]" placeholder="Enter Roll No">
            </div>
        </div>
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class="flex flex-col w-[200px]">
                <label for="">Class/branch*</label>
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
            <div class="flex flex-col w-[200px]">
                <label for="">Semester/Term*</label>
                <select class="border border-gray-300 rounded-lg  py-1  W-[200px] focus:outline-none focus:ring-2 " name="class">
                        <option value="BBA">1st Sem</option>
                        <option value="BCA">2nd Sem</option>
                        <option value="BCA">3rd Sem</option>
                        <option value="BCA">4th Sem</option>
                        <option value="BCA">5th Sem</option>
                        <option value="BCA">6th Sem</option>
                        <option value="BCA">7th Sem</option>
                        <option value="BCA">8th Sem</option>
                </select>    
            </div>
        </div>
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class=" flex flex-col w-[200px]">
                <label for="">Mother Name*</label>
                <input type="text" name="mother" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
            </div>
            <div class="flex flex-col">
                <label for=""> Father Name*</label>
                <input type="text" name="father" class="border  border-black rounded border-[1px]" placeholder="Enter Roll No">
            </div>
        </div>
         <div class="flex flex-col-2 gap-3 mb-4">
            <div class=" flex flex-col w-[200px]">
                <label for="">date of birth</label>
                <input type="date" name="dateofbirth" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
            </div>
            <div class="flex flex-col">
                <label for=""> address</label>
                <input type="text" name="address" class="border  border-black rounded border-[1px]" placeholder="Enter Roll No">
            </div>
        </div>
        <hr class="border-black border-[2px]">
        <h4 class="text-center bg-gray-200 p-2 font-bold text-xl"> Subject Marks (Max 100 Marks Each)</h4>
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