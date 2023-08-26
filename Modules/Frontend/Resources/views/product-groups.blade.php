@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main>
                 
                
                
            <section class="recent-posts  section-bg-posts ">

                <div class="the-container"> 
                 <!-- ======= Recent News & Activity Section ======= -->
                 <div class="breadcrumbs d-flex p-0" >
                     <div class=" position-relative d-flex flex-column ">
                        <ol>
                            <li ><a href="{{ url('/') }}" class="breadcrumbsl ">
                            
                                Home
                                <i class="bi-chevron-right"></i>
                            </a>
                           </li>
                       
                            <li>
                                <a href="{{ url('/products') }}" class="breadcrumbsl2">
                                <i class="bi-chevron-left btn-banner"></i> 
                                Product Category
                                <i class="bi-chevron-right ibanner"></i>
                                </a>
                            </li>
                        <li  class="lbanner" > Category 1 </li>
                      </ol>
                        <h1  class="mt-2" >หมวดหมู่สินค้า</h1>
                    </div>
                </div><!-- End Breadcrumbs -->
              
                  <div class="member-grid-controller">
                        <div class="member-navigator relative flex flex-col-reverse lg:flex-col ">
                        
                            <div class="sticky  mb-0 lg:mb-0 menu-d">
            
                                <div class="hidden lg:block">
                                    <ul class="mmenu ">
                                        <li class="full-url mb-2 il-article active">
                                            <p class="th-4 fs-18   ">Category 1</p>
                                            <a href="{{ url('#') }}"></a>
                                        </li>
                                        <li class="full-url mb-2 il-article">
                                            <p class="th-4 fs-18"> Category 2</p>
                                            <a href="{{ url('#') }}"></a>
                                        </li>
                                        <li class="full-url mb-2 il-article">
                                            <p class="th-4 fs-18">Category 3</p>
                                            <a href="{{ url('#') }}"></a>
                                        </li>
                                        <li class="full-url mb-2 il-article">
                                            <p class="th-4 fs-18">Category 4</p>
                                            <a href="{{ url('#') }}"></a>
                                        </li>
                                        <li class="full-url mb-2 il-article">
                                            <p class="th-4 fs-18">Category 5</p>
                                            <a href="{{ url('#') }}"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="member-information">
                            <div class="layout">
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="tn:w-1/2 md:w-1/3 mb-[1rem]">
                                    <div class="products-box">
                                                            
                                        <div class="products-img">
                                        <a href="{{ url('/product-details') }}">
                                            
                                            <img src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}"class="img-fluid products img-post-lits" alt="" >
                                        </a>
                                        </div>
                                        <div class="title-products-c">
                                            <a href="{{ url('/product-details') }}">
                                            <h3 class="fo-1 th-5">Product Title 1</h3>
                                            </a>
                                            <p class="fo-2">Lorem ipsum dolor sit amet, consectetur
                                                Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                       
                                    </div>
                                </div>
                              
                              
                            
                            
                        
                            </div>
                            <div class="mt-6">
                                <ul class="pgntn rounded" role="menubar" aria-label="Pagination">
                                    <li><a href=""><span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg></span></a></li>
                                    <li class="current"><a href="">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><a href="">4</a></li>
                                    <li><a href=""><span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                </svg></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
         
           
       
             </section>
      
        </main>
@endsection

@section('script')



@endsection
