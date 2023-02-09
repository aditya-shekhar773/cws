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
<div class="flex justify-center ">
    <div class="flex md:flex-row flex-col justify-center max-w-7xl m-4 ">
        <div class="lg:w-1/2 bg-black ">
            <div class="flex justify-center flex-col items-center">
                <div class="text-white m-6 text-xl z-200"> Create account </div>
                <div class="text-white m-6 z-200"> We are always here to help out whatever way we can :) </div>
                <div class="text-white m-6 z-200">
                    <form action='db.php' method='post' enctype="multipart/form-data">
                        <div class="flex m-2">
                            <ion-icon name="person-outline" class="m-2"></ion-icon>
                            <input type='text' placeholder="Name" name='name' class="bg-gray-800 p-2 rounded-3xl"/>
                        </div>
                        <div class="flex m-2">
                            <ion-icon name="mail-outline" class="m-2"></ion-icon>
                            <input type='email' placeholder="E-mail" name='email' class="bg-gray-800 p-2 rounded-3xl"/>
                        </div>
                        <div class="flex m-2">
                            <ion-icon name="call-outline" class="m-2"></ion-icon> <input type='contact' placeholder="Phone"
                               name='contact' class="bg-gray-800 p-2 rounded-3xl"/>
                        </div>
                        <div class="flex m-2">
                            <ion-icon name="create-outline" class="m-2"></ion-icon><input
                               type='password' name='password' placeholder="Password" class="bg-gray-800 p-2 rounded-3xl"/>
                        </div>
                        <div class="flex m-2">
                            <ion-icon name="create-outline" class="m-2"></ion-icon><input
                            type='password' name='con_password' placeholder="Conform Password" class="bg-gray-800 p-2 rounded-3xl"/>
                        </div>
                        <div class="block m-2justify-center">
                            <div class='w-full flex gap-2 p-2 justify-center items-center mt-3'>
                                <input type="submit" class="px-6 py-3 bg-green-500 text-white text-lg font-semibold leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" name="create" value="Sign Up">
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-3/4 lg:w-2/3 ">
            <div class="w-3/4 lg:w-1/2 overflow-contain h-min"> <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.315540303!2d-74.26054823358196!3d40.697147766721685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1656264173526!5m2!1sen!2sin"
                width="375" height="667" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
    <?php include_once 'footer.php';?>
</body>
</html>