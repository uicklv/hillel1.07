<?php


require_once __DIR__ . '/functions/functions.php';
require_once __DIR__ . '/ParentPost.php';
require_once __DIR__ . '/Post.php';
require_once __DIR__ . '/News.php';
require_once __DIR__ . '/VideoPost.php';

//try {
//
//    $post = new Post('My Post', 'my content');
//    $news = new News('My News', 'my news content');
//    $video = new VideoPost('Video Title', 'Video Content');
//
//    showPost($video);


//    var_dump($post instanceof Post); // true
//    var_dump($post instanceof ParentPost); // true
//    var_dump($news instanceof News); //true
//    var_dump($news instanceof ParentPost); // true
//    var_dump($news instanceof Post); // false

//    var_dump($parentPost instanceof Post);
//
//} catch (Exception $e) {
//    echo $e->getMessage();
//}


//
//class ParentClass
//{
//    protected string $name;
//
//    public function __construct(string $name)
//    {
//        $this->name = $name;
//    }
//
//    public function sayHello(): void
//    {
//        echo "Hello {$this->name}!" . PHP_EOL;
//    }
//}
//
//class ChildClass extends ParentClass
//{
////    private string $name;
//    public string $content;
//    public function __construct(string $name, string $content)
//    {
//        parent::__construct($name);
//        $this->content = $content;
//    }
//    public function sayHello(): void
//    {
//        parent::sayHello();
//
//        echo $this->content . PHP_EOL;
//    }
//}
//
//$child = new ChildClass('Jim', 'content test');
////$child->sayHello();
//
//$child->sayHello();


//interface MessengerInterface
//{
//    public function send(string $message): bool;
//}
//
//
//class TgMessenger implements MessengerInterface
//{
//
//    public function send(string $message): bool
//    {
//        echo "Tg Messenger send message";
//
//        return true;
//    }
//}
//
//class ViberMessenger implements MessengerInterface
//{
//
//    public function send(string $message): bool
//    {
//        echo "Viber Messenger send message";
//
//        return true;
//    }
//}
//
//class MessageController
//{
//    private MessengerInterface $messenger;
//
//    public function __construct(MessengerInterface $messenger)
//    {
//        $this->messenger = $messenger;
//    }
//    public function send(string $message): bool
//    {
//        return $this->messenger->send($message);
//    }
//}
//
//
//$tg = new TgMessenger();
//$viber = new ViberMessenger();
//
//$message = new MessageController($viber);
//
//$message->send('Your tickets');


require_once __DIR__ . '/Discount.php';
require_once __DIR__ . '/FixedDiscount.php';
require_once __DIR__ . '/PercentageDiscount.php';
require_once __DIR__ . '/Order.php';

$items = [
    ['name' => 'PC', 'amount' => 1, 'price' => 25000],
    ['name' => 'Monitor', 'amount' => 2, 'price' => 5000],
];

try {
//    $fixed = new FixedDiscount(20000, 1000);
    $fixed = new PercentageDiscount(10);
    $order = new Order($items, $fixed);

    echo $order->getFullPrice() . PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage();
}

