<?php

use Psr\Http\Message\ServerRequestInterface;

function hello_world(ServerRequestInterface $request)
{
    $data = $request->getBody();
    if(isnull($data)) return '{}';
    return json_encode(str_word_count($data['message']));
}
