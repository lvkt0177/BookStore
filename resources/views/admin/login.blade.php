<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-6">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-700 dark:text-white">Admin Panel</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Đăng nhập để quản lý hệ thống</p>
        </div>

        <form method="POST" action="" class="mt-6">
            @csrf
            <div>
                <label class="block text-gray-700 dark:text-gray-300">Email</label>
                <div class="relative">
                    <input type="email" name="email" required class="w-full px-4 py-3 mt-2 border rounded-lg bg-gray-100 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">
                    <i class="fa fa-envelope absolute right-3 top-3 text-gray-400"></i>
                </div>
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 dark:text-gray-300">Mật khẩu</label>
                <div class="relative">
                    <input type="password" name="password" required class="w-full px-4 py-3 mt-2 border rounded-lg bg-gray-100 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">
                    <i class="fa fa-lock absolute right-3 top-3 text-gray-400"></i>
                </div>
            </div>

            <div class="flex justify-between items-center mt-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="form-checkbox text-blue-500">
                    <span class="ml-2 text-gray-600 dark:text-gray-300">Nhớ đăng nhập</span>
                </label>
                <a href="#" class="text-sm text-blue-500 hover:underline">Quên mật khẩu?</a>
            </div>

            <button type="submit" class="w-full mt-6 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition">Đăng nhập</button>
        </form>

        <p class="mt-4 text-center text-gray-600 dark:text-gray-300">
            Chưa có tài khoản? <a href="#" class="text-blue-500 hover:underline">Đăng ký ngay</a>
        </p>
    </div>
</body>
</html>
