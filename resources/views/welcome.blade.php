@extends('layout.index')

@section('container')
    <section class="py-20 mx-4 md:mx-10" id="hero">
        <div class="content-area mx-5 flex flex-wrap justify-between ">
            <div class="text-area w-[40rem] md:w-[20rem] lg:w-[40rem]">
                <h1 class="font-semibold text-2xl lg:text-4xl mt-10 md:mt-32">Stay Informed, Stay Connected Your Source for Timely News!</h1>
                @if (session()->has('login'))
                    <audio id="audio" src="/audio/success.mp3" controls autoplay class="hidden"></audio>
                @endif
            </div>
            <div class="image-area mt-10 lg:mt-0">
                <img src="/img/hero-1.png"  class="w-[29rem] md:w-[19rem] lg:w-[29rem]" alt="">
            </div>
        </div>
    </section>

    <section id="about" class="py-20 mx-4 lg:mx-10">
        <h1 class="font-semibold text-2xl text-center">About Us</h1>
        <div class="content-area flex flex-wrap mx-0 lg:mx-10 mt-14">
            <div class="logo-area w-full lg:w-6/12">
                <div class="logo px-10 py-24 md:py-36 lg:py-40 bg-blue-800 flex justify-center">
                    <h1 class="font-bold text-5xl text-white">E-Market</h1>
                </div>
            </div>
            <div class="text-area w-full lg:w-6/12 pl-0 lg:pl-5 mt-3 lg:mt-0">
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo impedit veritatis mollitia recusandae at iusto nisi eius quas accusantium amet molestiae fugit, distinctio ut beatae aliquam, culpa eum? Labore expedita, repellendus tempora eum molestiae soluta dolorum tempore eos quae harum architecto tenetur quis dignissimos eius nihil ducimus ipsam nobis ut beatae maxime eaque placeat. Dolores, dolore. Aspernatur cupiditate eveniet ea harum nostrum nisi expedita tempora, placeat deserunt tenetur sit qui rerum possimus, at soluta animi repudiandae ipsam eum tempore nesciunt ratione fugiat. Nesciunt accusamus accusantium blanditiis, vel adipisci a explicabo, exercitationem saepe magni distinctio numquam, optio doloribus aliquid ad nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequuntur suscipit, veniam in assumenda corrupti earum, excepturi minus consectetur harum hic quae eaque nam repellat sit optio cumque laudantium vitae. Hic molestias commodi, nemo eius id facere quos vero culpa tempore placeat autem.</p>
            </div>
        </div>
    </section>

    <section id="testimonials" class="py-20 mx-4 lg:mx-10">
        <h1 class="font-semibold text-2xl text-center mb-5">What People Says</h1>

        <div class="content-area flex gap-10 flex-wrap justify-center">

            <div class="card-testimonial bg-white w-[20rem] rounded-xl shadow-lg mt-5 scale-100 hover:scale-105 cursor-pointer">
                <div class="image-area flex justify-center">
                    <img src="/img/people-1.jpg" class="w-16 mt-7 mb-5 rounded-full" alt="">
                </div>

                <div class="text-area mx-7 text-center mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit asperiores reiciendis magnam optio exercitationem odit culpa qui rem laborum repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptates obcaecati blanditiis itaque rem distinctio molestiae numquam iusto quaerat perspiciatis!

                    <h1 class="font-bold text-blue-900 text-lg my-5">Vivi Novika</h1>
                </div>
            </div>
            <div class="card-testimonial bg-white w-[20rem] rounded-xl shadow-lg mt-5 scale-100 hover:scale-105 cursor-pointer">
                <div class="image-area flex justify-center">
                    <img src="/img/people-3.jpg" class="w-16 mt-7 mb-5 rounded-full" alt="">
                </div>

                <div class="text-area mx-7 text-center mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit asperiores reiciendis magnam optio exercitationem odit culpa qui rem laborum repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptates obcaecati blanditiis itaque rem distinctio molestiae numquam iusto quaerat perspiciatis!

                    <h1 class="font-bold text-blue-900 text-lg my-5">Novi Anaid</h1>
                </div>
            </div>
            <div class="card-testimonial bg-white w-[20rem] rounded-xl shadow-lg mt-5 block md:hidden lg:block scale-100 hover:scale-105 cursor-pointer">
                <div class="image-area flex justify-center">
                    <img src="/img/people-2.jpg" class="w-16 mt-7 mb-5 rounded-full" alt="">
                </div>

                <div class="text-area mx-7 text-center mt-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit asperiores reiciendis magnam optio exercitationem odit culpa qui rem laborum repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptates obcaecati blanditiis itaque rem distinctio molestiae numquam iusto quaerat perspiciatis!

                    <h1 class="font-bold text-blue-900 text-lg my-5">Tom Luca</h1>
                </div>
            </div>

        </div>
    </section>

    <section id="footer" class="pt-20">
        <div class="content-area flex flex-wrap justify-between py-10 px-5 lg:px-20 bg-blue-900">
            <div class="col text-white">
                <h1 class="font-bold text-4xl md:text-2xl lg:text-4xl">E-Market</h1>
            </div>
            <div class="col ">
                <h1 class="font-semibold text-lg text-left text-white">Social Media</h1>
                <div class="list mt-5 flex flex-col gap-5">
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Instagram</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Github</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Twitter</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Linked In</a>
                </div>

            </div>
            <div class="col ">
                <h1 class="font-semibold text-lg text-left text-white">Our Company</h1>
                <div class="list mt-5 flex flex-col gap-5">
                    <a href="/home#hero" class="font-normal text-base text-white hover:text-slate-300">Home</a>
                    <a href="/home#about" class="font-normal text-base text-white hover:text-slate-300">About</a>
                    <a href="/home#testimonials" class="font-normal text-base text-white hover:text-slate-300">Testimonials</a>
                    <a href="/articles" class="font-normal text-base text-white hover:text-slate-300">Articles</a>
                </div>

            </div>
            <div class="col ">
                <h1 class="font-semibold text-lg text-left text-white">Address</h1>
                <div class="list mt-5 flex flex-col gap-5">
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Senden Roads</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Kec. Ngawen</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Kab. Klaten</a>
                    <a href="" class="font-normal text-base text-white hover:text-slate-300">Prov. Jateng</a>
                </div>

            </div>

        </div>
    </section>
@endsection