{!! Form::open(
	array(
		'action' => 'PostController@store',
		'files' => true)
	)
!!}
<div class="form-group">
    {!! Form::label('user_email', '電子信箱') !!}
    {!! Form::text('user_email', 'example@gmail.com') !!}

    {!! Form::label('user_name', '通報人') !!}
    {!! Form::text('user_name') !!}

    {!! Form::label('user_phone', '通報人電話') !!}
    {!! Form::text('user_phone') !!}

    {!! Form::label('location', '地點') !!}
    {!! Form::text('location') !!}

    {!! Form::label('content', '內容') !!}
    {!! Form::textarea('content') !!}

	{!! Form::file('attachment') !!}

	{!! Form::submit('提交') !!}
</div>
{!! Form::close() !!}
