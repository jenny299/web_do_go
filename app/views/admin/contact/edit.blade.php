

<!-- Main content -->

<section id="widget-grid">

    <div class="row">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget jarviswidget-color-blueDark"  data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">

                <!-- widget options:

                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"

                data-widget-editbutton="false"

                data-widget-togglebutton="false"

                data-widget-deletebutton="false"

                data-widget-fullscreenbutton="false"

                data-widget-custombutton="false"

                data-widget-collapsed="true"

                data-widget-sortable="false"

                -->

                <!-- widget div-->

                <header>

                    <h2><a href="#contact" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Content</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" enctype="multipart/form-data" id="form1">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        
                                        <label class="label" for="">Tên Công Ty</label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="tencty" value="{{$id->tencty}}">
                                        </label>
                                        <p><br></p>
                                        
                                        <label class="label" for="">Địa Chỉ</label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="diachi" value="{{$id->diachi}}">
                                        </label>
                                        <p><br></p>
                                        
                                        <label class="label" for="">Điện Thoại</label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="dienthoai" value="{{$id->dienthoai}}">
                                        </label>
                                        <p><br></p>
                                        
                                        <label class="label" for="">Fax</label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="fax" value="{{$id->fax}}">
                                        </label> 
                                        <p><br></p>                                       
                                        
                                        <label class="label" for="">Email</label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="email" value="{{$id->email}}">
                                        </label>
                                        <p><br></p>

                                        <font size="+2" color="red"><b>MAP</b></font>

                                        <label class="label" for="">
                                            Location X
                                        </label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" value="{{$id->maps_latitude}}" name="maps_latitude" id="maps_latitude">
                                        </label>
                                        <p><br></p>

                                        <label class="label" for="">
                                            Location Y
                                        </label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" value="{{$id->maps_longitude}}" name="maps_longitude" id="maps_longitude">
                                        </label>

                                        <p><br></p>
                                        <label class="label" for="">
                                            Label Address
                                        </label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" value="{{$id->maps_label}}" name="maps_label" id="maps_label">
                                        </label>

                                        <p><br></p>
                                        <label class="label" for="">
                                            Address
                                        </label>
                                        <label class="input" for="">
                                            <input type="text" class="form-control" value="{{$id->maps_address}}" name="maps_address" id="maps_address">
                                        </label>
                                        <p><br></p>
                                        <div id="map" style="width: 100%; height: 400px;"></div>
                                        

                                    </section>
                                </div>

                            </div>

                        </fieldset>

                        <footer>

                            <button type="button" class="btn btn-sm btn-primary pull-left" id="nut-sub">Update</button>

                        </footer>

                        </form>

                    </div>

                </div>

            </div>

        </article>

    </div>
</section>

<script type="text/javascript">
    var lat = '{{$id->maps_latitude}}';
    var log = '{{$id->maps_longitude}}';

    if(!lat){
        lat = -37.810546;
    }
    if(!log){
        log = 145.00259800000003;
    }

    $('#map').locationpicker({
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

    $('#nut-sub').click(function(){
        $('#nut-sub').removeAttr('type');
        $('#nut-sub').attr('type','submit');
        $('#form1').attr('action',"{{url('admin/post_edit_contact')}}");
    });
</script>