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
//use Iterator\Blog;
//use Iterator\Post;
////use Iterator\BlogTwo;
//use TemplateMethod\Page;
//use TemplateMethod\HomePage;
//use TemplateMethod\AboutPage;
//use NullObject\DB;
//use NullObject\User;
//use NullObject\UserRepository;
//use Mediator\Router;
//use Mediator\Data;
//use Mediator\App;
//use Mediator\Page;
//use Mediator\PageHelper;
//use Command\User;
//use Command\ChatInterface;
//use Command\GoOnline;
//use Command\GoOffline;
//use Facade\Db;
//use Facade\Log;
//use Facade\Mail;
//use Facade\Document;
//use Adapter\WebMoney;
//use Adapter\PaymentAdapter;
//use Composite\Form;
//use Composite\LabelElement;
//use Composite\InputElement;
//use Composite\FieldsetElement;


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

//Iterator, examples of usage:
////$blog = new Blog();
//$blog = new BlogTwo();
//$blog->addPost(new Post('Title', 'Text', 'Author'));
//$blog->addPost(new Post('Title2', 'Text2', 'Author2'));
//$blog->addPost(new Post('Title3', 'Text3', 'Author3'));
//$blog->addPost(new Post('Title4', 'Text4', 'Author4'));
//foreach ($blog as $post) {
//    var_dump($post);
//}

//TemplateMethod, examples of usage:
//$home = new HomePage();
//$home->output();

//NullObject, example of usage:
//$db = new DB('localhost', 'root', '', 'patterns');
//$userRepository = new UserRepository($db);
//$user = $userRepository->fetchById(3);
//echo $user->getLogin();

//Mediator, example of usage:
//$router = new Router();
//new PageHelper(new Data(), $router, new Page());
//$router->request();

//Command, example of usage:
//$chat = new ChatInterface();
//$user = new User();
//$chat->setCommand(new GoOnline($user));
//$chat->run();
//$chat->undo();
//$chat->redo();

//Facade, example of usage:
//$db = new Db('localhost', 'root', '', 'patterns');
//$log = new Log('logFile.txt');
//$mail = new Mail('admin@admin.by', 'subject', 'message', '');
//$document = new Document($db, $log, $mail);
//$document->save('new document');

//Adapter, example of usage:
//$adapter = new PaymentAdapter(new WebMoney(['key' => 'secret']));
//$adapter->pay(1000);

//Composite, example of usage:
//$form = new Form();
//$form->addInput(new LabelElement('Label'));
//$form->addInput(new InputElement());
//$fieldset = new FieldsetElement();
//$fieldset->addInput(new LabelElement('Label2'));
//$fieldset->addInput(new InputElement());
//$fieldset->addInput(new LabelElement('Label3'));
//$fieldset->addInput(new InputElement());
//$form->addInput($fieldset);
//echo $form->render();