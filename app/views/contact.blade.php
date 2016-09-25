@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')

 <div class="row row-wrap">
  <div class="col-md-6">
      <div id="map-canvas" style="width:100%; height:300px;"></div>
  </div> 
  <div class="col-md-3">
      <form name="contactForm" id="contact-form" class="contact-form" method="post">
          <input type="text" id="action_url" style="display:none;" value="{{Asset('/lien-he')}}">
          @if(Session::get('locale')=='vn')
            <fieldset>
                <div class="form-group">
                    <label>Tên</label>
                    <div class="bg-warning form-alert" id="form-alert-name">Vui lòng nhập tên</div>
                    <input class="form-control" id="name" name="name" type="text" placeholder="Nhập tên" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="bg-warning form-alert" id="form-alert-email">Vui lòng nhập email hợp lệ</div>
                    <input class="form-control" id="email" name="email" type="text" placeholder="Nhập email" />
                </div>
                <div class="form-group">
                    <label>Tin nhắn</label>
                    <div class="bg-warning form-alert" id="form-alert-message">Vui lòng nhập tin nhắn</div>
                    <textarea class="form-control" id="message" name="message" placeholder="Nhập tin nhắn"></textarea>
                </div>
                <div class="bg-warning alert-success form-alert" id="form-success">Tin nhắn của bạn đã được gửi đi!!!</div>
                <div class="bg-warning alert-error form-alert" id="form-fail">Xảy ra lỗi, tin nhắn của bạn chưa được gửi đi!!!</div>
                <button id="send-message" type="submit" class="btn btn-primary">Gửi tin nhắn</button>
            </fieldset>
          @elseif(Session::get('locale')=='en') 
            <fieldset>
                <div class="form-group">
                    <label>Name</label>
                    <div class="bg-warning form-alert" id="form-alert-name">Please enter your name</div>
                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter Your name here" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="bg-warning form-alert" id="form-alert-email">Please enter your valid E-mail</div>
                    <input class="form-control" id="email" name="email" type="text" placeholder="You E-mail Address" />
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <div class="bg-warning form-alert" id="form-alert-message">Please enter message</div>
                    <textarea class="form-control" id="message" name="message" placeholder="Your message"></textarea>
                </div>
                <div class="bg-warning alert-success form-alert" id="form-success">Your message has been sent successfully!</div>
                <div class="bg-warning alert-error form-alert" id="form-fail">Sorry, error occured this time sending your message</div>
                <button id="send-message" type="submit" class="btn btn-primary">Send Message</button>
            </fieldset>
          @else

          @endif
          
      </form>
  </div>
  <div class="col-md-3 info-contact-cus">
      @if(Session::get('locale')=='vn') 
          <h4>Thông tin liên lạc</h4>
          @if($footer[0]->id==1)
          <ul class="list">
            <li><i class="icon-map-marker"></i><label> Địa chỉ: </label>  {{$footer[0]->diachi}}</li>
            <li><i class="icon-phone"></i><label> Điện thoại: </label> {{$footer[0]->dienthoai}}</li>
            <li><i class="icon-envelope"></i><label> E-mail: </label><a href="mailto:{{$footer[0]->email}}"> {{$footer[0]->email}}</a>
            </li>
          </ul>
          @endif
      @elseif(Session::get('locale')=='en') 
          <h4>Contact Info</h4>
          @if($footer[1]->id==2)
          <ul class="list">
            <li><i class="icon-map-marker"></i> <label>Address: </label>  {{$footer[0]->diachi}}</li>
            <li><i class="icon-phone"></i><label> Phone: </label> {{$footer[0]->dienthoai}}</li>
            <li><i class="icon-envelope"></i> <label>E-mail: </label> <a href="mailto:{{$footer[0]->email}}">{{$footer[0]->email}}</a>
            </li>
          </ul>
          @endif
      @else
          <h4>Thông tin liên lạc</h4>
          @if($footer[0]->id==1)
          <ul class="list">
            <li><i class="icon-map-marker"></i> <label>Địa chỉ: </label>  {{$footer[0]->diachi}}</li>
            <li><i class="icon-phone"></i> <label>Điện thoại: </label> {{$footer[0]->dienthoai}}</li>
            <li><i class="icon-envelope"></i> <label>E-mail: </label> <a href="mailto:{{$footer[0]->email}}"> {{$footer[0]->email}}</a>
            </li>
          </ul>
          @endif
      @endif
      
  </div>
</div>
<div class="gap gap-small"></div>


<script type="text/javascript">
$(document).ready(function(){
  var lat = '{{$lat}}';
    var log = '{{$log}}';

    if(!lat){
        lat = -37.810546;
    }
    if(!log){
        log = 145.00259800000003;
    }

    $('#map-canvas').locationpicker({
        location: {latitude: lat, longitude: log},
        zoom:17,
        radius: 0,
        inputBinding: {
            latitudeInput: $('#maps_latitude'),
            longitudeInput: $('#maps_longitude'),
            // radiusInput: $('#us2-radius'),
            locationNameInput: $('#maps_address')
        },
        enableAutocomplete: true
    });
});

</script>
@endsection
