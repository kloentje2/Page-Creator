<?php
/*
2015 © Koen Hollander | Alle rechten voorbehouden
*/
Class file {
public $handle;
    function __construct($filename = null) {
        if (@$filename != NULL) {
            $this->handle = fopen($filename,"a");
        }
    }
    function newline($string) {
        fwrite($this->handle,$string."\n");
    }
    function save() {
        fclose($this->handle);
    }
    function hash($file,$hash = "sha1") {
        $hash = hash_file($hash, $file);
        return $hash;
    }
}
?>