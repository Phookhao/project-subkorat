@extends('nav')
@section('title')
    ค้นหาคำศัพท์ตามพยัญชนะ
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    <body>
            {{-- Top content --}}
        <section>
            <div class="2xl:w-full grid items-center justify-center">
                <div class=" grid items-center justify-center mt-[50px]">
                    <h1 class="font-thai text-[50px] text-deepblue">
                        ค้นหาคำศัพท์ตามหมวดพยัญชนะ
                    </h1>
                </div>
                <div class="flex justify-center items-center">
                    <div class="flex justify-between items-center border-[1px] border-current w-[450px] p-[5px] rounded-[5px] ">
                        <input type="text" placeholder="Search" class="w-[420px] focus:outline-none"><i
                            class="fa-solid fa-magnifying-glass  text-[20px] "></i>
                    </div>
                </div>
            </div> 
        </section>
            {{-- middle content --}}
        <section>
            <div>
                
            </div>
        </section>

    </body>
@endsection