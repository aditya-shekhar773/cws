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
    <?php include_once 'header.php';?>
    <div class='w-full p-10'>
        <h1 class='font-semibold text-xl text-teal-500'>Apply for Addmission</h1>
        <form action='db.php' method='post' enctype='multipart/form-data'>
            <div class='w-full mt-5'>
                <label class='font-semibold'>Name</label>
                <input type="text" name='name' class="px-2 py-2 rounded-lg w-full border shadow"/>
            </div>

            <div class='w-full flex space-x-9 mt-4'>
                <div class='w-1/2'>
                    <label class='font-semibold'>Mother Name</label>
                    <input type="text" class="px-2 py-2 rounded-lg w-full border shadow"/>
                </div>
                <div class='w-1/2'>
                    <label class='font-semibold'>Father Name</label>
                    <input type="text" name='father_name' class="px-2 py-2 rounded-lg w-full border shadow"/>
                </div>
            </div>

            <div class='w-full flex space-x-9 mt-4'>
                <div class='w-1/2'>
                    <label class='font-semibold'>Contact</label>
                    <input type="number" name='contact' class="px-2 py-2 rounded-lg w-full border shadow"/>
                </div>
                <div class='w-1/2'>
                    <label class='font-semibold'>Email-Input</label>
                    <input type="email" name='email' class="px-2 ml-1 py-2 rounded-lg w-full border shadow"/>
                </div>
            </div>

            <div class='w-full flex space-x-16 mt-4'>
                <div class='w-3/12'>
                    <label class='font-semibold'>Education</label>
                    <input type="text" class="px-2 py-2 rounded-lg w-full border shadow"/> 
                </div>
                <div class='w-3/12'>
                    <label class='font-semibold'>Data Of Birth</label>
                    <input type="date" class="px-2 py-2 rounded-lg w-full border shadow"/>
                </div>
                <div class='w-3/12'>
                    <label class='font-semibold'>Gender</label>
                    <select type="text" class="px-2 py-2 rounded-lg w-full border shadow">
                        <option class='disable'></option>
                        <option class=''>Male</option>
                        <option class=''>Female</option>
                        <option class=''>Other</option>
                    </select>
                </div>
            </div>

            <div class='mt-4 w-full'>
                <label class='font-semibold'>Address</label>
                <textarea type="text" class="border w-full rounded-lg shadow h-24" row='5' col='10'></textarea>
            </div>

            <div class='mt-2 w-full'>
                <div class='w-full flex gap-2 p-2 justify-center items-center mt-3'>
                    <input type="submit" class="px-6 py-3 bg-green-500 text-white text-lg font-semibold leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" name="save" value="Sign Up">
                </div> 
            </div>
        </form>

    </div>
    <?php include_once 'footer.php';?>
</body>
</html>