<?php include 'data/db.php' ?>
<?php include 'store/link.php' ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<?php include 'store/head.php' ?>
<?php include 'store/sidebar.php' ?>

<body class="bg-[#FFF7EB]">

    <?php
    $id = $_GET['id'];

    $query = "SELECT * FROM reasult WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($result);
    ?>

    <div class="flex justify-center  items-center  mt-[-150px] ">
        <form action="result.php" method="post"
            class="flex  flex-col border border-black border-[3px] rounded-3xl p-4 ml-4 gap-2 ">
            <h4 class=" font-bold text-l  p-2 flex gap-1">
                <svg class="text-blue-500" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                    <path
                        d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z" />
                </svg> Insert Student Detail
            </h4>
            <div class="flex flex-col-2 gap-3 mb-4">
                <div class=" flex flex-col w-[200px]">
                    <label for="">Student Full Name*</label>
                    <input type="text" name="name" placeholder="Enter Name" value="<?php echo $data['name'] ?>"
                        class="border  border-black rounded border-[1px]">
                </div>
                <div class="flex flex-col">
                    <label for=""> Roll No*</label>
                    <input type="number" name="roll" value="<?php echo $data['roll'] ?>"
                        class="border  border-black rounded border-[1px]" placeholder="Enter Roll No">
                </div>
            </div>
            <div class="flex flex-col-2 gap-3 mb-4">
                <div class="flex flex-col w-[200px]">
                    <label for="">Class/branch*</label>
                    <select class="border border-gray-300 rounded-lg  py-1  W-[200px] focus:outline-none focus:ring-2 "
                        name="class" value="<?php echo $data['class'] ?>">
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
                    <select class="border border-gray-300 rounded-lg  py-1  W-[200px] focus:outline-none focus:ring-2 "
                        name="class">
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
                    <input type="text" name="mother" placeholder="Enter Name"
                        class="border  border-black rounded border-[1px]" value="<?php echo $data['mother'] ?>">
                </div>
                <div class="flex flex-col">
                    <label for=""> Father Name*</label>
                    <input type="text" name="father" class="border  border-black rounded border-[1px]"
                        placeholder="Enter Roll No" value="<?php echo $data['father'] ?>">
                </div>
            </div>
            <div class="flex flex-col-2 gap-3 mb-4">
                <div class=" flex flex-col w-[200px]">
                    <label for="">date of birth</label>
                    <input type="date" name="dateofbirth" placeholder="Enter Name"
                        class="border  border-black rounded border-[1px] value=" <?php echo $data['birth'] ?>"">
                </div>
                <div class="flex flex-col">
                    <label for=""> address</label>
                    <input type="text" name="address" class="border  border-black rounded border-[1px]"
                        placeholder="Enter Roll No" value="<?php echo $data['address'] ?>">
                </div>
            </div>
            <hr class="border-black border-[2px]">
            <h4 class="text-center bg-gray-200 p-2 font-bold text-xl"> Subject Marks (Max 100 Marks Each)</h4>
            <hr class="border-black border-[2px]">

            <label for="">Maths</label>
            <input type="text" name="maths" class="border  border-black rounded border-[1px]" placeholder="Enter Name"
                value="<?php echo $data['maths'] ?>">
            <label for="">English</label>
            <input type="text" name="english" class="border  border-black rounded border-[1px]" placeholder="Enter Name"
                value="<?php echo $data['english'] ?>">
            <label for="">Hindi</label>
            <input type="text" name="hindi" class="border  border-black rounded border-[1px]" placeholder="Enter Name"
                value="<?php echo $data['hindi'] ?>">
            <label for="">Science</label>
            <input type="text" name="science" class="border  border-black rounded border-[1px]" placeholder="Enter Name"
                value="<?php echo $data['science'] ?>">
            <input type="submit" name="submit"
                class="bg-green-500 w-[150px] text-white py-2 px-4 rounded  self-center mt-4" value="update">
        </form>

    </div><?php
    $query = "UPDATE reasult SET
    name='$name',
    class='$class',
    father='$father',
    mother='$mother',
    address='$address',
    maths='$maths',
    english='$eng',
    hindi='$hindi',
    science='$science',
    gread='$grade'
    WHERE roll='$roll'";

    if (mysqli_query($connect, $query)) {
        echo "Data updated successfully";
    } ?>

</body>

</html>