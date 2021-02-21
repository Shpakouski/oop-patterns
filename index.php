<?php

require 'functions.php';
spl_autoload_register('project_autoload');

//use Singleton\FileSaver;
//use Multiton\FileSaver;
//use StaticFactory\StaticFactory;
//use FactoryMethod\FileSaveFactory;
//use FactoryMethod\MysqlSaveFactory;
//use AbstractFactory\DatabaseFactory;
//use AbstractFactory\MysqlDatabaseFactory;
//use AbstractFactory\SqliteDatabaseFactory;
//use Builder\SQLQueryBuilder;
//use Builder\MysqlQueryBuilder;


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

//AbstractFactory, example of usage:
//function queryExecute(DatabaseFactory $factory) {
//    $obj = $factory->query();
//    $obj->execute("INSERT INTO `messages`(`text`) VALUES ('test')");
//}
//queryExecute(new MysqlDatabaseFactory('localhost','root','','patterns'));
//queryExecute(new SqliteDatabaseFactory('test.db'));

//Builder, example of usage:
//function queryExecute(SQLQueryBuilder $builder)
//{
//    $query = $builder
//        ->select(['id', 'text'])
//        ->from('messages')
//        ->where("id", 2)
//        ->limit(1, 2)
//        ->getQuery();
//
//    echo $query;
//}
//
//queryExecute(new MysqlQueryBuilder());