

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

                    <h2><a href="#saleoff" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Content</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_saleoff')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        <label class="label"><b>Sale Off (Việt Nam)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor1" name="content">{{$id->content}}</textarea>
                                        </label>

                                        <p><br></p>
                                        <label class="label"><b>Sale Off (English)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor2" name="content1">{{$id->content_en}}</textarea>
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
<script type="text/javascript">
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
</script>