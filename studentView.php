<?php include_once 'db.php';
checkAuth('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="w-full">
        <div class='px-2 py-2 bg-black sticky top-0'>
            <div class="flex justify-between items-center">
                <a class="ml-24">
                    <span class="text-xl text-white font-semibold ">CodeWithSadiQ</span>
                </a>
                
                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 bg-teal-400 font-semibold rounded-lg hover:bg-gray-200">Logout</a>
            </div>
        </div>
        <div class="flex gap-2">
            <div class="w-1/5 bg-slate-200 h-screen">
                <?php include_once 'side.php';?>
            </div>
            <div class="w-4/5 p-5">
                <div class='ml-64 bg-slate-200 w-2/5 h-72 rounded-lg border shadow-2xl'>
                    <div class='text-center'>
                            <h1 class='font-semibold text-xl mt-2'>Course Add</h1>
                            <form method='post' action='db.php' enctype='multipart/form-data'>
                                <input type='text' name='student_name' placeholder='Enter student name' class='w-3/5 bg-none px-2 py-2 mt-4 border-none'/>
                                <input type='text' name='developer' placeholder='Which language developer' class='w-3/5 bg-none px-2 py-2 mt-4 border-none'/>
                                <input type='text' name='company_name' placeholder='Enter company name' class='w-3/5 bg-none px-2 py-2 mt-4 border-none'/>
                                <input type='file' name='cover' placeholder='Enter the course duration' class='w-3/5 bg-none px-2 py-2 mt-4 border-none'/>
                                <input type="submit" class="px-6 py-3 w-full bg-green-500 text-white text-lg font-semibold leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" name="click" value="Sign Up">
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>