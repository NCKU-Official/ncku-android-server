@foreach ($posts as $post)
    <div>
        <p>{{ $post->user_name }}</p>
        <p>{{ $post->user_email }}</p>
        <p>{{ $post->user_phone }}</p>
        <p>{{ $post->content }}</p>
        <p>{{ $post->location }}</p>
        <p>---</p>
        @foreach ($post->attachments as $attachment)
            {!! Html::image("attachments/$attachment->filename",
                '',
                array('height' => '300px')) !!}
        @endforeach
    </div>
@endforeach
