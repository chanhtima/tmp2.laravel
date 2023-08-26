@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>
    
          <section class="event bg-8">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <h3 class="text-2nd p-0 fs-26 flex items-center">
                            <svg class="icon-svg" width="30" height="31" viewBox="0 0 30  31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.66835 19.5345C3.65579 19.5474 3.64287 19.5605 3.62962 19.5739C3.4806 19.7251 3.29198 19.9165 3.15832 20.1568C3.02466 20.3971 2.96152 20.6583 2.91164 20.8647C2.90711 20.8834 2.90269 20.9017 2.89834 20.9195L1.22695 27.7443L2.19824 27.9822L1.22695 27.7443C1.2242 27.7555 1.22133 27.7672 1.21837 27.7792C1.18225 27.9259 1.13222 28.129 1.11552 28.3087C1.09629 28.5155 1.09177 28.9675 1.46236 29.3345C1.83295 29.7016 2.2849 29.6927 2.4915 29.6714C2.67103 29.653 2.87369 29.601 3.02001 29.5634C3.03201 29.5604 3.04362 29.5574 3.05482 29.5545L9.70487 27.8574L9.70488 27.8574C9.70563 27.8572 9.70638 27.857 9.70713 27.8568C9.72452 27.8524 9.74239 27.8479 9.76068 27.8432C9.97088 27.7903 10.2369 27.7233 10.4801 27.5831C10.7233 27.443 10.9147 27.2464 11.0659 27.0911C11.0796 27.077 11.093 27.0632 11.1061 27.0499L27.3434 10.4743L27.3809 10.436C27.672 10.139 27.9555 9.84964 28.1579 9.57922C28.3864 9.27397 28.6001 8.88061 28.6001 8.375C28.6001 7.86939 28.3864 7.47602 28.1579 7.17078C27.9555 6.90036 27.672 6.61105 27.3809 6.314L27.3434 6.27566L24.1431 3.0087L24.1045 2.96929C23.802 2.66036 23.5086 2.3608 23.2338 2.14702C22.9243 1.90634 22.5218 1.67902 22 1.67902C21.4782 1.67902 21.0757 1.90634 20.7662 2.14702C20.4914 2.36079 20.198 2.66034 19.8955 2.96927C19.8827 2.9824 19.8698 2.99554 19.8569 3.0087L3.66916 19.5337C3.66889 19.534 3.66862 19.5343 3.66835 19.5345Z" stroke="white" stroke-width="2"/>
                                </svg>
                                
                            BLOG
                        </h3>
                    </div> 
                </div>
                <div class="row justify-center align-center">
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                                <div class="box box-blog box-news">
                                    <a href="{{ url('/blog-detail') }}">
                                        <div class="title-box box-b ">
                                            <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                                    
                                           
                                                <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                                
                                           
                                        </div>
                                
                                        <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                                 
                                    </a>
                               </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                   
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                   
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                         
                            </a>
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                   
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                   
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                         
                            </a>
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                     <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                     </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                   
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                   
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                         
                            </a>
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                    <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                    </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                   
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                   
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                         
                            </a>
                       </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                        <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-ss6 p-0">
                    <div class="box box-blog box-news">
                            <a href="{{ url('/blog-detail') }}">
                                <div class="title-box box-b ">
                                    <div class="flex items-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                            
                                
                                        <h3 class="fo-2 fs-16">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                                        
                                
                                </div>
                        
                                <img src="{{ Module::asset("frontend:img/Artboard 2.png") }}"class="img-250 " alt="" >
                        
                            </a>
                    </div>
                    </div>
            
                    
                          
             
                </div>
                    
            </div>
            <div class="mt-6 py-6">
                <ul class="pgntn rounded" role="menubar" aria-label="Pagination">
                    <li><a href=""><i class="bi bi-chevron-left"></i></a></li>
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href=""><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div>
          </section>
      
    </main>
@endsection

@section('script')


@endsection
