
<?php


include 'connection.php';


extract($_POST);

if(isset($_POST["bn"])){
//if($_POST["bn"]==1)
{  $on=$_POST['oname'];
   //$bn=$_POST["bname"];
  $sql = "DELETE FROM booksig WHERE oname='$on'";
  mysqli_query($con,$sql);
 
}

}
/*if($_POST["bn"]==2)
{ $on=$_POST["oname"];                                              ///bname=bookname,oname=ownername,brname=borrowername
  $bn=$_POST["bname"];
  $brn=$_POST["brname"];
  $sql = "DELETE FROM books WHERE oname='$on' AND bname='$bn'";
  mysqli_query($con,$sql);
}
if($_POST["bn"]==3)
{ $on=$_POST["rname"];
  $bn=$_POST["bname"];
  $sql = "DELETE FROM booksr WHERE rname='$on' AND bname='$bn'";
  mysqli_query($con,$sql);
}

//header('location:board.php');

/*if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
*/


//}







mysqli_close($con);

?>