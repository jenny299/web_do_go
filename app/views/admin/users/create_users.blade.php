@extends('admin.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Create a user
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{URL::to('admin/dashboard')}}">Dashboard</a>
            </li>
            <li>
                <i class="fa fa-dashboard"></i>  <a href="{{URL::to('admin/users')}}">Users</a>
            </li>
            <li class="active">
                <i class="fa fa-table"></i> Create a user
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->
        
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-5 col-xs-12">
            <div class="box">
                <form method="post" action="{{url('admin/post_create_users')}}">
                    <div class="box-body">
                        <div class="form-group">
                            {{ Form::label('username','User name') }}
                            <input type="text" name="username" class="form-control" placeholder="Enter Your UserName"/>
                               
                        </div>
                        <div class="form-group">
                            {{ Form::label('Account','Account') }}
                            <input type="text" name="email" class="form-control" placeholder="Enter Your Email..."/>
                            <?php if( !isset($_POST['email']) ) { ?>
                            <i> Your Account must be between 5 and 8 characters long.</i>
                            <?php }?>
                            <?php echo $errors->first('email'); ?>
                        </div>
                        <div class="form-group">
                            {{ Form::label('password','Password') }}
                            <input type="password" name="password" class="form-control" placeholder="Enter Your PassWord"/>
                            <?php echo $errors->first('password'); ?>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {{Form::token()}}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@stop