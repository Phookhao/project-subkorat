<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Admin page|Subkorat</title>
</head>
<body class="bg-[#f5f5f5]">
    <header class=" h-[75px]">
        <nav class="flex justify-between items-center  relative">
            <div class="pl-[40px] font-english text-[40px]">
                <h1>
                    SubKorat
                </h1>
            </div>
            <div class="flex justify-between w-[500px]">
                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                    <div class="flex justify-between items-center border-[1px] border-current w-[250px] h-[35px] p-[5px] rounded-[40px] ">
                        <i class="fa-solid fa-magnifying-glass px-[10px]  text-[20px] "></i><input type="text" placeholder="Search" class="w-[200px] focus:outline-none appearance-none bg-[#f5f5f5]">
                    </div>
                </div>
            </div>
            <div class="flex  w-[200px] px-[15px] justify-between">
                <a href="#" class="font-thai hover:text-littleblue">ออกจากระบบ</a>
                <a href="#"><i class="fa-solid fa-user text-[20px]" ></i></a>
            </div>
        </nav>
    </header>

    {{-- middle content --}}
    <section class="flex justify-between top-[50px] ">
        <div class="flex flex-col w-[250px] ">
            <div class=" flex items-center justify-center  w-full h-[65px] ">
                <ul class="w-full h-[65px] "> 
                    <li>
                        <button id="Manageword"  class="flex items-center justify-stretch py-2 px-4 hover:bg-littleblue hover:text-white hover:rounded-[30px] w-full h-[65px] ">
                            <i class="fa-solid fa-list text-[20px] pr-4"></i> 
                            <span class="font-thai text-[13px]">จัดการคำศัพท์</span>
                            <i class="fas fa-chevron-down ml-auto"></i>
                        </button>
                        <ul id="dropdownManageword" class="space-y-2 pl-6 hidden">
                            <li>
                                <a href="#" class="py-4 px-10  block hover:bg-littleblue font-thai text-[13px] hover:text-[#fff] hover:rounded-[30px]">จัดการคำศัพท์</a>
                            </li>
                            <li>
                                <a href="#" class="py-4 px-10 block hover:bg-littleblue font-thai text-[13px] hover:text-[#fff] hover:rounded-[30px]">เพิ่มคำศัพท์ใหม่</a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex h-[65px]">
                        <a href="#" class="flex items-center justify-start py-2 px-4 hover:bg-littleblue hover:text-white hover:rounded-[30px] w-full h-full ">
                            <i class="fa-solid fa-gamepad text-[20px] pr-4"></i> 
                            <span class="font-thai text-[13px]">มินิเกมศัพท์โคราช</span>
                        </a>
                    </li>
                    <li class="flex h-[65px]">
                        <a href="#" class="flex items-center justify-start py-2 px-4 hover:bg-littleblue hover:text-white hover:rounded-[30px] w-full h-full ">
                            <i class="fa-solid fa-comment-dots text-[20px] pr-4"></i> 
                            <span class="font-thai text-[13px]">จัดการการเสนอคำศัพท์</span>
                        </a>
                    </li>
            </div>
        </div>
        <div class="bg-[#fff] w-full rounded-[20px] h-[570px] mx-4 shadow-lg">
            @yield('admincontent')
        </div>
    </section>


    <script>
        // JavaScript to toggle dropdown menu visibility
        const manageMenuButton = document.getElementById('Manageword');
        const dropdownManageword = document.getElementById('dropdownManageword');

        manageMenuButton.addEventListener('click', () => {
            dropdownManageword.classList.toggle('hidden'); // Toggle visibility of dropdown menu
        });
    </script>
</body>
</html>