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
                                    <th>STT</th>
                                    <th>Comment</th>
                                    <th>Trạng Thái</th>
                                    <th>Phê Duyệt</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach($com as $row)
                                        <tr>
                                            <td>{{$i+=1}}</td>
                                            <td>
                                                <a href="#comment/edit/{{$row->id}}">
                                                <span title="Click here to see more detail comment">Detail comment ...</span>
                                                </a>
                                            </td>
                                            <td>
                                                @if($row->status == 0)
                                                    <span class="label bg-color-red">Không hiển thị</span>
                                                @else
                                                    <span class="label bg-color-green">Hiển thị</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($row->duyet == 0)
                                                    <span class="label bg-color-red">Chưa duyệt</span>
                                                @else
                                                    <span class="label bg-color-green">Đã duyệt</span>
                                                @endif                                              
                                            </td>
                                            <td><a href="{{url('admin/comment/delete/'.$row->id)}}"><button class="btn btn-xs btn-danger">Delete</button></a></td>
                                            <td><a href="#comment/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></td>
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