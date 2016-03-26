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
                    <h2> Sản Phẩm / Danh Mục Sản Phẩm</h2>
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
                            <a href="#dm_cha/create"><button class="btn btn-xs btn-primary">Insert New</button></a>
                            <p><br></p>

                            <table class="table table-bordered table-hover">

                                <thead>

                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Name_EN</th>
                                    <th>Thứ tự hiển thị</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>
                                    <?php $i=0; ?>
                                    @foreach($dm_cha as $row)
                                        <tr>
                                            <th>{{$i+=1}}</th>
                                            <th>
                                                @if($row->cap == 0)
                                                    <a href="#product/0/{{$row->id}}">{{$row->name}}</a>
                                                @else
                                                    <a href="#dm_con1/{{$row->id}}">{{$row->name}}</a>
                                                @endif
                                            </th>
                                            <th>
                                                {{$row->name_en}}
                                            </th>
                                            <th>{{$row->thutu}}</th>
                                            <th><a href="#dm_cha/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></th>
                                            <th><a href="{{url('admin/dm_cha/delete/'.$row->id)}}"><button class="btn btn-xs btn-danger">Delete</button></a></th>
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