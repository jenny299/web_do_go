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

                    <h2><a href="#flash" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Flash</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_flash')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        
                                        <label class="label" for=""><b>Flash</b></label>
                                        <label class="input" for="">
                                            <span>{{$id->flash}}</span>
                                           <input class="form-control" name="pdf1" type="file"  onchange="checkfilepdf(this);">
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
    function checkfilepdf(sender) {
        var validExts = new Array(".pdf",".zip",".rar");
        var fileExt = sender.value;
        fileExt = fileExt.substring(fileExt.lastIndexOf('.'));
        if (validExts.indexOf(fileExt) < 0) {
          alert("Invalid file selected, valid files are of " +
                   validExts.toString() + " types.");
          sender.value="";
          return false;
        }
        else return true;
    }
</script>