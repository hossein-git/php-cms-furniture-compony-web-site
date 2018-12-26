<?php
session_start();

foreach (glob('lib/*.php') as $file){
    include_once $file;
}

