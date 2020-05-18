<?php
    session_start();
    if($_SESSION['login'] != "That GRRRRREAT")

{
  exit(header('Location: login.php'));
 
          }

 $connect = mysqli_connect("localhost", "root", "root","c9");
 $query =  'SELECT * FROM  tutor ORDER BY Username ASC ';
  $result = mysqli_query($connect,$query);
?>

<!DOCTYPE html>
<html>
 <?php require 'meta.php' ?>

      <body>
      <?php require 'headerlogin.php' ?>


  <div class= "container">
  <div class= "row">
  <div id="form">
  <form action="booking.php" method="post">
  <fieldset>
  <p id="into"> Please insert  your details  <br> and the tutor  will message if the booking is accepted.</p>
  <tr>
 <td>
  <label> First Name: </label>
   </td>
   <td>
  <input size="20px" size="20px" maxlengh="15" type="text" class="   form-control" name="first" id="user" onkeyup="check_user()" required>&nbsp;
   </td>
 </tr>


  <tr>
  <td>
  Last Name:
  </td>
  <td>
  <input size="20px" type="text" size="20px" maxlengh="15" name="password"  class="Medium Text form-control" id="last">&nbsp;
</td>
</tr>
<td>
  Student Username:
  </td>
  <td>
  <input size="20px" type="text" size="20px" maxlengh="15" name="Sname"  class="Medium Text form-control" id="last">&nbsp;
</td>
</tr>

  <tr>
  <td>
  Phone number:
  </td>
  <td>
  <input size="20px" type="text" size="20px" maxlengh="15" name="phonenumber"  class="Medium Text form-control" id = "pn">&nbsp;

  </td>


  </tr>
  <tr>
  <td align = "right" id = "lt">
  Location:
  </td>
  <td>
  <input size="20px" type="text" size="20px" maxlengh="15" name="location"  class="Medium Text form-control" >&nbsp;

  </td>
  </tr>
  <tr>

  <td align = "right" id = "lt">
  Tutor:

  </td>
  <td>
  <select  name="tutor" class="col-12"> 
  <?php 
                                       while ($row = mysqli_fetch_array($result) )
                                        {
                                           echo'  <option size= "" type="text" class=" text form-control" value="'.$row['Username'].'">'.$row['Username'].'</option>';
                                        }
                                        ?>
                                  
                                     </select>
  </td>
  </tr>
  <tr>
  <td align = "right" id="lt">
  Booking date:
  </td>
  <td>
  <input type="date" name="bookingd" id = "dates"  class="Medium Text form-control"  >&nbsp;
  </td>

  </tr>



  <tr>
  <td align = "right" id = "lt">
 Session Start:

  </td>
  <td>
  <td>
  <select  name="time">
                                     <option size= "" type="text" class=" text form-control" value="9am">9am</option>
                                    <option size= "" type="text" class=" text form-control"   value="10 am ">10am</option>
                                    <option size= "" type="text" class=" text form-control" value="11 am">11am</option>
                                    <option size= "" type="text" class=" text form-control"   value="12pm">12pm</option>
                                    <option size= "" type="text" class=" text form-control" value="1pm">1pm </option>
                                    <option size= "" type="text" class=" text form-control"   value="2pm">2pm</option>
                                    <option size= "" type="text" class=" text form-control" value="3pm">3pm</option>
                                    <option size= "" type="text" class=" text form-control"   value="4pm">4pm</option>
                                    <option size= "" type="text" class=" text form-control" value="5pm">5pm</option>
                                    <option size= "" type="text" class=" text form-control" value="6pm">6pm</option>
                                  
                                     </select>
  </td>
  </td>
<td>
Session End:
<select name="timz">
 
                                    <option size= "" type="text" class=" text form-control"   value="10am ">10am</option>
                                    <option size= "" type="text" class=" text form-control" value="11am">11am</option>
                                    <option size= "" type="text" class=" text form-control"   value="12pm">12pm</option>
                                    <option size= "" type="text" class=" text form-control" value="1pm">1pm</option>
                                    <option size= "" type="text" class=" text form-control"   value="2pm">2pm</option>
                                    <option size= "" type="text" class=" text form-control" value="3am">3pm</option>
                                    <option size= "" type="text" class=" text form-control"   value="4pm">4pm</option>
                                    <option size= "" type="text" class=" text form-control" value="5pm">5pm</option>
                                    <option size= "" type="text" class=" text form-control" value="6pm">6pm</option>
                                    <option size= "" type="text" class=" text form-control" value="7pm">7pm</option>
                                    </select>

</td>
</td>
  </tr>
     <td> 
      <div class="availablive">
      <select name="available">
      <option size= "" type="text" class=" text form-control"   value="pending" >pending </option>
      </select>
      </div>
      </td>
  <div class="next loginbutton">
   <button type="submit" class="button" name="submit">Book</button>
   

</fieldset>
</form>


                      </body>

</div>
</div>

</html>
