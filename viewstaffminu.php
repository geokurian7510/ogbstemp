<?php
include('admindashboard.php');
?>

<?php include('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    echo "";
    $id=$_POST['ids'];
    echo $id;
    $sql="DELETE FROM staff WHERE s_id='".$id."'";
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
                    <th>Id</th>
                    <th>F_name</th>
                    <th>L_name</th>
                    <th>phone number</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM staff where status=1";
                $result = mysqli_query($conn,$sql);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                           
                                        
                                    <tr><td><?php echo $row['s_id']?></td>
                                    <td><?php echo $row['f_name']?></td>
                                    <td><?php echo $row['l_name']?></td>
                                    <td><?php echo $row['phn_number']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td>

                                    
                                    <form method="POST" action="viewstaffminu.php">
                                    <input type="hidden" name="ids" value="<?php echo $row['s_id'];?>">
                                    <input type="submit" name="s_id" value="DELETE" class="btn btn-danger">
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