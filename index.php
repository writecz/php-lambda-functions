<?php

#use Psr\Http\Message\ServerRequestInterface;

function hello_world()
{
    return json_encode(func_get_args();
}
