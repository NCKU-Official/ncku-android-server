<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>建立通報</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link href="{{ asset('/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="{{ asset('/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="{{ asset('/plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="{{ asset('/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="hold-transition">
        <div class="wrapper">
			<div class="box box-primary">

				<div class="box-header with-border">
					<h3 class="box-title">通報表單</h3>
				</div><!-- /.box-header -->

				<div class="box-body">
					{!! Form::open(
					array(
						'action' => array('PostController@store', $category_id),
						'files' => true)
					)
					!!}
					<!-- text input -->
					<div class="form-group">
						{!! Form::label('user_email', '電子信箱') !!}
						{!! Form::text('user_email', '',
						    array('class' => 'form-control',
							'placeholder' => 'example@ncku.edu.tw')
						) !!}
					</div>
					<div class="form-group">
						{!! Form::label('user_name', '通報人姓名') !!}
						{!! Form::text('user_name', '',
						    array('class' => 'form-control',
							'placeholder' => '姓名')
						) !!}
					</div>
					<div class="form-group">
						{!! Form::label('user_phone', '通報人電話') !!}
						{!! Form::text('user_phone', '',
						    array('class' => 'form-control',
							'placeholder' => '電話')
						) !!}
					</div>
					<div class="form-group">
						{!! Form::label('location', '通報地點') !!}
						{!! Form::text('location', '',
						    array('class' => 'form-control',
							'placeholder' => '地點')
						) !!}
					</div>
					<!-- textarea -->
					<div class="form-group">
						{!! Form::label('content', '內容') !!}
						{!! Form::textarea('content', '',
						    array('class' => 'form-control',
							'rows' => '5',
							'placeholder' => '描述')
						) !!}
					</div>
					<div class="form-group">
	                    <label for="exampleInputFile">圖片附檔</label>
					    {!! Form::file('attachment') !!}
	                    <p class="help-block">附帶圖檔能讓負責單位更容易了解情況</p>
					</div>
					{!! Form::submit('確定通報') !!}
					{!! Form::close() !!}
				</div><!-- /.box-body -->
			</div><!-- /.box -->
        </div>
    </body>
</html>
