<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div
        class="z-[2] w-full my-auto mx-0 h-16 md:px-[90px] px-8 py-16 flex items-center justify-between bg-[#141b2b]  top-[20px]">
        <span class="text-white text-[28px] font-semibold">Logo.</span>
        <div class="items-center hidden md:flex gap-7">
            <a href="/">
                <span class="font-medium text-blue-400 ">
                    home
                </span>
            </a>
            <a href="/rend">
                <span class="font-medium text-blue-400 ">
                    Rende
                </span>
            </a>
            <button
                class="px-6 py-3 font-semibold text-gray-900 bg-blue-400 rounded-full hover:bg-gray-700 hover:text-white">
                Book Now
            </button>
        </div>
        <div class="block cursor-pointer md:hidden">

        </div>
    </div>




    <section class="hero z-[1] w-full h-[100vh] py-12 place-items-center bg-[#141b2b]  ">
        <div class="flex md:flex-row flex-col items-center w-full md:px-[90px] px-8 justify-between md:gap-0 gap-28">
            <div class="flex flex-col w-full gap-3 left-animation">
                <span class="text-blue-400 text-[28px] font-medium">
                    Welcome To Our Website!
                </span>
                <span class="text-white font-medium md:text-[55px] text-[45px]">
                    Luxury Experience <br /> With Our Services.
                </span>
                <span class="text-white font-medium text-[60px]"></span>
                <span class="text-white leading-5 max-w-[500px] text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nulla ipsa unde
                    inventore minus commodi saepe? Eos cumque aliquam consequatur id optio dolorum
                    modi quod?
                </span>
                <div class="flex items-center mt-5 gap-7">
                    <button class="px-6 py-3 font-semibold text-gray-900 bg-blue-400 rounded-full">
                        Book Flight
                    </button>
                    <button class="border-[2px] border-blue-400 px-6 py-3 text-white font-semibold rounded-full">
                        Contact Us
                    </button>
                </div>
            </div>
            <div class="relative ">
                <span class="circle "></span>
                <img src="/img/doctor.png" class=" md:w-[200vw] w-full right-animation _img" alt="" />
            </div>
        </div>
    </section>




    <section class="flex w-full py-20 md:px-[200px] px-8 flex-col gap-16 justify-center items-center">
        <div class="flex flex-col items-center w-full">
            <span class="font-semibold text-blue-500">Our Features</span>
            <span class="mt-1 text-3xl font-semibold text-slate-700">
                Our Priceless Features
            </span>
            <p class="max-w-[400px] text-center mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure animi et quidem quis
                quas nisi.
            </p>
        </div>
        <div class="flex flex-col items-center justify-between w-full gap-5 md:flex-row md:gap-0">

            <div
                class="bg-white shadow-lg py-5 px-12 flex flex-col items-center justify-center gap-5 rounded-[10px] transition-all duration-300 cursor-pointer hover:scale-[1.05]">
                {feature.icon}
                <span class="font-semibold text-gray-700 text-[21px]">
                    {feature.title}
                </span>
                <span class="max-w-[360px] text-center leading-7">
                    {feature.description}
                </span>
            </div>
            <div
                class="bg-white shadow-lg py-5 px-12 flex flex-col items-center justify-center gap-5 rounded-[10px] transition-all duration-300 cursor-pointer hover:scale-[1.05]">
                {feature.icon}
                <span class="font-semibold text-gray-700 text-[21px]">
                    {feature.title}
                </span>
                <span class="max-w-[360px] text-center leading-7">
                    {feature.description}
                </span>
            </div>
            <div
                class="bg-white shadow-lg py-5 px-12 flex flex-col items-center justify-center gap-5 rounded-[10px] transition-all duration-300 cursor-pointer hover:scale-[1.05]">
                {feature.icon}
                <span class="font-semibold text-gray-700 text-[21px]">
                    {feature.title}
                </span>
                <span class="max-w-[360px] text-center leading-7">
                    {feature.description}
                </span>
            </div>

        </div>
    </section>

    <section class="testimonial bg-indigo-100 bg-cover bg-right bg-no-repeat py-12 md:min-h-[70vh] md:py-0 ">
        <div class="container mx-auto">
            <div class="flex flex-col items-center md:flex-row">
                <div class="max-w-[98%] md:max-w-[710px]">
                  
                    <div class="swiper ">
                     
                        <div class="swiper-wrapper">
                         
                            <div class="swiper-slide">
                                <div class="flex flex-col items-start justify-center h-full">
                                    <div class="mx-w-[680px] mx-auto text-center md:text-left">
                                        <p class=" font-light relative text-[22px] text-[#4c5354] leading-[190%] text-center md:text-left mb-7 ">
                                            <span class="mx-2"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus
                                                alias nostrum illum recusandae inventore quaerat iste, officiis nobis
                                                nam a dolore reiciendis? Magni sunt perferendis labore, eum ratione
                                                fugiat ipsa?</span>
                                        </p>
                                        <div class="text-[26px] text-[#4c5354]  font-semibold">Anouar Belhassan</div>
                                        <div class="text-[#91b4b7] font-medium uppercase tracking-[2.24px]">owner</div>
                                    </div>
                                </div>
                            </div>
                           
                          
                        </div>
                        
                    </div>
                </div>
                <div class="hidden md:flex">
                    <img src="/img/circle.png" class=" w-96" alt="">
                </div>

            </div>
        </div>
    </section>


</body>

</html>
