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
            <div class="w-4/5 bg-slate-200 h-screen">
                <div class="flex w-full p-5 space-x-28">
                    <div class="w-1/4 h-32 rounded-xl bg-orange-500">
                        <h1 class="text-center font-semibold text-base">Total student</h1>
                        <h1 class="text-center mt-6 text-3xl font-bold">4</h1>
                    </div>
                    <div class="w-1/4 h-32 rounded-xl bg-green-500">
                        <h1 class="text-center font-semibold text-base">Total Fees</h1>
                        <h1 class="text-center mt-6 text-3xl font-bold">10000</h1>
                    </div>
                    <div class="w-1/4 h-32 rounded-xl bg-red-500">
                        <h1 class="text-center font-semibold text-base">Total Due</h1>
                        <h1 class="text-center mt-6 text-3xl font-bold">600</h1>
                    </div>
                </div>
                <div class="border w-full border-black"></div>

                   

                <div class='p-5'>
                    <table class="w-full text-center">
                        <thead class="border-2 border-black">
                            <tr class="">
                                <th class="border-2 border-black">Id</th>
                                <th class="border-2 border-black">Name</th>
                                <th class="border-2 border-black">Father name</th>
                                <th class="border-2 border-black">Contact</th>
                                <th class="border-2 border-black">Email</th>
                                <th class="border-2 border-black">Action</th>
                            </tr>
                        </thead>
                        <?php
                            $admission = mysqli_query($connect , "select * from admission");
                            while($row = mysqli_fetch_array($admission)):
                            ?>
                        <tbody class='border-black border-2'>
                        
                            <tr class=''>
                            
                                <td class="border-2"><?= $row['id'];?> </td>
                                <td class="border-2"><?= $row['name'];?></td>
                                <td class="border-2"><?= $row['father_name'];?></td>
                                <td class="border-2"><?= $row['contact'];?></td>
                                <td class="border-2"><?= $row['email'];?></td>
                                <td class="border-2 gap-2">
                                    <button class="px-2 py-2 rounded-lg bg-green-500">Pay</button>
                                    <button class="px-2 py-2 rounded-lg bg-yellow-500">Print</button>
                                </td>
                               
                            </tr>
                        </tbody>
                        <?php endwhile;?>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>