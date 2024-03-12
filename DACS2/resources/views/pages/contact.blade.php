@extends('welcome')
@section('content') 

  <!--contact area css satrt-->
            <div class="contact_area ptb-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="contact_map_wrapper">
                                <div class="contact_map mb-40">
                                    <!-- Contact Map Start -->
									<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.3919236065485!2d108.25620511485748!3d15.993100688928022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314210958476684d%3A0x6e4831f1ceaa579b!2zNDcwIMSQxrDhu51uZyBUcuG6p24gxJDhuqFpIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDA!5e0!3m2!1svi!2s!4v1622119795395!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
									<!-- Contact Map End -->   
                                </div>
                                <div class="contact-message">
                                    <div class="contact_title">
                                        <h4>Thông tin liên hệ</h4>    
                                    </div>
                                    <form id="contact-form" method="post"  action="http://d29u17ylf1ylz9.cloudfront.net/organicfood-v1/assets/mail.php">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="contact_n">Name<span>*</span></label>
                                                <input name="name" id="contact_n" type="text">    
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="contact_n2">Email<span>*</span></label>
                                                <input name="email" id="contact_n2" type="email">    
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="contact_n3">Telephone</label>
                                                <input name="phone" id="contact_n3" type="text">    
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="contact_n4">subject</label>
                                                <input name="subject" id="contact_n4" type="text">    
                                            </div>
                                           <div class="col-12">
                                                <div class="contact-textarea">
                                                    <label>Comment<span>*</span></label>
                                                    <textarea name="message"  class="form-control2" required=""></textarea>     
                                                </div>   
                                                <button type="submit"> Send Message </button>  
                                            </div> 
                                        </div>
                                        <p class="form-messege"></p>
                                    </form>    
                                </div>    
                            </div>      
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="contact_info_wrapper">
                                <div class="contact_title">
                                    <h4>VỊ TRÍ & CHI TIẾT</h4>    
                                </div>
                                <div class="contact_info mb-15">
                                    <div class="contact_info_icone">
                                        <a href="#"><i class="icofont icofont-location-pin"></i></a>    
                                    </div>
                                    <div class="contact_info_text">
                                        <p><span>Địa chỉ:</span>  470 Trần Đại Nghĩa<br>Ngũ Hành Sơn - Đà Nẵng.</p>    
                                    </div>    
                                </div>
                                 <div class="contact_info mb-15">
                                    <div class="contact_info_icone">
                                        <a href="#"><i class="icofont icofont-email"></i></a>    
                                    </div>
                                    <div class="contact_info_text">
                                        <p><span>Email: </span>  hthvan.20it2@vku.udn.vn </p>  
                                    </div>    
                                </div>
                                 <div class="contact_info mb-15">
                                    <div class="contact_info_icone">
                                        <a href="#"><i class="icofont icofont-phone"></i></a>    
                                    </div>
                                    <div class="contact_info_text">
                                        <p><span>Điện thoại:</span>  <li>+(84) 0837.463.402</li> 
                                                                    <li>+(84) 0943.089.718</li>
                                        </p> 
                                    </div> 
                                </div>
                                <div class="contact_info mb-15">
                                    <div class="contact_info_icone">
                                        <a href="#"></a>    
                                    </div>
                                    <div class="contact_info_text">
                                        <p><span>Thời gian làm việc</span> <br>Thứ 2 đến Thứ 6 từ 8h đến 18h; Thứ 7 và Chủ nhật từ 8h00 đến 17h00</p> 
                                    </div> 
                                </div>    
                            </div>    
                        </div>      
                    </div>    
                </div>   
            </div>
            <!--contact area css end-->

@endsection