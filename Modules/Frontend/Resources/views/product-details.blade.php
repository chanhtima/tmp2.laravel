@extends('frontend::layouts.master')
@section('title')

@section('style')
<style>
 .slider-container {
      display: flex;
      overflow-x: scroll;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      -webkit-overflow-scrolling: touch;
      margin-bottom: 10px;
    }

</style>
@endsection

@section('content')

    <main>
        <!-- ======= Recent News & Activity Section ======= -->
        <div class="breadcrumbs d-flex mt-6" >
            <div class="container position-relative d-flex flex-column">
                <ol>
                    <li ><a href="{{ url('/') }}" class="breadcrumbsl ">
                    
                        Home
                        <i class="bi-chevron-right"></i>
                    </a>
                   </li>
                   <li ><a href="{{ url('/products') }}" class="breadcrumbsl ">
                       Products
                       <i class="bi-chevron-right"></i>
                    </a>
                   </li>
                    <li>
                        <a href="{{ url('/product-groups') }}" class="breadcrumbsl2">
                        <i class="bi-chevron-left btn-banner"></i> 
                        Category 1
                        <i class="bi-chevron-right ibanner"></i>
                        </a>
                    </li>
                <li  class="lbanner" > Products Detail </li>
              </ol>
      
            </div>
          </div><!-- End Breadcrumbs -->
       <!--Blog Section -->
       <section  class="pt-1" >
        <div class="bg-30 py-4 bg-45">
            <div class="container  relative z-1 flex-1 ">
               <div class="row justify-center items-center">
                    <div class=" col-lg-5">
                        <div class="prod-showcase">
                            <div class="splide flex-auto main-slider mb-3">
                                <div class="splide mx-auto main-slider" id="main-slider">
                                    <div class="splide__track">
                                        <div class="splide__list">
                                            <div class="splide__slide">
                                                  <div class="box-mt">
                                                    <img class="main-image" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Main Image">
                                                    </div>
                                             </div>
                                            <div class="splide__slide">
                                                  <div class="box-mt">
                                                    <img class="main-image" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Main Image">
                                                    </div>
                                            </div>
                                            <div class="splide__slide">
                                                <div class="box-mt">
                                                  <img class="main-image" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Main Image">
                                                  </div>
                                          </div>
                                          <div class="splide__slide">
                                            <div class="box-mt">
                                              <img class="main-image" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Main Image">
                                              </div>
                                      </div>
                                      <div class="splide__slide">
                                        <div class="box-mt">
                                          <img class="main-image" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Main Image">
                                          </div>
                                  </div>
                                  <div class="splide__slide">
                                    <div class="box-mt">
                                      <img class="main-image" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Main Image">
                                      </div>
                              </div>
                                            <div class="splide__slide">
                                                  <div class="box-mt">
                                                    <img class="main-image" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Main Image">
                                                    </div>
                                            </div>
                                      
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="splide thumbnails relative" id="thumbnails">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                           <div class="box-t">
                                                    <img class="thumbnail" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Image 1">
                                                </div>
                                        </li>
                                        <li class="splide__slide">
                                           <div class="box-t">
                                                    <img class="thumbnail" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Image 1">
                                                </div>
                                        </li>
                                        <li class="splide__slide">
                                           <div class="box-t">
                                                    <img class="thumbnail" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Image 1">
                                                </div>
                                        </li>
                                        <li class="splide__slide">
                                           <div class="box-t">
                                                    <img class="thumbnail" src="{{ Module::asset("frontend:img/home/pd-1 1.png") }}" alt="Image 1">
                                                </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="box-t">
                                                     <img class="thumbnail" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Image 1">
                                                 </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="box-t">
                                                     <img class="thumbnail" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Image 1">
                                                 </div>
                                        </li>
                                        <li class="splide__slide">
                                            <div class="box-t">
                                                     <img class="thumbnail" src="{{ Module::asset("frontend:img/silver-zinc-plating.jpg") }}" alt="Image 1">
                                                 </div>
                                        </li>
                                       
                                       
                                        
                                       
                                    </ul>
                                    <div class="splide__arrows"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-7  title-pd">
                            <div class="container">
                                <h2 class="title-hp pb-3 fs-30">Product Title 1</h2>
                                <p class="pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                <p class="th-5 fs-20">Why do we use it?</p>
            <p class="pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
                            </div>
                    </div>  
                    
               </div>
            </div>
        </div>  
        <div class="container p-3">
            <p class="th-5 fs-20">Why do we use it?</p>
            <p class="pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
            <p class="th-5 fs-20">Why do we use it?</p>
            <p class="pb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> 
        </div>
       
   
      </section>
    
   
    </main>

   
@endsection

@section('script')


@endsection
