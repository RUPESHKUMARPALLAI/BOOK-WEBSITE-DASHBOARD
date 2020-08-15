
<?php


include 'connection.php';

$id=$_GET['id'];
$no=$_GET['no'];

if($no=='A')
$dq="DELETE FROM booksig WHERE id=$id";

if($no=='B')
$dq="DELETE FROM books WHERE id=$id";

if($no=='C')
$dq="DELETE FROM books WHERE id=$id";








$query=mysqli_query($con,$dq);


mysqli_close($con);


header('location:board.php');

?>
