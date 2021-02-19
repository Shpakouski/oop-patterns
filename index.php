<?php

use Singleton\FileSaver;

require 'functions.php';
spl_autoload_register('project_autoload');

//Singleton, example of usage:
//$file = FileSaver::getInstance();
//$file->save(__DIR__);