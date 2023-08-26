@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>
   
   
   
        <section class="newsevent bg-8">
            <div class="the-container">
                        
                        <div class="flex flex-wrap items-center"> 
                            <div class="w-full">
                                <h3 class="text-2nd p-0 fs-26 flex items-center">
                                                    
                                    <svg class="icon-svg" width="30" height="30" viewBox="0 0 29 29" fill="none"   xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.8193 7.4364C27.7792 7.21932 27.694 7.01309 27.5691 6.83109C27.4442 6.64909 27.2824 6.49539 27.0943 6.37997L22.9514 10.5228C22.7582 10.7233 22.5265 10.8828 22.2703 10.9917C22.014 11.1006 21.7384 11.1567 21.46 11.1567C21.1815 11.1567 20.9059 11.1006 20.6497 10.9917C20.3934 10.8828 20.1618 10.7233 19.9685 10.5228L18.3943 9.11426C18.0147 8.72705 17.8021 8.20646 17.8021 7.66426C17.8021 7.12206 18.0147 6.60147 18.3943 6.21426L22.5371 2.0714C22.4468 1.85916 22.3109 1.66936 22.1391 1.51544C21.9672 1.36152 21.7637 1.24724 21.5428 1.18069C20.0973 0.892426 18.5999 1.01582 17.2211 1.53681C15.8423 2.05781 14.6375 2.95547 13.7438 4.12761C12.8502 5.29974 12.3035 6.69925 12.1662 8.1668C12.0289 9.63435 12.3064 11.111 12.9671 12.4285L1.65712 23.635C1.45982 23.8279 1.30306 24.0583 1.19603 24.3126C1.08901 24.5669 1.03387 24.8401 1.03387 25.116C1.03387 25.392 1.08901 25.6651 1.19603 25.9195C1.30306 26.1738 1.45982 26.4042 1.65712 26.5971L2.40283 27.3428C2.59575 27.5401 2.82614 27.6969 3.08047 27.8039C3.33481 27.9109 3.60796 27.9661 3.8839 27.9661C4.15984 27.9661 4.433 27.9109 4.68733 27.8039C4.94167 27.6969 5.17206 27.5401 5.36497 27.3428L16.675 16.0535C17.9929 16.6815 19.4592 16.9315 20.9107 16.7759C22.3623 16.6203 23.7422 16.0651 24.8971 15.1721C26.052 14.2791 26.9366 13.0833 27.4524 11.7176C27.9683 10.3519 28.0953 8.86993 27.8193 7.4364Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    CATEGORIES</h3>
                            </div>
                        

                        </div> 
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="products-box  mx-0 my-3">
                            <div class="title-products-c">
                               <h3 class="fo-2">Category</h3>
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
                    </div>
                </div>
                <div class="mt-6">
                    <ul class="pgntn rounded" role="menubar" aria-label="Pagination">
                        <li><a href=""><i class="bi bi-chevron-left"></i></a></li>
                        <li class="current"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
          </section>
    </main>
@endsection

@section('script')


@endsection
