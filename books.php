<?php
session_start();
if($_SESSION['login'] != "That GRRRRREAT") {
	header('Location: login.php');
	exit();
} else {
	$username = $_SESSION['Username'];
}
?>

<!DOCTYPE html>
<html lang="en-GB">
<?php require 'meta.php' ?>
  
  <body>
  <?php require 'headerlogin.php' ?>
    <div class="container">
     <div class="row">


        <div class="heading">
            <h2> booking</h2>
        </div>
         <div class="container">
          <div class="row">
        <input size="20px" size="20px" maxlengh="15" type="text" name="username" id="user" required>
                                <div id = "filter"></div>
                                </div>
                                </div>
        <table class="table">
            <thead>
                <tr>
                    <th>First Name </th>
                    <th>&nbsp;</th>
                    <th>Last Name </th>
                    <th>&nbsp;</th>
                    <th>Phone Number</th>
                    <th>&nbsp;</th>
                    <th> Location </th>
                    <th>&nbsp;</th>
                    <th>Time </th>
                    <th>&nbsp;</th>
										<th>Date  </th>
										<th>&nbsp;</th>
										<th>Stautes </th>
										<th>&nbsp;</th>
										<th>Action </th>
										<th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
							<?php
						
							require 'connection.php';
							//select from tasks db where student = session cookie
								$query= 'SELECT * FROM  `booking` WHERE `tutor`= "'.$_SESSION['Username'].'"';
								$results = mysqli_query($connect, $query);
									if ($results)
										{ //if the query is uccessful then do this.
											while ($row = mysqli_fetch_assoc($results))
											{
												$tutor= $row['tutor'];
												$fn= $row['First'];
												$ln = $row['Last'];
												$meetplace = $row['location'];
												$time = $row['time'];
												$date = $row['bookingd'];
												$phonen = $row['Phone'];
												if($tutor == $_SESSION['Username'])
												{ ?>
													<tr>
														<td class= "task"> <?php echo $fn; ?></td>
															<td>&nbsp;</td>
														<td class= "task"> <?php echo $ln; ?></td>
														<td>&nbsp;</td>
                           <td class = "task"> <?php echo $phonen;?> </td>
														<td>&nbsp;</td>
															<td class = "task"><?php echo $meetplace;?></td>
														<td>&nbsp;</td>
														<td class = "task"> <?php echo $time;?> </td>
														<td>&nbsp;</td>
														<td class = "task"><?php echo $date;?> </td>
														<td> &nbsp;</tb>

															<td class = "colr" id= "color">pending</td>

<td class = "delete"> <a href="books.php?del_task=<?php echo $row['id'];?>"> X</a></td>
                 <td class="tick" id ="tick"> <a href='#'> &#10004; </a></td>
             </tr>


             <?php }
           }
              } ?>
            </tbody>


        </table>
      </div>
     </div> 
    </div>  
    </body>
<script>
$(document).ready(function(){

    $('.deletes').css({color:'green'});
        $('.tick').css({color:'red'});
    $(".colr").css({color:'orange'});

});

    $(".tick").click(function()
    {
        var colors = $(this).data('colr');
        $("#color").text("accept");
          // $(".colr").text().replace("pending", "Accept");
     $("#color").css("color","green");

        //$(this).css("color", "green");
    });



    </script>
</html>
