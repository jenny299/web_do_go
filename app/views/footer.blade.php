<footer class="main">
    <div class="footer-top-area">
        <div class="container footer-custom">
           <div class="row wrapper-info">
              <!--  <div class="col-md-7 company-name"><h2>CTY CP KIEN LINH VIET NAM</h2></div>
               <div class="col-md-5 company-info">
                   <div class="address-content">
                        1/10/44/4 Duong 53-KP8 - P.Hiep Binh Chanh - Q.Thu Duc <br>
                        Dien thoai: (08)37252052 - 0908113114 <br>
                        Email: info@kienlinhvietnam.com
                    </div>
               </div> -->
                @if(Session::get('locale')=='vn') 
                   @if($footer[0]->id==1)
                   <div class="col-md-7 company-name"><h2>{{$footer[0]->tencty}}</h2></div>
                   <div class="col-md-5 company-info">
                      <div>
                           {{$footer[0]->diachi}} <br>
                           Điện thoại: {{$footer[0]->dienthoai}} <br>
                           Email: {{$footer[0]->email}}
                       </div>
                   </div>
                   @endif
               @elseif(Session::get('locale')=='en') 
                   @if($footer[1]->id==2)
                   <div class="col-md-7 company-name"><h2>{{$footer[1]->tencty}}</h2></div>
                   <div class="col-md-5 company-info">
                      <div>
                           {{$footer[1]->diachi}} <br>
                           Phone: {{$footer[1]->dienthoai}} <br>
                           Email: {{$footer[1]->email}}
                       </div>
                   </div>
                   @endif
               @else
                   @if($footer[0]->id==1)
                   <div class="col-md-7 company-name"><h2>{{$footer[0]->tencty}}</h2></div>
                   <div class="col-md-5 company-info">
                      <div>
                           {{$footer[0]->diachi}} <br>
                           Điện thoại: {{$footer[0]->dienthoai}} <br>
                           Email: {{$footer[0]->email}}
                       </div>
                   </div>
                   @endif
               @endif
           </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright © 2014, Your Store, All Rights Reserved</p>
                </div>
                <div class="col-md-6 col-md-offset-2">
                    <div class="pull-right">
                        <ul class="list-inline list-payment">
                            <li>
                                <img src="img/payment/american-express-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/cirrus-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/discover-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/ebay-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/maestro-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/mastercard-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                            <li>
                                <img src="img/payment/visa-curved-32px.png" alt="Image Alternative text" title="Image Title" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>