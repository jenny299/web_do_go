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

                    <!--<h2><a href="#product" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Content</h2>-->

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_product')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        <input type="hidden" name="id0" value="{{$id0}}">
                                        <input type="hidden" name="id1" value="{{$id1}}">
                                        
                                        <label class="label" for"code">Tên sản phẩm (Vietnamese)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name" required value="{{$id->name}}">
                                        </label>
                                        <p><br></p>

                                        <label class="label" for"code">Tên sản phẩm (English)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name_en" required value="{{$id->name_en}}">
                                        </label>
                                        <p><br></p>

                                        <label class="label" for"code">Màu sản phẩm</label>
                                        <!-- <label class="input" for="">
                                           <input class="form-control" name="color_product" required value="{{$id->color}}">
                                        </label>   -->
                                        <label class="select">
                                            <select name="color_product">
                                                <?php  
                                                    foreach($colorList as $c){
                                                        if($c->id == $id->color)
                                                            echo "<option selected='selected' value='$c->id'>".$c->name."</option>";
                                                        else
                                                            echo "<option value='$c->id'>".$c->name."</option>";
                                                    }
                                                ?>
                                            </select> 
                                            <i></i> 
                                        </label>
                                        <p><br></p>   

                                        <label class="label" for"code">Giá</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="gia" required value="{{$id->gia}}">
                                        </label>  
                                        <p><br></p>   

                                        <label class="label" for"">Hình ảnh sản phẩm</label>
                                        <label class="input" for="">
                                           <img src="{{url($id->image)}}" width="120px" height="120px">
                                           <input class="form-control" name="image" type="file">
                                        </label>
                                        <p><br></p>                                         

                                        <label class="label" for=""><b>Mô tả (Vietnamese)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor1" name="content1">{{$id->mota}}</textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Mô tả (English)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor2" name="content2">{{$id->mota_en}}</textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Thông số kỹ thuật (Vietnamese)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor3" name="content3">{{$id->thongso}}</textarea>
                                        </label>
                                        <p><br></p>

                                        <label class="label" for=""><b>Thông số kỹ thuật (English)</b></label>
                                        <label class="input" for="">
                                           <textarea class="form-control editor" id="editor4" name="content4">{{$id->thongso_en}}</textarea>
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
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
</script>