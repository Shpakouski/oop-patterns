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
//use Prototype\Post;
//use Prototype\User;
//use Observer\Blog;
//use Observer\SendMailPlugin;
//use Observer\ChangeTextPlugin;
//use Observer\ChangeTitlePlugin;
//use Strategy\IFileSave;
//use Strategy\DocumentsSave;
//use Strategy\ImagesSave;
//use Strategy\BaseLogic;


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

//Prototype, example of usage:
//$user = new User('User');
//$post = new Post($user, 'First Post', 'Hello World!');
//$post->addComment('Hello');
//$post2 = clone $post;
//var_dump($post);
//var_dump($post2);

//Observer, example of usage:
//$blog = new Blog();
//$blog->title = ' Hello World!';
//$blog->text = 'Some text';
//$blog->attach(new SendMailPlugin(),'all');
//$blog->attach(new ChangeTextPlugin(),'Blog:Create');
//$blog->attach(new ChangeTitlePlugin(),'Blog:Create');
//$blog->create();
//echo $blog->title . '<br>';
//echo $blog->text . '<br>';

//Strategy, examples of usage:
//$obj = new BaseLogic(new DocumentsSave('patterns.docx'));
//$obj->execute();
//$obj = new BaseLogic(new ImagesSave('strategy.png'));
//$obj->execute();
//function saveStrategy(array $strategies)
//{
//    foreach ($strategies as $strategy) {
//        if ($strategy instanceof IFileSave) {
//            $strategy->save();
//        }
//    }
//    return true;
//}
//saveStrategy(array(
//    new DocumentsSave('patterns.docx'),
//    new ImagesSave('strategy.png')
//));