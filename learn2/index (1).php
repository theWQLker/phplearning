<?php
// $stringOne = 'my email is ';
// $stringTwo = 'lomabril93@gmail.com';
// $name = ' Bril ';
// echo $stringOne .''. $stringTwo .'';

// echo "the boy sayed \"i'm done\"";

// echo $name[0];
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// echo str_replace("b","i", $name);
$radius = 63;
$pi = 3.14;
// basic = *, /, +, -, **
// echo $pi * $radius **2
// order of operations (B I D M A S)

// echo 2*(4+9) /3;
// increment & decrement operators
// echo $radius --;
// echo $radius;

// shorthand operators  (=),(-=),(+=),(*=)(/=)

// $age = 20;
// $age += 10;
// echo $age .' ';
// $age += 20;
// $age -= 5;
// echo $age.' ';
// $age /= 2;
// echo $age;

// number functions

// echo floor($pi);
// echo ceil($pi);
// echo pi()

// indexed arrays
$people = ['john ', 'bolton ', 'peter '];
// echo $people[2];

$peopleTwo = array('ken ', 'josh ', '0623 ', 'dyno ', ' bolt ', 'cyrelle ', 'george');
// echo $peopleTwo[0];

// print_r( $peopleTwo );

// $peopleTwo[2]=' Favour ';
// print_r( $peopleTwo );

$peopleTwo[] = ' toto ';
// print_r( $peopleTwo );
array_push($people, 'xena');
// print_r( $people );
// echo count( $peopleTwo );

$peopleThree = array_merge($people, $peopleTwo);
// print_r( $peopleThree );

// asSOCIATIVE ARRAYAS 
$karate = ['john' => 'green', 'george' => 'bleu'];
// echo $karate['john'];
// print_r($karate);

$blog = [
   ['title' => 'mario party', 'author' => 'Mario', 'content' => 'lorem ipsum', 'likes' => 30],
   ['title' => "John's party", 'author' => 'Bolton', 'content' => 'lorem ipsum', 'likes' => 63],
   ['title' => 'Luigi chests', 'author' => 'Luigi', 'content' => 'lorem ipsum', 'likes' => 23],
];
// echo count ($blog);
// print_r($blog[1][1]);
// echo $blog[0]['title'];
$blog[] = ['               title' => 'me', 'author' => 'mao', 'content' => 'lorem ipsum', 'likes' => 300];
// print_r( $blog );
$popper = array_pop($blog);
// print_r($popper)

// for ($i = 0; $i < 6; $i++) {
//    echo '  ive learnt loops  ';

// } 

// $looping = array('shan ', 'joe', ' pierce');
// // print_r($looping);
// for( $i = 0; $i < count($looping); $i++) {
//    echo $looping[$i]. '<br />';

// }
// $looping[]= 'dubois';

// foreach($looping as $looped){
//    echo $looped.'<br />';

// };


$products = [
   ['pdName' => 'Wireless Mouse', 'pdPrice' => 25.99, 'pdQte' => 10],
   ['pdName' => 'Bluetooth Speaker',        'pdPrice' => 5.50,        'pdQte' => 5],
   ['pdName' => 'USB-C Hub',   'pdPrice' => 12.75,  'pdQte' => 20],
   ['pdName' => 'Mechanical Keyboard',  'pdPrice' => 89.99,  'pdQte' => 2],
   ['pdName' => 'Portable Charger',  'pdPrice' => 35.00,  'pdQte' => 15]

];


// foreach ($products as $prod) {
//    if ($prod['pdPrice'] < 15 && $prod['pdPrice'] > 6 ) {
//       echo $prod['pdName'] . '<br />';
//    }
// }


// foreach ($products as $prod) {
//    if ($prod['pdPrice'] == 12.75) {
//       //break;
//       continue;
//    }
//       echo $prod['pdName'] . '<br />';

// }


// foreach($products as $product) {
//    echo $product ['pdName'].' - '. $product['pdPrice'];
//    echo '<br />';

// }
// Display the array
// print_r($products);

// $i =0;
// while ($i < count($products)) {
//    echo '<br />';
//    echo $products[$i]['pdName'];
//    echo '<br />';
//    $i++;
// }
//comparisons booleans (ture or false)
// echo true;
// echo false;
//numbers

// echo 5 < 10;
// echo 'op1 <br/>';
// echo 5 > 10;
// echo 'op2 <br/>';
// echo 5 == 10;
// echo 'op3 <br/>';
// echo 10 == 10;
// echo 'op4 <br/>';
// echo 5!= 10;
// echo 'op5 <br/>';
// echo 5 <= 5;
// echo 'op6 <br/>';
// echo 5 >= 5 ;
// echo 'op7';

//strings
//  echo 'shaun' < 'yurton';
// echo 'shaun' > 'yurton';
// echo 'shaun' > 'Shaun';
//  echo 'mario' == 'mario';
// echo 'maria' == 'Maria'
//strict comparison (===) loose (==)
// echo 5 == '5';
// echo 5 === '5';

//Conditional statements
// $price = 50;
// if ($price <= 20) {
//    echo 'all condtions have been met';
// } else if ($price =! 20) {
//    echo '<h1>Thanks for coming try again anothe time </h1>';
// } else {
//    echo 'bye';
// }

//functions
// function sayHello($name = 'uwa') {
//    echo "Hello $name ";
// }
// sayHello();


// function formatProd($products) {
//    // echo  "{$products['pdName']} cost €{$products['pdPrice']} to buy ";
//    return "{$products['pdName']} cost €{$products['pdPrice']} to buy ";
// }

// $cost = formatProd( ['pdName' => 'Wireless Mouse', 'pdPrice' => 25.99, 'pdQte' => 10]);

// echo $cost;

//Variable scope

function myFunc(){
   $price = 10;
   echo $price;
}

// myFunc();
// echo $price; // not working as scope is local to the function

function myFunc2($age){
   echo $age;
}
// myFunc2('71');
// echo $age; // local scope too 

//Global SCOPE vars
$body = "ecto";
// function myFunc3(){
//    global $body;
//    $body = "Meso";
//    echo "My body type is $body <br />";
// }

// myFunc3();
// echo $body;

function sayBye($body){
   $body = "Meso";
   echo "bye $body <br />";

}

sayBye($body);
echo $body























?>
<!DOCTYPE html>
<html>

<head>
   <title>PHP FILE </title>
   <h1><?php echo 'hello freinds again'; ?></h1>
   <!-- <div><?php  ?></div> -->
   <div><?php  ?></div>
</head>

<body>
   <h2>Products</h2>
   <ul>
      <?php foreach ($products as $product) { ?>
         <h3><?php echo $product['pdName']; ?></h3>
         <p> € <?php echo $product['pdPrice']; ?> </p>

      <?php } ?>

   </ul>
   <h3>Products loop</h3>
   <div>
      <ul>
         <?php foreach ($products as $prod) { ?>
            <h3><?php if ($prod['pdPrice'] < 15 || $prod['pdPrice'] < 6) { ?>
                  <li><?php echo $prod['pdName'] . '<br />'; ?>
                  </li>
               <?php } ?>
            <?php } ?>

      </ul>
   </div>

</body>

</html>