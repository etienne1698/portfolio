<?php

class Context {

    private static $instance;

    private $text;

    private function __construct()
    {
        $this->text = TextModel::all();
    }

    public static function getContext() {
        if (self::$instance == null) {
            self::$instance = new Context();
        }
        return self::$instance;
    }

    public function getLanguage() {
        return isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'fr';
    }

    public function translate($key)
    {
        foreach ($this->text as $text) {
            if ($text->access_key == $key) {
                return $text->{'text_' . $this->getLanguage()};
            }
        }
        return '';
    }
}