<?php include __DIR__ ."/db.php"?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-[#FFF7EB]" >
     <?php include 'head.php' ?>
    <?php include 'sidebar.php'?>
    <?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysqli_query($connect,"SELECT * FROM reasult WHERE id = '$id'");
        $row = mysqli_fetch_array($query);
    }
    ?>
    
        <div class="mb-3">
            <h2 class="text-center font-bold text-4xl text-gray-800  ">Vidya Vihar Institute of Technology</h2>
            <h4 class="text-center">Affiliated To BEU </h4>
            <h4 class="text-center">Phone: 1234567890 / Email: info@vidyavihar.edu.in</h4>
            <h4 class="text-center"> visiy :www.vvit.org</h4>
        </div>
        <div class="">
            <h3 class="text-center  text-lg text-gray-800  ">Academic Report</h3>
            <h4 class="text-center  text-lg text-gray-800  ">Acadmic Session: 2023-2024</h4>
            <h4 class="text-center font-bold text-lg text-gray-800 ">Student Class: <?php echo $row['class']; ?></h4>
        </div>
        <div class=" flex justify-center  m-4 p-4  w-full">
            <div class="">
                <div class=" flex justify-between ">
            <div class="">
                <h3>Student Name: <?php echo $row['name']; ?></h3>
                <h3>Mother's Name: <?php echo $row['mother']; ?></h3>
                <h3>Father's Name: <?php echo $row['father']; ?></h3>
                <h3>Address: <?php echo $row['address']; ?></h3>
                
            </div>
            <div class="">
                <h3>Student Roll No: <?php echo $row['roll']; ?></h3>
                <h3>Addmission No: <?php echo $row['id']; ?></h3>
                <h3>D.O.B: <?php echo $row['dateofbirth']; ?></h3>
            </div>
        </div>
    <table class="border border-1px border-black">
        <tr >
            <th class="border border-1px border-black">subject</th>
            <th class="border border-1px border-black">min Marks</th>
            <th class="border border-1px border-black">Max Marks</th>
            <th class="border border-1px border-black">Marks Obtained</th>
            <th class="border border-1px border-black">Remark</th>
        </tr>
        <tr>
            <td class="border border-1px border-black">Maths</td>
            <td class="border border-1px border-black">35</td>
            <td class="border border-1px border-black">100</td>
            <td class="border border-1px border-black"><?php echo $row['maths']; ?></td>
            <td class="border border-1px border-black"><?php echo ($row['maths'] >= 35) ? 'Pass' : 'Fail'; ?></td>
        </tr><tr>
            <td class="border border-1px border-black">Science</td>
            <td class="border border-1px border-black">35</td>
            <td class="border border-1px border-black">100</td>
            <td class="border border-1px border-black"><?php echo $row['science']; ?></td>
            <td class="border border-1px border-black"><?php echo ($row['science'] >= 35) ? 'Pass' : 'Fail'; ?></td>
        </tr><tr>
            <td class="border border-1px border-black">English</td>
            <td class="border border-1px border-black">35</td>
            <td class="border border-1px border-black">100</td>
            <td class="border border-1px border-black"><?php echo $row['english']; ?></td>
            <td class="border border-1px border-black"><?php echo ($row['english'] >= 35) ? 'Pass' : 'Fail'; ?></td>
        </tr><tr>
            <td class="border border-1px border-black">Hindi</td>
            <td class="border border-1px border-black">35</td>
            <td class="border border-1px border-black">100</td>
            <td class="border border-1px border-black"><?php echo $row['hindi']; ?></td>
            <td class="border border-1px border-black"><?php echo ($row['hindi'] >= 35) ? 'Pass' : 'Fail'; ?></td>
        </tr>
        <tr>
            <td colspan="3" class="text-center font-bold border border-1px border-black">Total</td>
            <td><?php echo $row['maths'] + $row['science'] + $row['english'] + $row['hindi']; ?></td>
            <td></td>
    </table> 
        </div>
        </div>
    
</body>
</html>