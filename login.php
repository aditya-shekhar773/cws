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
    <div class="flex justify-center">
        <div class="flex flex-col justify-center items-center md:flex-row shadow rounded-xl max-w-7xl md:w-[50%]  m-2">
            <div class=" w-full md:w-3/4">
                <div class="text-xl cursor-pointer flex flex-col justify-center items-center mt-5 md:mt-0 py-4">
                                    
                    <h1 class="font-semibold text-xl md:text-3xl text-gray-600 m-2">Login to your account</h1>
                                                       
                </div>
                <form action="db.php" method="post" autocomplete="false">
                    <div class="flex flex-col justify-center items-center m-2 space-y-6 md:space-y-8">
                        <div class="">
                            <div class="m-1 text-lg text-gray-500 text-semibold">Username</div>
                            <input type="text" name='email' 
                                class="border-b border-gray-500 focus:outline-none  text-gray-500 placeholder:opacity-50 font-semibold md:w-72 lg:w-[340px] bg-transparent"/>
                        </div>
                        <div class="">
                            <div class="m-1 text-lg text-gray-500 text-semibold">Password</div>
                            <input type="password"
                               name='password' class="border-b border-gray-500 focus:outline-none  text-gray-500 placeholder:opacity-50 font-semibold md:w-72 lg:w-[340px] bg-transparent"/>
                        </div>

                        <div class="mb-3 flex gap-5 mt-5">
                            <input type="submit" name="login" value="Login" class="bg-green-600 w-full  text-white px-3 py-2 rounded-md">
                        </div>
                    </div>
                   
                </form>
                                    
            </div>
            <div
                class="h-[100%] w-full md:w-1/2 items-center flex justify-center">
                                    
                <div class="text-stone-700 text-base font-semibold text-center my-10 space-y-2 m-2 cursor-pointer">
                    <div class="flex justify-between border-2 border-stone-700 px-6 py-2">
                            <ion-icon name="logo-google" class="m-1 text-sm md:text-xl text-red-500"></ion-icon>
                        <div class="m-1 text-lg">Continue with Google</div>
                    </div>
                    <div class="flex justify-between border-2 border-stone-700 px-6 py-2">
                            <ion-icon name="logo-facebook" class="m-1 text-sm md:text-xl text-blue-500"></ion-icon>
                        <div class="m-1 text-lg">Continue with Facebook</div>
                    </div>
                    <div class="flex justify-between border-2 border-stone-700 px-6 py-2">
                            <ion-icon name="logo-apple" class="m-1 text-sm md:text-xl text-black"></ion-icon>
                        <div class="m-1 text-lg">Continue with Apple</div>
                    </div>
                </div>
                                    
            </div>
                                    
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <?php include_once 'footer.php';?>
</body>
</html>
                                     