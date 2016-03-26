<section class="content-header">

    <h1>

        Insert Slider

    </h1>

    @if( count($errors->all()) )

        <div class="alert alert-danger alert-dismissable">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            <ul>

                @foreach ($errors->all() as $error)

                    <li class="danger alert">{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

</section>

<section id="widget-grid">

    <div class="row">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget jarviswidget-color-blueDark"  data-widget-colorbutton="false" data-widget-editbutton="false" role="widget" style="">

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

                    <h2><a href="#product" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a>Come back</h2>

                </header>

                <div role="content">

                    <!-- widget edit box -->

                    <div class="jarviswidget-editbox">

                        <!-- This area used as dropdown edit box -->

                    </div>

                    <!-- end widget edit box -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                      <form class="smart-form" method="post" action="{{url('admin/post_create_product')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>
                                        <input class="form-control" name="id" value="{{$id}}" type="hidden">
                                        <input class="form-control" name="id1" value="{{$id1}}" type="hidden">

                                        <label class="label" for"code">Tên sản phẩm (Vietnamese)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name" required>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for"code">Tên sản phẩm (English)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name_en" required>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for"code">Giá</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="gia" required>
                                        </label>  
                                        <p><br></p>   

                                        <label class="label" for"">Hình ảnh sản phẩm</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="image" required type="file">
                                        </label>
                                        <p><br></p>                                        

                                        <label class="label" for=""><b>Mô tả (Vietnamese)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor1" name="content1"></textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Mô tả (English)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor2" name="content2"></textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Thông số kỹ thuật (Vietnamese)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor3" name="content3"></textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Thông số kỹ thuật (English)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor4" name="content4"></textarea>
                                        </label>
                                    </section>
                                </div>

                            </div>

                        </fieldset>

                        <footer>

                            <button class="btn btn-sm btn-primary pull-left">Save</button>

                        </footer>

                        </form>

                    </div>

                    <!-- end widget content -->

                </div>

                <!-- end widget div -->

            </div>

        </article>

    </div>

</section>

<script type="text/javascript">
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');

    /* DO NOT REMOVE : GLOBAL FUNCTIONS!

     *

     * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS

     *

     * // activate tooltips

     * $("[rel=tooltip]").tooltip();

     *

     * // activate popovers

     * $("[rel=popover]").popover();

     *

     * // activate popovers with hover states

     * $("[rel=popover-hover]").popover({ trigger: "hover" });

     *

     * // activate inline charts

     * runAllCharts();

     *

     * // setup widgets

     * setup_widgets_desktop();

     *

     * // run form elements

     * runAllForms();

     *

     ********************************

     *

     * pageSetUp() is needed whenever you load a page.

     * It initializes and checks for all basic elements of the page

     * and makes rendering easier.

     *

     */



    pageSetUp();



    /*

     * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE

     * eg alert("my home function");

     *

     * var pagefunction = function() {

     *   ...

     * }

     * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);

     *

     * TO LOAD A SCRIPT:

     * var pagefunction = function (){

     *  loadScript("../../plugin.js", run_after_loaded);

     * }

     *

     * OR

     *

     * loadScript("../../plugin.js", run_after_loaded);

     */



    // PAGE RELATED SCRIPTS



    // pagefunction



    var pagefunction = function() {



    };



    // end pagefunction



    // run pagefunction on load

    pagefunction();



</script>





