@extends('frontend::layouts.master')
@section('title')

@section('style')

@endsection

@section('content')

    <main >
        
        <section class="pb-0">
            <div class="the-container relative z-1 flex-1  ">
                <div class="d-contact">
                    <div class="px-6 w-full" >
                        <div class="form-wrapper rounded-md line-form ">
                            <div class="flex flex-wrap">
                                <div class="w-full md:px-6  2xl:pr-20 overflow-x-hidden ">
                                    <p class=" th-5 fs-36 uppercase text-center mb-3r">ติดต่อเจ้าหน้าที่</p>
                                    
                                </div>
                                <div class="w-full md:px-8 py-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class=" mb-3 mx-0">
                                                
                                                <label class="th-3 pt-3 fa-10x">*ชื่อ-นามสกุล</label>
                                               <input type="text" class="form-style font-weight-semibold px-2 py-3" name="name" placeholder="ชื่อ-นามสกุล" data-msg-required="This field is required." id="name" required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row mx-0 mb-3">
                                                <label class="th-3 pt-3 px-0 fa-10x">*Email Address</label>
                                          <input type="email" class="form-style font-weight-semibold px-2 py-3" name="email" placeholder="Email Address" data-msg-required="This field is required." id="email" required="">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6">
                                            <div class="mx-0 mb-3">
                                                <label class="th-3 pt-3 fa-10x">*เบอร์โทรศัพท์</label>
                                                <input type="tel" class="form-style font-weight-semibold px-2 py-3" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="เบอร์โทรศัพท์" data-msg-required="This field is required." id="name" required="">
    
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mx-0 mb-3">
                                                <label class="th-3 pt-3 px-0 fa-10x"><span class="contact-x">*</span>เรื่องที่ต้องการติดต่อ</label>
                                                <input type="text" class="form-style font-weight-semibold px-2 py-3" name="name" placeholder="เรื่องที่ต้องการติดต่อ" data-msg-required="This field is required." id="name" required="">
                                 
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row mx-0 mb-3">
                                                <label class="th-3 pt-3 px-0 fa-10x"><span class="contact-x">*</span>รายละเอียดที่ต้องการติดต่อ</label>
                                                <textarea name="message" id="message" rows="4" class="form-style form-style font-weight-semibold text-color-light px-2 py-3" placeholder="กรุณากรอกรายละเอียดของท่าน"></textarea>
                                            </div>
                                           
                                            <div class=" flex d-fcontact mt-4">
                                                <input type="checkbox" class=" mx-1" id="accept" name="accept" value="accept">
                                                <label class="textd-fcontact" for="accept" of="policy">ฉันได้อ่านและยอมรับข้อกำหนดและเงื่อนไขที่ระบุไว้ใน
                                                    <a class="text-1st" href="{{ url('/policy') }}">
                                                        <u>นโยบายความเป็นส่วนตัว</u></a>
                                                </label>
                                            </div>
                                            <img class="pt-4" src="{{ Module::asset('frontend:img/blog/image7.png') }}" >
                                            <div class="pt-6 ">
                                                <button class="bg-dark rounded-md  py-2 text-whiten mx-auto btn-dark btn-contact" type="submit"data-bs-toggle="modal" data-bs-target="#exampleModal">SEND MESSAGE</button>
                                            </div>
                                          
                                        </div>
                                    
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </div>
            
              
             </div>
             <div class="layout layouy-contact if-m">
                <div class="map-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3261135910216!2d100.56324906524183!3d13.75919694034272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d4918d39f69%3A0x7c82b5cfabbf1f4a!2sFortune%20Town!5e0!3m2!1sen!2sth!4v1679977584185!5m2!1sen!2sth" width="600" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="box-contact ">
                        
                       
                            <div class="icon-contact flex ">
                                <img src="{{ Module::asset('frontend:img/home/icon-2.png') }}" class="img-20">
                                <p class="fs-16 mx-3"><span class="th-6 me-1"> Address : </span>20/17 ซอย นาคบำรุง แขวงคลองมหานาค เขตป้อมปราบศัตรูพ่าย กรุงเทพมหานคร 10100 </p>
        
                            </div>
                            
                            <div class="icon-contact flex items-center">
                                <img src="{{ Module::asset('frontend:img/home/icon-1.png') }}" class="img-20">
                                <p class="fs-16 mx-3"><span class="th-6 me-1"> Tell :  </span>022263400</p>
        
                            </div>
                                  
                            <div class="icon-contact flex  icon-email">
                                <img src="{{ Module::asset('frontend:img/home/icon-3.png') }}" class="img-20">
                                <p class="fs-16 mx-3"><span class="th-6 me-1"> Email :   </span>pitinauto.thailand@gmail.com</p>
        
                            </div>
                            <div class="icon-contact flex icon-we">
                                <img src="{{ Module::asset('frontend:img/home/icon-4.png') }}" class="img-20">
                                <p class="fs-16 mx-3"><span class="th-6 me-1"> We are open:    </span>Monday - Saturday: 9:00 AM - 6:00 PM</p>
        
                            </div>
                            
                            
                            
                        
                </div>
        
            </div>
                    <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="flex flex-col items-center justify-center flex-wrap p-5">
                        <div class="p-[.25rem]">
                            <img class="confirm-size" src="//test.makemydaygroup.com/modules/frontend/img/icon/mod-ok.svg">
                        </div>
                        <div class="flex">
                            <p class="fs-18"><span class="th-6">ขอบคุณ </span>ข้อความของคุณถูกส่งไปเรียบร้อย.</p>
                        </div>
                        <div class="p-[.25rem]">
                            <button class="butn-w-2h butn-con w-full btn-b" type="button" onclick="window.location.reload()">ตกลง</button>
                        </div>
                    </div>
                    <button class="closedd btnclosedd" onclick="window.location.reload()">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.26624 0.939209L12.6121 12.2852" stroke="black"></path>
                            <path d="M1.26611 12.2852L12.6121 0.939331" stroke="black"></path>
                        </svg>
                    </button>
                </div>
                </div>
                </div>
            </div>
          </section>  
        
       
    </main>
@endsection

@section('script')
<script>


  </script>


@endsection
