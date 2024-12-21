@extends('nav')
@section('title')
@endsection
@section('content')

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>

    <body>
        <section>
            {{-- Top content --}}
            <div class="2xl:w-full grid items-center justify-center">
                <div class=" grid items-center justify-center mt-[50px]">
                    <h1 class="font-thai text-[50px] text-deepblue">
                        ค้นหาคำศัพท์
                    </h1>
                </div>
                <div class="flex justify-center items-center">
                    <div class="flex justify-between items-center border-[1px] border-current w-[450px] p-[5px] rounded-[5px] ">
                        <input type="text" placeholder="Search" class="w-[420px] focus:outline-none"><i
                            class="fa-solid fa-magnifying-glass  text-[20px] "></i>
                    </div>
                </div>
                <div class="w-[750px]   mt-[45px]  mb-[45px]">
                    <img src={{ asset('img/middle.png') }} alt="image" class="rounded-[10px]">
                </div>
            </div>

            {{-- middel Content --}}
            <div class="mb-[30px]">
                <div class="font-thai text-deepblue ml-[20px] mb-[10px]">
                    <h1 class="text-[20px]">
                        คำศัพท์แต่ละหมวด
                    </h1>
                </div>
                <hr class="border-[1px] border-black">
                <div class="grid grid-cols-3 gap-[10px] w-[1140px] m-auto pt-[10px]">
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                                <a href="#"><img src={{ asset('img/terrain.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดภูมิประเทศ
                            </p>
                        </div>
                    </div>
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                                <a href=""><img src={{ asset('img/animal.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดสัตว์
                            </p>
                        </div>
                    </div>
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                                <a href=""><img src={{ asset('img/acting.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดท่าทาง
                            </p>
                        </div>
                    </div>
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                             <a href=""><img src={{ asset('img/family.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดการเรียกเครือญาติ
                            </p>
                        </div>
                    </div>
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                            <a href=""><img src={{ asset('img/consonant.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดพยัญชนะ
                            </p>
                        </div>
                    </div>
                    <div class="w-[300px] h-[350px] flex justify-center w-full">
                        <div class="flex flex-col justify-center items-center">
                            <a href="#"><img src={{ asset('img/cock.png') }} alt="" class="grid w-[300px] h-[300px] rounded-[10px]"></a>
                            <p class="font-thai text-deepblue">
                                หมวดการทำอาหาร
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="border-[1px] border-black">
            </div>
        </section>
    </body>
@endsection