<!-- Main content -->

<section id="widget-grid">

    <div class="row">

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-colorbutton="true">

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

                <header>

                    <!--<h2><a href="#email" class=" back-link-icon" title="Back to Config Email"><i class="fa fa-arrow-circle-o-left"></i></a>Config Email</h2>-->

                </header>



                <!-- widget div-->

                <div>



                    <!-- widget edit box -->

                    <div class="jarviswidget-editbox">

                        <!-- This area used as dropdown edit box -->



                    </div>

                    <!-- end widget edit box -->



                    <!-- widget content -->

                    <div class="widget-body">
                        <div class="table-responsive">

                            <table class="table table-bordered table-hover">

                                <thead>

                                <tr>
                                    <th>Image</th>
                                    <th>Color</th>
                                    <th>Show</th>
                                    <th>Menu</th>
                                    <th>Content</th>
                                    <th>Footer Top</th>
                                    <th>Footer bottom</th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>
                                    @foreach($back as $row)
                                        <tr>
                                            <th><img src="{{url($row->anhnen)}}" width="120px" height="120px"></th>
                                            <th><div style="width: 120px; height:120px; background: {{$row->maunen}}; border: 1px #000 solid;"></div></th>
                                           
                                            <th>
                                                @if($row->chon == 0)
                                                    Đang chạy chế độ màu nền
                                                @else
                                                    Đang chạy chế độ ảnh nền
                                                @endif
                                            </th>
                                            <th><div style="width: 120px; height:120px; background: {{$row->menu}}; border: 1px #000 solid;"></div></th>
                                            <th><div style="width: 120px; height:120px; background: {{$row->content}}; border: 1px #000 solid;"></div></th>
                                            <th><div style="width: 120px; height:120px; background: {{$row->footer_top}}; border: 1px #000 solid;"></div></th>
                                            <th><div style="width: 120px; height:120px; background: {{$row->footer_bottom}}; border: 1px #000 solid;"></div></th>
                                            <th><a href="#background/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></th>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    <!-- end widget content -->

                </div>

                <!-- end widget div -->

                </div>

        </article>

    </div>
<script type="text/javascript">

 pageSetUp();

</script>

</section>