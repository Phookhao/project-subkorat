<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')|SubKorat</title>
</head>
<body>
    <nav class="flex bg-deepblue rounded-[10px] justify-between h-[50px] items-center p-[20px] mx-[10px] mt-[5px]">
        <div class="flex w-[455px] h-[50px] items-center ">
            <a href="/" class="text-[#fff] text-[30px] font-english">SubKorat</a>
        </div>
        <div class="flex text-[#fff] justify-between  w-[700px] h-[50px] items-center">
            <div class="flex w-[450px] justify-between px-[0.5px] font-thai">
                <a href="#">เสนอคำศัพท์</a>
                <a href="#">มินิเกมคำศัพท์โคราช</a>
                <a href="/consonant">ค้นหาคำศัพท์ตามพยัญชนะ</a>
            </div>  
            <div class="flex h-[40px] w-[170px] justify-between items-center ">
                <a href="#" class="font-english">Login</a>
                <a href="#" class="bg-[#fff] text-deepblue px-[20px] py-[8px] rounded-[10px] font-english">Sign up</a>
            </div>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer>
        @extends('footer')
    </footer>
</body>
</html>