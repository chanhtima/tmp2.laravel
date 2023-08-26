@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main>

          <section class="event details-s">
            <div class="container">
                <div class="row justify-center align-items-center ">
                    <div class="col-12 "> 
                        <div class="flex items-center justify-content-center"><i class="bi-calendar4 mr-10"></i><p>13 MAY 2023</p></div>
                        <h3 class="fs-24 fo-1 title-hp hp-canter text-center">การขับขี่รถยนต์บนท้องถนน มั่นใจเเค่ไหน</h3>
                        <img  src="{{ Module::asset("frontend:img/240_F_564976589_QRW84naco3luG91aBftzhuTfVxFKrbM7.jpg") }}" class="border-r0 mt-3" >
                      
                  
                    </div>

                 
                </div>
                <div class="row justify-center align-items-center py-6">
                    <div class="col-12">
                        <h3 class="fs-24 fo-1">Lorem ipsum dolor sit amet consectetur </h3>
                        <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                        <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                   
                    </div>
                    <div class="col-lg-6">
                        <h3 class="fs-24 fo-1">Lorem ipsum dolor sit amet consectetur </h3>
                       <p class="text-2nd pt-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p><br />
                       <p class="text-2nd pb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi cum qui temporibus esse saepe. Nostrum non minus quia neque inventore, cum maiores numquam tempore! Libero earum eius velit atque dolore.</p>
                  
                    </div>
                    <div class="col-lg-6">
                        <img  src="{{ Module::asset("frontend:img/happy-woman-car-dealership 2.png") }}">
                    </div>
                
                </div>
          
   
          </section>
      
    </main>
@endsection

@section('script')


@endsection
