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

                    <h2><a href="#comment" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Content</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_comment')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        
                                        <label class="label" for="">Comment cho sản phẩm: <b>{{$id->id_sanpham}} (sẽ load DB tên sản phẩm sau)</b></label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Comment:</b></label>
                                        <label class="label" for="">{{$id->comment}}</label>

                                        <p><br></p>
                                        <!-- Chọn show or not show -->
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->status==0) echo "checked" ; "" ?> name="status" value="0" class="radiobox style-2" data-bv-field="office">
                                            <span>Not show (không cho phép hiển thị comment)</span> 
                                        </label>
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->status==1) echo "checked" ; "" ?> name="status" value="1" class="radiobox style-2" data-bv-field="office">
                                            <span>Show (Cho phép hiển thị comment)</span> 
                                        </label>
                                        <!-- Chọn show or not show -->
                                        <p><br></p>

                                        <!-- Chọn duyệt or chưa duyệt -->
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->duyet==0) echo "checked" ; "" ?> name="duyet" value="0" class="radiobox style-2" data-bv-field="office">
                                            <span>Không duyệt</span> 
                                        </label>
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->duyet==1) echo "checked" ; "" ?> name="duyet" value="1" class="radiobox style-2" data-bv-field="office">
                                            <span>Duyệt</span> 
                                        </label>
                                        <!-- Chọn duyệt or chưa duyệt -->

                                    </section>
                                </div>

                            </div>

                        </fieldset>

                        <footer>

                            <button type="submit" class="btn btn-sm btn-primary pull-left">Update</button>
                            <a href="{{url('admin/comment/delete/'.$id->id)}}"><button class="btn btn-sm btn-danger" type="button">Delete</button></a>

                        </footer>

                        </form>

                    </div>

                </div>

            </div>

        </article>

    </div>
</section>