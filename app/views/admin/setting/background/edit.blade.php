

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

                    <h2><a href="#background" class=" back-link-icon" title="Back to Background Config"><i class="fa fa-arrow-circle-o-left"></i></a> Edit Background</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_background')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$back->id}}">
                                        
                                    
                                        Chọn màu nền : <input type="color" name="color" value="{{$back->maunen}}">
                                      
                                        <p><br></p>
                                        <label class="input" for="">
                                            <img src="{{url($back->anhnen)}}" width="120px" height="120px"><p><br></p>
                                            <input type="file" class="form-control" name="image">
                                        </label>
                                        <br>
                                        <!-- Chọn cách upload video-->
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($back->chon==0) echo "checked" ; "" ?> name="background" value="0" class="radiobox style-2" data-bv-field="office">
                                            <span>Setting Color for Background</span> 
                                        </label>
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($back->chon==1) echo "checked" ; "" ?> name="background" value="1" class="radiobox style-2" data-bv-field="office">
                                            <span>Setting Image for Background</span> 
                                        </label>
                                        <!-- Chọn cách upload video-->

                                        <p><br></p>

                                        Chọn màu menu: <input type="color" name="color_menu" value="{{$back->menu}}">
                                        <p><br></p>

                                        Chọn màu nền body: <input type="color" name="color_content" value="{{$back->content}}">
                                        <p><br></p>

                                        Chọn màu top footer: <input type="color" name="color_footer_top" value="{{$back->footer_top}}">
                                        <p><br></p>

                                        Chọn màu bottom footer: <input type="color" name="color_footer_bottom" value="{{$back->footer_bottom}}">
                                        <p><br></p>

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