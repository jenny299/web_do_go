

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

                    <h2><a href="#category" class=" back-link-icon" title="Back to Category manager"><i class="fa fa-arrow-circle-o-left"></i></a>Edit Category</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_prices')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-6">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        <label class="label" for="">Từ</label>

                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="min" value="{{$id->min}}" required>
                                        </label>
                                        
                                        <p><br></p>
                                        <label class="label" for="">Đến</label>

                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="max" value="{{$id->max}}" required>
                                        </label>

                                        <p><br></p>
                                        <label class="label" for="">Đơn vị</label>

                                        <label class="input" for="">
                                            <input type="text" class="form-control" name="unit" value="{{$id->unit}}" required>
                                        </label>

                                    </section>

                                </div>

                            </div>

                        </fieldset>

                        <footer>

                            <button type="submit" class="btn btn-sm btn-primary pull-left">Update</button>

                        </footer>

                        </form>

                    </div>

                </div>

            </div>

        </article>

    </div>

</section>