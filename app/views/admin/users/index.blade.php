

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

                    <h2>User manager</h2>

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

                                   
                                    <th>Username</th>
                                    <th></th>
                                    
                                </tr>

                                </thead>

                                <tbody>

                                    @foreach($user as $row)
                                                <tr>
                                                  
                                                    <th><a href="#user/edit/{{$row->id}}">{{$row->username}}</a></th>
                                                    <th><a href="#user/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></th>
                                                  
                                                </tr>
                                    @endforeach

                                </tbody>

                            </table>



                        </div>

                    </div>

                    <!-- end widget content -->

                </div>

                <!-- end widget div -->

                </div>

        </article>

    </div>
<script type="text/javascript">



</script>

</section>








