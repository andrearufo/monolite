<?php

class Site
{

    function __construct($config){
        foreach($config as $key => $value){
            $this->{$key} = $value;
        }

        $this->url = $this->getUrl();
        $this->getArticles();

        if( $this->isSingle() ){
            $this->current = $this->articles[substr($_SERVER['REQUEST_URI'], 1)];
        }
    }

    private function getArticles(){

        $files = glob($this->directory.'/*.{md}', GLOB_BRACE);
        $articles = [];

        foreach( $files as $file ){
            $article = new Article($file, $this->getUrl());
            $articles[ $article->slug ] = $article;
        }

        $this->articles = $articles;
    }

    public function getUrl(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
    }

    public function isSingle(){
        return $_SERVER['REQUEST_URI'] != '/';
    }
}
