<?php

//use Singleton\FileSaver;
//use Multiton\FileSaver;
//use StaticFactory\StaticFactory;
//use FactoryMethod\FileSaveFactory;
//use FactoryMethod\MysqlSaveFactory;

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

//FactoryMethod, examples of usage:
//$factory = new FileSaveFactory('testFile.txt');
//$factory->createSaver()->save('Hello world!');
//$factory = new MysqlSaveFactory('localhost','root','','patterns');
//$factory->createSaver()->save('Hello world!');