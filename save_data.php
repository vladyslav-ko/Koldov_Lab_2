<?php    
$name = $_POST['name']; 
$pages = $_POST['Number_of_pages']; 
$price = $_POST['Price']; 
$publisher = $_POST['Publisher']; 
$subject = $_POST['Subject']; 
$year = $_POST['Year_of_issue']; 
include ("bd.php");
$result = ("INSERT INTO mag (name,Number_of_pages,Price,Publisher,Subject,Year_of_issue) VALUES ('$name','$pages','$price','$publisher','$subject','$year')");
$stmt = $db->prepare($result);
$stmt->execute();
?>

<div style="max-width: 1000px; margin: 0 auto; text-align: center; font-size: 20px;">Дані надіслано. Ви можете їх знайти на сайті. <a href='index.php' style="text-decoration: none; color: green;">Сторінка з даними</a></div>
