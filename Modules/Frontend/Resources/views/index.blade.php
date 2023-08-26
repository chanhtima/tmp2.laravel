@extends('frontend::layouts.master')
@section('title')

@section('style')
<style>
    header {
       background-color: rgba(255, 255, 255, 0.56);

}
@media (max-width: 1200px) {
    header {
       background-color: rgb(255, 255, 255);

}
}

    </style>

@endsection

@section('content')


                <div class="w-full">
                    <div class="splide splide-banner-slide">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class=" img-cover" src="{{ Module::asset('frontend:img/home/Group93.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class=" img-cover" src="{{ Module::asset('frontend:img/home/Group93.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class=" img-cover" src="{{ Module::asset('frontend:img/home/Group93.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class="mg-cover" src="{{ Module::asset('frontend:img/home/Group93.png') }}" />
                                    </div>
                                </div>
                                <div class="splide__slide">
                                    <div class="img-wrapper h-full">
                                        <img class=" img-cover" src="{{ Module::asset('frontend:img/home/Group93.png') }}" />
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
              
    <main class="mt-5">
        <section class="the-container relative z-1 flex-1 the-bass py-0 ">
                   
            <div class="row flex-wrap items-center">
                <div class="col-lg-6 pb-4">
                    <img class="w-full" src="{{ Module::asset('frontend:img/home/Group48096301.png') }}" />
                </div>
                <div class="col-lg-6 px-4">
                    <h1 class="text-2nd fs-44  title-h">ABOUT US</h1>
                    <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                    <p class="text-2nd">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                    <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                <a class="btn-b" href="{{ url('/about') }}">Read More </a>

                </div>
            </div>
        </section>

       
      <!-- Products Section -->
      <section  class="products ">
        <div class="the-container relative z-1 flex-1 p-0">
            <div class="section-title">
               
                <div class="flex flex-wrap items-center d-px5">
                    <div class="w-full md:w-6/12  ">
                        <h3 class="text-2nd p-0 fs-28 flex items-center ht-index">
                            
                            <svg class="icon-svg" width="30" height="30" viewBox="0 0 29 29" fill="none"   xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.8193 7.4364C27.7792 7.21932 27.694 7.01309 27.5691 6.83109C27.4442 6.64909 27.2824 6.49539 27.0943 6.37997L22.9514 10.5228C22.7582 10.7233 22.5265 10.8828 22.2703 10.9917C22.014 11.1006 21.7384 11.1567 21.46 11.1567C21.1815 11.1567 20.9059 11.1006 20.6497 10.9917C20.3934 10.8828 20.1618 10.7233 19.9685 10.5228L18.3943 9.11426C18.0147 8.72705 17.8021 8.20646 17.8021 7.66426C17.8021 7.12206 18.0147 6.60147 18.3943 6.21426L22.5371 2.0714C22.4468 1.85916 22.3109 1.66936 22.1391 1.51544C21.9672 1.36152 21.7637 1.24724 21.5428 1.18069C20.0973 0.892426 18.5999 1.01582 17.2211 1.53681C15.8423 2.05781 14.6375 2.95547 13.7438 4.12761C12.8502 5.29974 12.3035 6.69925 12.1662 8.1668C12.0289 9.63435 12.3064 11.111 12.9671 12.4285L1.65712 23.635C1.45982 23.8279 1.30306 24.0583 1.19603 24.3126C1.08901 24.5669 1.03387 24.8401 1.03387 25.116C1.03387 25.392 1.08901 25.6651 1.19603 25.9195C1.30306 26.1738 1.45982 26.4042 1.65712 26.5971L2.40283 27.3428C2.59575 27.5401 2.82614 27.6969 3.08047 27.8039C3.33481 27.9109 3.60796 27.9661 3.8839 27.9661C4.15984 27.9661 4.433 27.9109 4.68733 27.8039C4.94167 27.6969 5.17206 27.5401 5.36497 27.3428L16.675 16.0535C17.9929 16.6815 19.4592 16.9315 20.9107 16.7759C22.3623 16.6203 23.7422 16.0651 24.8971 15.1721C26.052 14.2791 26.9366 13.0833 27.4524 11.7176C27.9683 10.3519 28.0953 8.86993 27.8193 7.4364Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            CATEGORIES</h3>
                    </div>
                    <div class="w-full md:w-6/12  text-end-3 ">
                        <a class="btn-b btn-d mx-3" href="{{ url('/products') }}">See More</a>

                    </div>
                </div>
                <div class="splide splide-products " aria-label="Splide Basic HTML Example">
                    <div class="splide__track splideup">
                        <ul class="splide__list">
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center ">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                            <li class="splide__slide"> 
                                <div class="products-box">
                                        <div class="title-products-c">
                                           <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                        </div>
                                        <div class="products-img">
                                        <a href="{{ url('/product-groups') }}" class="" >
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c title-products-a  text-center">
                                            <a href="{{ url('/product-groups') }}" class="title-products" >
                                               See More
                                            </a> 
                                    </div>
                                </div>
                                <div class="products-box">
                                    <div class="title-products-c">
                                       <h3 class="fo-2">ELECTRICAL SYSTEM</h3>
                                    </div>
                                    <div class="products-img">
                                    <a href="{{ url('/product-groups') }}" class="" >
                                        
                                        <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                    </a>
                                    </div>
                                    <div class="title-products-c title-products-a  text-center">
                                        <a href="{{ url('/product-groups') }}" class="title-products" >
                                           See More
                                        </a> 
                                </div>
                                </div>
                            
                            </li>
                        </ul>
                        
                    </div>
                </div>
                <div class="text-center btn-m mt-5">

                    <a class="btn-b  " href="{{ url('/products') }}">See More</a>
                </div>
            </div>
        </div>
        
      </section>
      <!-- End Products Section -->

      <!--Blog Section -->
      <section class="blog">
        <div class="bg-30 pt-7 ">
            <div class="the-container relative z-1 flex-1 d-px-2">
                <div class="row flex-wrap items-center">
                    <div class="col-md-6 p-0">
                        <h3 class="text-2nd p-0 fs-28 flex items-center ">
                            <svg class="icon-svg" width="30" height="31" viewBox="0 0 30  31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.66835 19.5345C3.65579 19.5474 3.64287 19.5605 3.62962 19.5739C3.4806 19.7251 3.29198 19.9165 3.15832 20.1568C3.02466 20.3971 2.96152 20.6583 2.91164 20.8647C2.90711 20.8834 2.90269 20.9017 2.89834 20.9195L1.22695 27.7443L2.19824 27.9822L1.22695 27.7443C1.2242 27.7555 1.22133 27.7672 1.21837 27.7792C1.18225 27.9259 1.13222 28.129 1.11552 28.3087C1.09629 28.5155 1.09177 28.9675 1.46236 29.3345C1.83295 29.7016 2.2849 29.6927 2.4915 29.6714C2.67103 29.653 2.87369 29.601 3.02001 29.5634C3.03201 29.5604 3.04362 29.5574 3.05482 29.5545L9.70487 27.8574L9.70488 27.8574C9.70563 27.8572 9.70638 27.857 9.70713 27.8568C9.72452 27.8524 9.74239 27.8479 9.76068 27.8432C9.97088 27.7903 10.2369 27.7233 10.4801 27.5831C10.7233 27.443 10.9147 27.2464 11.0659 27.0911C11.0796 27.077 11.093 27.0632 11.1061 27.0499L27.3434 10.4743L27.3809 10.436C27.672 10.139 27.9555 9.84964 28.1579 9.57922C28.3864 9.27397 28.6001 8.88061 28.6001 8.375C28.6001 7.86939 28.3864 7.47602 28.1579 7.17078C27.9555 6.90036 27.672 6.61105 27.3809 6.314L27.3434 6.27566L24.1431 3.0087L24.1045 2.96929C23.802 2.66036 23.5086 2.3608 23.2338 2.14702C22.9243 1.90634 22.5218 1.67902 22 1.67902C21.4782 1.67902 21.0757 1.90634 20.7662 2.14702C20.4914 2.36079 20.198 2.66034 19.8955 2.96927C19.8827 2.9824 19.8698 2.99554 19.8569 3.0087L3.66916 19.5337C3.66889 19.534 3.66862 19.5343 3.66835 19.5345Z" stroke="white" stroke-width="2"/>
                                </svg>
                                
                            BLOG
                        </h3>
                    </div>
                    <div class="col-md-6 text-end-3">
                        <a class="btn-b btn-d " href="{{ url('/blog') }}">See More </a>
                    </div>
                    <div class="col-lg-6 mt-3 p-0 mb-0">
                        <a href="{{ url('/blog-detail') }}"  >
                            <img  src="{{ Module::asset('frontend:img/Artboard 2.png') }}" class="blog-imgt">
                        </a>
                    </div>
                    <div class="col-lg-6 text-end ">
                        <div class="text-editor text-start  ">
                            <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            <a href="{{ url('/blog-detail') }}"  >
                            
                             <h3 class="fs-24 fo-1">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                            <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                            <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                        </a>
                        </div>
                    </div>
                </div>

           </div>
        </div>
        <div class="the-container relative z-1 flex justify-between items-center">
            <div class="splide splide-blog " aria-label="Splide Basic HTML Example">
                <div class="splide__track splideup">
                    <ul class="splide__list">
                            
                      @php($blog = ['female-mechanic-holding-spare-parts-car 1.png',
                      'muscular-car-service-worker-repairing-vehicle (2) 1.png',
                      'repair-man-making-car-service 1.png',
                      'repair-man-making-car-service 1 (1).png'])

                      @foreach ($blog as $blog)
                        <li class="splide__slide"> 
                            <div class="box box-blog">
                                    <a href="{{ url('/blog-detail') }}">
                                        <div class="title-box box-b ">
                                            <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                                    
                                           
                                                <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                                
                                           
                                        </div>
                                
                                    <img src="{{ Module::asset("frontend:img/blog/$blog") }}"class="img-250 " alt="" >
                                 
                                </a>
                      </div>
                          
                        </li>
                        
                      @endforeach
                      
                     
                    
                    
                    </ul>
                    
                </div>
            </div>
            

        </div>
        <div class="text-center btn-m py-4 mt-4">

            <a class="btn-b  " href="{{ url('/blog') }}">See more </a>
        </div>
      </section>
      <!-- End Blog Section-->
       <!--Blog Section -->
       <section class="newsevent">
        
            <div class="the-container relative z-1 flex-1 ">
                <div class="flex flex-wrap items-center "> 
                    <div class="w-full md:w-6/12 ">
                        <h3 class="text-2nd p-0 fs-28 flex items-center ht-index">
                            <svg class="icon-svg" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_495)">
                                <path d="M27.5 13.125V15C27.5 20.8925 27.5 23.8387 25.6687 25.6687C23.84 27.5 20.8925 27.5 15 27.5C9.1075 27.5 6.16125 27.5 4.33 25.6687C2.5 23.84 2.5 20.8925 2.5 15C2.5 13.59 2.5 12.3475 2.525 11.25M16.875 2.5H15C9.1075 2.5 6.16125 2.5 4.33 4.33C3.78 4.88125 3.39375 5.53375 3.125 6.3375" stroke="white" stroke-width="3.125" stroke-linecap="round"/>
                                <path d="M8.75 17.5L10.9962 14.805C11.8862 13.7362 12.3312 13.2025 12.9162 13.2025C13.5025 13.2025 13.9475 13.7362 14.8375 14.805L15.1625 15.195C16.0525 16.2638 16.4975 16.7975 17.0837 16.7975C17.6687 16.7975 18.1137 16.2638 19.0037 15.195L21.25 12.5" stroke="white" stroke-width="3.125" stroke-linecap="round"/>
                                <path d="M23.75 10C25.8211 10 27.5 8.32107 27.5 6.25C27.5 4.17893 25.8211 2.5 23.75 2.5C21.6789 2.5 20 4.17893 20 6.25C20 8.32107 21.6789 10 23.75 10Z" stroke="white" stroke-width="3.125"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_1_495">
                                <rect width="30" height="30" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                                
                                NEWS & EVENTS
                        </h3>
                    </div>
                    <div class="w-full md:w-6/12 text-end-3  ">
                        <a class="btn-b btn-d" href="{{ url('/news-event') }}">See More</a>
                    </div>  
                
                </div>
                <div class="row flex-wrap items-center">
                    <div class="col-sm-6 col-lg-3 col-ss6 p-0">
                        <div class="box box-news">
                            <div class="box-co">
                          
                                <a href="{{ url('/news-details') }}">
                                    <div class="title-box box-b title-box2 ">
                                        <div class="flex items-center my-2 justify-between">
                                            <p class="flex items-center  fs-16 "><i class="bi-calendar4 mr-10"></i>13 MAY 2023</p>
                                           
                                          
                                        </div>
                                
                                       
                                            <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                            
                                       
                                    </div>
                            
                                 <img src="{{ Module::asset("frontend:img/240_F_564976589_QRW84naco3luG91aBftzhuTfVxFKrbM7.jpg") }}"class="img-350 " alt="" >
                             
                                </a>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-lg-3 col-ss6 p-0">
                        <div class="box box-news">
                            <div class="box-co">
                          
                                <a href="{{ url('/news-details') }}">
                                    <div class="title-box box-b title-box2 ">
                                        <div class="flex items-center my-2 justify-between">
                                            <p class="flex items-center  fs-16 "><i class="bi-calendar4 mr-10"></i>13 MAY 2023</p>
                                           
                                          
                                        </div>
                                
                                       
                                            <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                            
                                       
                                    </div>
                            
                                 <img src="{{ Module::asset("frontend:img/news/newsevent (2).png") }}"class="img-350 " alt="" >
                             
                                </a>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-lg-3 col-ss6 p-0">
                        <div class="box box-news">
                            <div class="box-co">
                          
                                <a href="{{ url('/news-details') }}">
                                    <div class="title-box box-b title-box2 ">
                                        <div class="flex items-center my-2 justify-between">
                                            <p class="flex items-center  fs-16 "><i class="bi-calendar4 mr-10"></i>13 MAY 2023</p>
                                           
                                          
                                        </div>
                                
                                       
                                            <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                            
                                       
                                    </div>
                            
                                 <img src="{{ Module::asset("frontend:img/news/newsevent (3).png") }}"class="img-350 " alt="" >
                             
                                </a>
                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-6 col-lg-3 col-ss6 p-0">
                        <div class="box box-news">
                            <div class="box-co">
                          
                                <a href="{{ url('/news-details') }}">
                                    <div class="title-box box-b title-box2 ">
                                        <div class="flex items-center my-2 justify-between">
                                            <p class="flex items-center  fs-16 "><i class="bi-calendar4 mr-10"></i>13 MAY 2023</p>
                                           
                                          
                                        </div>
                                
                                       
                                            <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                            
                                       
                                    </div>
                            
                                 <img src="{{ Module::asset("frontend:img/news/newsevent (4).png") }}"class="img-350 " alt="" >
                             
                                </a>
                                
                            </div>
                        </div> 
                    </div>
                </div>
           
            <div class="text-center btn-m py-4">

                <a class="btn-b " href="{{ url('/news-event') }}">See More</a>
            </div>
      
  
      </section>
      <!-- End Blog Section-->

    </main>
@endsection

@section('script')

    <script>
        splideFull(".splide-banner-slide", {
            heightRatio: 0.4,
            arrows: false,
        })
        $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > 100){
            $(".navbae-header ").css({"background-color":"#fff"});   
        }
        else{
            $(".navbae-header ").css({"background-color":"#ffffff8f"})
           
        }

    })
})

    </script>

@endsection
