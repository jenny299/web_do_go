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
                            <a href="#slider/create"><button class="btn btn-xs btn-primary">Insert New</button></a>
                            <p><br></p>

                            <table class="table table-bordered table-hover">

                                <thead>

                                <tr>
                                    <th>STT</th>
                                    <th>Image</th>
                                    <th>Thứ tự hiển thị</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($slider as $row)
                                        <tr>
                                            <th>{{$i+=1}}</th>
                                            <th><img src="{{url($row->image)}}" width="120px" height="120px"></th>
                                            <th>{{$row->thutu}}</th>
                                            <th><a href="#slider/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></th>
                                            <th><a href="{{url('admin/slider/delete/'.$row->id)}}"><button class="btn btn-xs btn-danger">Delete</button></a></th>
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