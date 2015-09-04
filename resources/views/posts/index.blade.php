<?php

foreach ($posts as $post) {
    echo $post->content;
}
echo Uuid::generate();