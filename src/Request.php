<?php

class Request 
{
    function getHeaders()
    {
        foreach ( $_SERVER as $key => $value)
        {
            $defaultHeaders = substr($key, 0, 5);
            if($defaultHeaders == 'HTTP_') 
            {
                $headersArray[$key] = $value; 
            }  
        }
        return $headersArray;
    }

    function getPath()
    {
        return $_SERVER['PATH'];
    }
    function getServProt()
    {
        return $_SERVER['SERVER_PROTOCOL'];
    }

    function getPort()
    {
        return $_SERVER['SERVER_PORT'];
    }

    function getMethod()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
            $response = $_GET;
        else if ($_SERVER['REQUEST_METHOD'] == 'POST')
            $response = $_POST;

        return $_SERVER['REQUEST_METHOD'];
    }

    function getClientIp()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    function getMimeType()
    {
        return explode(',', $_SERVER['HTTP_ACCEPT']);
    }

    function getURL()
    {
        return getServProt() . $_SERVER['HTTP_HOST'];
    }

    function getPathext()
    {
        return $_SERVER['PATHEXT'];
    }

    function getGateway()
    {
        return $_SERVER['GATEWAY_INTERFACE'];
    }

    function getURI()
    {
        return $_SERVER['REQUEST_URI'];
    }
}
?>
