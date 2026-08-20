<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Result Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FFF7EB] min-h-screen flex flex-col font-sans">
    <!-- Header -->
    <div class="flex justify-between items-center w-full p-4 bg-blue-200 shadow-md">
        <h1 class="text-2xl font-bold text-gray-800">Result Management System</h1>
    </div>

    <!-- Login Form Container -->
    <div class="flex-1 flex items-center justify-center p-4">
        <div class="bg-white p-8 rounded-2xl shadow-xl border border-gray-200 w-full max-w-md">
            <!-- Form Title & Header -->
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-blue-100 text-blue-600 rounded-full mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Welcome Back</h2>
                <p class="text-sm text-gray-500 mt-1">Please enter your credentials to login</p>
            </div>

            <!-- Form -->
            <form action="logout.php" method="post" class="flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <label for="username" class="text-sm font-semibold text-gray-700">Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        placeholder="Enter Username" 
                        required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-gray-800 placeholder-gray-400"
                    >
                </div>

                <div class="flex flex-col gap-1">
                    <label for="password" class="text-sm font-semibold text-gray-700">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Enter Password" 
                        required
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all text-gray-800 placeholder-gray-400"
                    >
                </div>

                <button 
                    type="submit" 
                    name="login" 
                    class="w-full mt-2 py-2.5 px-4 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white font-semibold rounded-lg shadow hover:shadow-md transition-all duration-200 cursor-pointer"
                >
                    Login
                </button>
            </form>
        </div>
    </div>
</body>
</html>