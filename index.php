
<?php
include'Books.php';
include 'Customer.php';

$books=new Books( 9785267006323,"1984","George Orwell", 1);
$customers=new Customer("2012576126","sakura","Ismail","ismailsakurah@gmail.com");
echo "Book Details<br>";
echo "<br>";
echo $books."<br>";
echo "Customer Details<br>";
echo "<br>";
echo $customers."<br>";
$books->addCopy(2);
//using setter using magic method
$books->setTitle("1084");
$customers->setEmail("ismail@gmail.com");
echo "Updated Book Copies: {$books->available}<br>";
echo "Updated Book Title: {$books->title}<br>";
echo"Updated Customers Email:{$customers->email}<br>";
//using getter using magic method
echo"Author name:{$books->getAuthor()}<br>";
echo"Customer ID:{$customers->getId()}<br>";
$books->getTitle();

?>