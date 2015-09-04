{!! Form::open(array('action' => 'PostController@store')) !!}
    <div class="form-group">
        {!! Form::label('email', '電子信箱') !!}
        {!! Form::text('email', 'example@gmail.com') !!}

        {!! Form::label('user_name', '通報人') !!}
        {!! Form::text('user_name') !!}

        {!! Form::label('location', '地點') !!}
        {!! Form::text('location') !!}

        {!! Form::label('content', '內容') !!}
        {!! Form::textarea('content') !!}

		{!! Form::file('image') !!}

		{!! Form::submit('提交') !!}
    </div>
{!! Form::close() !!}
