<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Result Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF7EB] min-h-screen flex flex-col font-sans">

    <div class="flex justify-between items-center w-full p-4 bg-blue-200 shadow-md">
        <h1 class="text-2xl font-bold text-gray-800">Result Management System</h1>
    </div>

    <div class="flex-1 flex items-center justify-center p-4">

        <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 w-full max-w-md">

            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Logging In</h2>
                <p class="text-sm text-gray-500 mt-1">Please enter your id and password to login </p>
            </div>
            <form action="logout.php" method="POST" class="flex flex-col gap-4">

                <div class="flex flex-col gap-1">
                    <label class="text-sm font-semibold text-gray-700">Username</label>
                    <input type="text" name="username" placeholder="Enter Username" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-sm font-semibold text-gray-700">Password</label>

                    <input type="password" name="password" placeholder="Enter Password" required class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" class="w-full mt-2 py-2.5 px-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg">
                    Login
                </button>

            </form>

        </div>
    </div>

</body>
</html>