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

                    <h2><a href="#dm_con3/{{$id->id_dmcon2}}" class=" back-link-icon" title=""><i class="fa fa-arrow-circle-o-left"></i></a> Edit Danh Mục Sản Phẩm (cấp 3)</h2>

                </header>

                <div role="content">



                    <!-- widget edit user -->

                    <div class="jarviswidget-edituser">

                        <!-- This area used as dropdown edit user -->

                    </div>

                    <!-- end widget edit user -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                       <form class="smart-form" method="post" action="{{url('admin/post_edit_dm_con3')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <input type="hidden" name="id" value="{{$id->id}}">
                                        <input type="hidden" name="id_con2" value="{{$id->id_dmcon2}}">
                                        
                                        <label class="label" for"code">Tên danh mục (Vietnamese)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name" required value="{{$id->name}}">
                                        </label>
                                        <p><br></p>

                                        <label class="label" for"code">Tên danh mục (English)</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="name_en" required value="{{$id->name_en}}">
                                        </label>
                                        <p><br></p>

                                        <!-- Chọn mở thêm cấp -->
                                        <!--<label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->cap==0) echo "checked" ; "" ?> name="cap" value="0" class="radiobox style-2" data-bv-field="cap">
                                            <span>Không mở thêm cấp</span> 
                                        </label>
                                        <label class="radio radio-inline no-margin">
                                            <input type="radio" <?php if($id->cap==1) echo "checked" ; "" ?> name="cap" value="1" class="radiobox style-2" data-bv-field="cap">
                                            <span>Mở thêm cấp con</span> 
                                        </label>-->
                                        <!-- Chọn mở thêm cấp -->

                                        <label class="label" for"code">Thứ tự hiển thị</label>
                                        <label class="input" for="">
                                           <input class="form-control" name="thutu" required value="{{$id->thutu}}">
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