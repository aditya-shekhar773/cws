<?php
 include_once 'db.php';
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
    <div class="bg-[url('bg1.jpg')] bg-no-repeat bg-cover justify-between items-center w-full h-[100vh] relative opacity-100  rounded flex-col">
        <div class='w-full sticky top-0'>
            <?php include_once 'header.php';?>
        </div>
        <div class='ml-24'>
            <div class='bg-teansparent'>
                <div class="text-gray-600 body-font ">
                    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center -mt-16">
                        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                            <h1 class="text-6xl text-teal-600 mb-4 font-semibold">Skill hai,
                                <br class="text-4xl text-teal-600 font-semibold">Toh Future Hai!
                            </h1>
                            <p class="mb-8 leading-relaxed text-teal-500">"CWS is an on-demand marketplace for top Programming engineers, developers, consultants, architects, programmers, and tutors. Get your projects built by vetted web programming freelancers or learn from expert mentors with team training & coaching experiences in Project based training."</p>
                            <div class="flex justify-center">
                                <a href='studentAdmission.php' class="inline-flex text-white bg-teal-700 border-0 py-2 px-7 focus:outline-none hover:bg-teal-400 rounded-lg text-base">join now</a>
                            </div>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                            <img class="object-cover object-center rounded bg-transparent bg-none animation-duration: 3s" alt="hero" src="study.gif">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="w-full">
                <div class="container ">
                    <div class='-mt-16'>
                        <h1 class='text-2xl text-teal-400 font-semibold'>Our Courses</h1>
                        <p class='text-sm'>Lorem ipsum dolor sit amet</p>
                
                        <div class='flex gap-5 mt-6'>
                            <?php
                                $course = mysqli_query($connect , "select * from course");
                                while($row = mysqli_fetch_array($course)):
                            ?>
                                <div class='border w-48 h-64 bg-white hover:shadow-2xl rounded-xl'>
                                    <div class=''>
                                        <img src='images/<?= $row['dp'];?>' class='w-56 rounded-full h-40 p-4'/>
                                    </div>

                                    <div class='w-11/12 border ml-1.5'></div>
                                    <h1 class='text-center text-base font-semibold font-sans'><?= $row['course_name'];?></h1>
                                    <div class='p-1 '>
                                        <P class='text-xs bg-teal-200 px-2 py-2 text-center font-semibold rounded-md'>Duration : <?= $row['course_duration'];?></p>
                                    </div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>    

            <div class="w-full">
                <div class="mt-10">
                    <div class=''>
                        <h1 class='text-2xl text-teal-400 font-semibold'>Our Students In Industry</h1>
                        <p class='text-sm'>Contributing Nation Development</p>
                    

                        <div class='flex gap-5 mt-6'>
                            <?php
                                $student = mysqli_query($connect , "select * from student");
                                while($row = mysqli_fetch_array($student)):
                            ?>
                            <div class='border w-48 h-64 bg-white hover:shadow-2xl rounded-lg'>
                                <div class='p-2'>
                                    <img src='images/<?= $row['cover'];?>' class='w-56 h-40 rounded-lg'/>
                                </div>

                        
                                <h1 class='text-center text-xl font-semibold font-sans'><?= $row['student_name'];?></h1>
                                <P class='text-xs text-center font-semibold'><?= $row['developer'];?></p>
                                <P class='text-xs text-center font-semibold'><?= $row['company_name'];?></p>
                            </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once 'footer.php';?>
    </div>   
</body>
</html>