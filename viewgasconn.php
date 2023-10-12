<?php
include('admindashboard.php');
?>

<?php include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "inside isset";
    $id=$_POST['ids'];
    echo $id;
    $sql="DELETE FROM connection WHERE connection_id='".$id."'";
    $result=mysqli_query($conn,$sql);
}
else{
   
}?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/admin.css" />
    <link href="{% static 'css/bootstrap.min.css" rel="stylesheet' %}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="main">
    
      <h1 class="text-center"></h1><br>
    
      <table class="table table-light table-striped" style="opacity: 0.8;">
            <thead>
        
                <tr>
                    <th>Connecttion id</th>
                    <th> Custid</th>
                    <th>Rationcardno</th>
                    <th>aadharno</th>
                    <th>Noofcylinder</th>
                    <th>photo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM connection where status=1";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                           
                                        
                                    <tr><td><?php echo $row['connection_id']?></td>
                                    <td><?php echo $row['c_id']?></td>
                                    <td><?php echo $row['ratcard']?></td>
                                    <td><?php echo $row['aadharno']?></td>
                                    <td><?php echo $row['no_of_cylinder']?></td>
                                    <td><img src="./uploads/<?php echo $row['photo']; ?>" class="card-img-top img-fluid card-img"style="width:50px;height:50px;"></td>
                                    <td>

                                    
                                    <form method="POST" action="viewgasconn.php">
                                    <input type="hidden" name="ids" value="<?php echo $row['connection_id'];?>">
                                    <input type="submit" name="connection_id" value="DELETE" class="btn btn-danger">
                </form>
                                    </td>
                                    
                
                                    
                </tr>
                                    
                <?php } ?>
            </tbody>
        </table>
      
    
   
  
    </main>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>