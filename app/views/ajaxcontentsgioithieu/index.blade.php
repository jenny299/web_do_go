<div class="row">
     @foreach($gioithieu as $row)
    <div class="col-sm-12 col-md-12" id="nd-gioithieu">
        @if(Session::get('locale')=='vn')
              {{$row->noidung}}
           @elseif(Session::get('locale')=='en')
         		{{$row->noidungen}}
   		 @else
           {{$row->noidung}}
      @endif 
    </div>
    @endforeach
</div>
