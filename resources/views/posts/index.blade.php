<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>通報列表</title>
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
        <!-- jvectormap -->
        <link href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="{{ asset('/plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="hold-transition sidebar-collapse">
        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>通報列表</h1>
                </section>
                <!-- Main content -->
                <section class="content">
                    @foreach ($posts as $post)
                        <!-- Box Comment -->
                        <div class="box box-widget">
                            <div class='box-header with-border'>
                                <div class='user-block' style='margin-left: -32px;'>
                                    <span class='username'><a href="#"></a>{{ $post->user_name }}</span>
                                    <span class='description'>{{ $post->location }}</span>
                                    <span class='description time'>{{ $post->created_at }}</span>
                                </div><!-- /.user-block -->
                            </div><!-- /.box-header -->
                            <div class='box-body'>
                                @foreach ($post->attachments as $attachment)
                                    {!! Html::image("attachments/$attachment->filename", '', array(
                                        'height' => '300px',
                                        'class' => 'img-responsive pad',
                                        'alt' => '{{ $post->location }}'
                                    )) !!}
                                @endforeach
                                <p style='margin-left: 12px;'>{{ $post->content }}</p>
                            </div><!-- /.box-body -->
                            <!-- <div class='box-footer box-comments'> -->
                                <!-- <div class='box-comment'>
                                    <div class='comment-text'>
                                        <span class="username">
                                            replier
                                            <span class='text-muted pull-right'>8:03 PM Today</span>
                                        </span>
                                        comment
                                    </div>
                                </div> -->
                            <!-- </div> -->
                        </div><!-- /.box -->
                    @endforeach
                    {!! $posts->render() !!}
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
              <p>Copyright &copy; 2015 國立成功大學，701 臺南市東區大學路1號　Tel: (886-6) 275-7575</p>
            </footer>
        </div>
        <!-- jQuery 2.1.4 -->
        <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
           $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('/plugins/knob/jquery.knob.js') }}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{ asset('/plugins/fastclick/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/dist/js/app.min.js') }}" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('/dist/js/pages/dashboard.js') }}" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('/dist/js/demo.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $('.time').each(function(i, e) {
                e_time = $(e).text();
                convert_time = moment(e_time).calendar();
                $(e).text(convert_time);
            });
        </script>
    </body>
</html>
