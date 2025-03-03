<?php

class SimpleRest
{
    private $httpVersion="HTTP/1.1";

    public function setHttpHeaders($contentType,$statusCode)
    {
        $statusMassage = $this->getHttpStatusMessage($statusCode)

        header($this->httpVersion . "" . $statusCode . "")
        header("Content_Type:" . $contentType);
    }
    public function getHttpStatusMessage($statusCode)
    {
        $httpsStatus = array(
            200 => 'ok',
            400 => 'Bad request',
            404 =>'Not found',
            500 =>'Internal Server Error'
        );
        return(isset($httpsStatus[$statusCode])) ? 
        $httpsStatus[$statusCode] : $httpsStatus[500];
    }
}