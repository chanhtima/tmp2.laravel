@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>
       

          <section class="event details-s">
            <div class="container">

                <div class="row justify-center align-items-center ">
                    <div class="col-12">
                        <div class="flex items-center justify-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                        <h3 class="fs-24 fo-1 title-hp hp-canter text-center">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                        <img  src="{{ Module::asset("frontend:img/Artboard 2.png") }}" class="border-r0 mt-3">
                    </div>
                    <div class="col-12 pt-3">
                     
                       <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                       <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                  
                    </div>
                </div>
                <div class="row justify-center align-items-center">
                    <div class="col-12">
                        <h3 class="fs-24 fo-1">Lorem ipsum dolor sit amet consectetur </h3>
                       <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                       <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                  
                    </div>
                    <div class="col-sm-4 mt-3">
                        <img  src="{{ Module::asset("frontend:img/home/Mask-group-blog.png") }}" class="img-250">
                    
                    </div>
                    <div class="col-sm-4 mt-3">
                        <img  src="{{ Module::asset("frontend:img/home/Mask-group-blog.png") }}" class=" img-250">
                    
                    </div>
                    <div class="col-sm-4 mt-3">
                        <img  src="{{ Module::asset("frontend:img/home/Mask-group-blog.png") }}" class="img-250">
                    
                    </div>
                </div>
          
   
          </section>
      
    </main>
@endsection

@section('script')


@endsection
