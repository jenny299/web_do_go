<link rel="stylesheet" href="frontend/assets/plugins/colorbox/colorbox.css" />
<script src="frontend/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<div class="row">
     @foreach($congtrinh as $row)
       
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail caption-effect">
                    <a class="group{{ $row->id }}" href="{{url($row->image)}}">
                        <div class="thumbnail-smash-hover"><button style="min-width:0px !important;">
                            @if(Session::get('locale')=='vn')
                                                Chi Tiết
                                        @elseif(Session::get('locale')=='en')
                                                More Detail
                                        @else
                                                Chi Tiết
                                        @endif

                        </button></div>
                        <img src="{{url($row->image)}}" alt="...">
                        <div class="caption">
                            
                                        @if(Session::get('locale')=='vn')
                                            {{$row->title}}
                                        @elseif(Session::get('locale')=='en')
                                            {{$row->titleen}}
                                        @else
                                            {{$row->title}}
                                        @endif
                        </div>
                    </a>
                </div>
                @foreach($row->photos as $photo)
                    <a class="group{{ $row->id }}" href="{{url($photo->image)}}"></a>
                @endforeach
                <script>
                    $(".group{{ $row->id }}").colorbox({rel:'group{{ $row->id }}'});
                </script>
            </div>
    @endforeach
</div>




