<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF7EB]">
    <!-- headder -->
    <div class="flex justify-between w-full p-4 bg-red-200">
        <h1 class="text-2xl font-bold ">Result Management System</h1>
    </div>
    <!-- form  -->
    <div class=" flex items-center justify-center  min-h-screen  ">
        <form action="logout.php" method="post" class=" flex  gap-3 flex-col-1  border border-black border-[1px]">
            <label for="username">Username</label>
            <input type="text" placeholder="Enter User name" class="border ">
        </form>
    </div>
</body>
</html>