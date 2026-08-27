<?php include __DIR__ ."/db.php"?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View detail</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
     <?php include 'head.php' ?>
    <?php include 'sidebar.php'?>
    <div class="">
        <div>
            <h2 class="text-center ">Vidya Vihar Institute of Technology</h2>
            <h4 class="text-center">Affiliated To BEU </h4>
            <h4 class="text-center">Phone: 1234567890 / Address: 123 Main Street</h4>
            <h4 class="text-center">Email: info@vidyavihar.edu.in</h4>
        </div>
    <form action="edit.php" method="post" class="flex  flex-col border border-black border-[3px] rounded-3xl p-4 ml-4 gap-2 ">
        
        
        
        <label for=""> Name</label>
        <input type="text" name="name" placeholder="Enter Name" class="border  border-black rounded border-[1px]" >
        <div class="flex flex-col-2 gap-3 mb-4">
            <div class="flex flex-col w-[200px]">
                <label for="">Class</label>
                <select class="border border-gray-300 rounded-lg  py-1  W-[200px] focus:outline-none focus:ring-2 " name="class">
                    <optgroup label="B.tech">
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ECE">ECE</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="ME">ME</option>
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