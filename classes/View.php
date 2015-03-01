<?php

class View {

    protected $data = [];

    public function __set($name, $value) {

        $this->data[$name] = $value;
    }

    public function display($path) {

        foreach ($this->data as $key => $val) {
            $$key = $val;
        }
        include __DIR__ . '/../views/' . $path;
    }

} 