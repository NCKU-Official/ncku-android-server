@foreach ($posts as $post)
    <div>
        <p>{{ $post->user_name }}</p>
        <p>{{ $post->user_email }}</p>
        <p>{{ $post->user_phone }}</p>
        <p>{{ $post->content }}</p>
        <p>{{ $post->location }}</p>
        <p>---</p>
    </div>
@endforeach
