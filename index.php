<?php

//use Singleton\FileSaver;
//use Multiton\FileSaver;
//use StaticFactory\StaticFactory;

require 'functions.php';
spl_autoload_register('project_autoload');

//Singleton, example of usage:
//$file = FileSaver::getInstance();
//$file->save(__DIR__);

//Multiton, example of usage:
//$file = FileSaver::getInstance('user-logs');
//$file->save(__DIR__);
//$file = FileSaver::getInstance('system-logs');
//$file->save(__DIR__);

//StaticFactory, example of usage:
//$obj = StaticFactory::create('\StaticFactory\FactoryClass');
//$obj->save();