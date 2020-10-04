<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
             	<link rel="stylesheet" href="st.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
 
             

    <body>
          
           <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="width:100%;">
            
        <span class="sar-icon">
          <i class="fa fa-book" style="font-size:30px;color:#042331"></i> 
        </span>
              <a href="#" class="navbar-brand">DASHBOARD</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
              </button>
             
              <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                      <a href='#' class="nav-link active">ACTIVITY</a>
                    </li>
                    <li class="nav-item">
                      <a href='#' class="nav-link">YOUR LIBRARY</a>
                    </li>
                    <li class="nav-item">
                      <a href='#' class="nav-link">LOG OUT</a>
                    </li>
                </ul>
              </div>
			      
          </nav>
          
          
          <br>
          <br>
          <div class="row">
		        <div class="col-1"></div>
            <div class="col-md-4 col-10 ">
              <table class="table table-dark table-striped table-hover">
                <thead>
                  <tr>
                    <th>BOOKS ISSUED</th>
                    <th>TO</th>
                  </tr>
                </thead>
                <tbody id="issued">

                                                                  
                                                      <?php
                                                include "connection.php";

                          $name='hi';
                                                $sql = "SELECT id,bname,boname,oname FROM booksig";   ///
                                              $query = mysqli_query($con, $sql);




                                            
                                              if (mysqli_num_rows($query) > 0) {
                                                $no='A';
                                              while($res=mysqli_fetch_array($query)){
                                                     ?>

                                                    
                                                     <tr>
                                                       <td> <?php echo$res['bname']; ?> </td>
                                                       <td> <?php echo$res['boname']; ?>  </td>
                                                       <td> <a href="R.php?id=<?php echo$res['id'] ?>&no=<?php echo$no?>"><input class="btn btn-primary bibn" type="button" value="GOT IT"></a> </td>
                                                     </tr>
                                         <?php
                                              }
                                            }





                                             // mysqli_close($con);
                                              ?>




                </tbody>
              </table>                                                               
            </div> 
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-md-4 col-10 ">
              <table class="table table-dark table-striped table-hover">
                <thead>
                  <tr>
                    <th>BOOKS GRANTED</th>
                    <th>BY</th> 
                  </tr>
                </thead>
                <tbody id="granted">



                <?php
                                           //     include "connection.php";

                          $name='hi';
                                                $sql = "SELECT id,bname, boname,oname FROM booksig";   ///
                                              $query = mysqli_query($con, $sql);





                                            
                                              if (mysqli_num_rows($query) > 0) {

                                              while($res=mysqli_fetch_array($query)){
                                                     ?>

                                                    
                                                     <tr>
                                                       <td> <?php echo$res['bname']; ?> </td>
                                                       <td> <?php echo$res['oname']; ?>  </td>
                                                     </tr>
                                         <?php
                                              }
                                            }





                                         //     mysqli_close($con);
                                              ?>



                </tbody>
              </table>
            </div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-md-4 col-10 " >
              <table class="table table-dark table-striped table-hover">
                <thead>
                  <tr>
                    <th>BOOKS</th>
                  </tr>
                </thead>
                <tbody id="books">



                <?php
                                            //    include "connection.php";

                          $name='hi';
                                                $sql = "SELECT id,bname FROM books"; ///
                                              $query = mysqli_query($con, $sql);





                                            
                                              if (mysqli_num_rows($query) > 0) {
                                                $no='B';
                                              while($res=mysqli_fetch_array($query)){
                                                     ?>

                                                    
                                                     <tr>
                                                       <td> <?php echo$res['bname']; ?> </td>
                                                       <td> <a href="R.php?id=<?php echo$res['id'] ?>&<?php echo$no?>"><input class="btn btn-primary bibn" type="button" value="GOT IT"></a> </td>
                                                     </tr>
                                         <?php
                                              }
                                            }





                                            //  mysqli_close($con);
                                              ?>






                </tbody>
              </table>
            </div>  
            <div class="col-1"></div>
            <div class="col-1"></div>
              <div class="col-md-4 col-10 ">
                <table class="table table-dark table-striped table-hover">
                  <thead>
                    <tr>
                      <th>BOOKS REQUESTED</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody id="requested">

                  <?php
                                           //     include "connection.php";

                          $name='hi';
                                                $sql = "SELECT id,bname FROM booksr";  ///
                                              $query = mysqli_query($con, $sql);
                                                                              
                                          



                                                     $no='C';
                                              if (mysqli_num_rows($query) > 0) {

                                              while($res=mysqli_fetch_array($query)){
                                                    $sqli="SELECT id,oname,bname FROM books";    ///
                                                    $quer= mysqli_query($con, $sqli);
                                                    if(mysqli_num_rows($quer) > 0){                                                    
                                                    $re = mysqli_fetch_array($quer);
                                                    ?>

                                                    
                                                     <tr>
                                                       <td> <?php echo$re['bname']; ?> </td>
                                                       <td> <?php echo$re['oname']; ?>  </td>
                                                       <td> <a href="R.php?id=<?php echo$res['id'] ?>&no='C'"><input class="btn btn-primary bibn" type="button" value="GOT IT"></a> </td>
                                                     </tr>
                                         <?php
                                              }

                                              else{
                                                         ?>
                                                <tr>
                                                       <td> <?php echo$res['bname']; ?> </td>
                                                       <td> <?php echo'NA'; ?>  </td>
                                                       <td> <a href="R.php?id=<?php echo$res['id'] ?>&<?php echo$no ?>"><input class="btn btn-primary bibn" type="button" value="GOT IT"></a> </td>
                                                     </tr>
                                              <?php
                                              }

                                            }
                                          }




                                              mysqli_close($con);
                                              ?>


                  </tbody>
                </table>
            </div>  
			      <div class="col-1"></div>
          </div>
<footer class="page-footer font-small stylish-color-dark pt-4 bg-dark" style="margin-top:70px;">


  

</footer>




      <script>
           
       




      </script>


  </body>
</html>  
