<?php

class Article
{
    function __construct($file = false, $url)
    {
        if( $file ){
            $this->file = $file;
            $this->parseFile();
        }
    }

    function parseFile(){

        $content = file_get_contents(__DIR__.'/../'.$this->file);
        $parts = preg_split("/[\n]*[-]{3}[\n]/", $content, 3, PREG_SPLIT_NO_EMPTY);

        if( count($parts) == 2 ){
            $header = $parts[0];
            $content = $parts[1];
        }else{
            $header = false;
            $content = $parts[0];
        }

        // $this->header = $this->getHeader($header);
        $this->slug = $this->getSlug();
        $this->content = $this->getContent($content);
        $this->title = $this->getTitle();
        $this->permalink = $this->getPermalink();
        $this->modified = $this->getModified();

    }

    function getHeader($header){
        // we are not ready yet
        return false;
    }

    function getContent($content){
        $return = new Parsedown();
        return $return->text($content);
    }

    function getTitle(){
        $lines = explode(PHP_EOL, $this->content);
        return strip_tags($lines[0]);
    }

    function getSlug(){
        $fileparts = explode('/', $this->file);
        return substr(end($fileparts), 0, -3);
    }

    function getPermalink(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/" . $this->getSlug();
    }

    function getModified($format = 'd/m/Y H:i'){
        return date($format, filemtime($this->file));
    }

}
