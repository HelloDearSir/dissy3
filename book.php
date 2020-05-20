<?php
    session_start();
    if($_SESSION['login'] != "That GRRRRREAT")

{
  header('Location: login.php');
  exit();
          }

 $connect = mysqli_connect("localhost", "root", "root","c9");
 $query =  'SELECT * FROM  tutor ORDER BY Username ASC ';
  $result = mysqli_query($connect,$query);
?>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
<!DOCTYPE html>
=======
>>>>>>> parent of b50c7b2... working version so far
<html>
<head> <link rel="stylesheet" a href="css/book.css">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta charset="utf-8">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3..3.1/jquery"></script></head>
      <body>
<<<<<<< HEAD
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
<<<<<<< HEAD
  <?php 
                                       while ($row = mysqli_fetch_array($result) )
                                        {
                                           echo'  <option size= "" type="text" class=" text form-control" value="'.$row['Username'].'">'.$row['Username'].'</option>';
                                        }
                                        ?>
=======
                                    <option size= "" type="text" class=" text form-control"> </option>
                                    <option size= "" type="text" class=" text form-control" value="Micky_Rowe">Micky_Rowe</option>
                                    <option size= "" type="text" class=" text form-control"   value="John_Doe">John_Doe  </option>
                                    <option size= "" type="text" class=" text form-control" value="Elizabeth_Burrows">Elizabeth_Burrows </option>
                                    <option size= "" type="text" class=" text form-control"   value="Aidan_Glover"> Aidan_Glover  </option>
                                    <option size= "" type="text" class=" text form-control" value="Isobel_Cartwright">Isobel_Cartwright </option>
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
                                  
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
<<<<<<< HEAD
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
=======
                                     <option size= "" type="text" class=" text form-control" value="9am">9 am   </option>
                                    <option size= "" type="text" class=" text form-control"   value="10 am ">10 am  </option>
                                    <option size= "" type="text" class=" text form-control" value="11 am">11 am   </option>
                                    <option size= "" type="text" class=" text form-control"   value="12pm">12 pm   </option>
                                    <option size= "" type="text" class=" text form-control" value="1pm">1 pm </option>
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
                                  
                                     </select>
  </td>
  </td>
<td>
Session End:
<select name="timz">
 
<<<<<<< HEAD
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
=======
                                    <option size= "" type="text" class=" text form-control"   value="10 am ">10 am  </option>
                                    <option size= "" type="text" class=" text form-control" value="11 am">11 am   </option>
                                    <option size= "" type="text" class=" text form-control"   value="12pm">12 pm   </option>
                                    <option size= "" type="text" class=" text form-control" value="1pm">1 pm </option>
>>>>>>> 60e53da2d963d01990f9348501812428236030e8
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
=======
  <div id ="nav">
    <div id ="nav">
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle">
      <div class = "menu">
        <a href="profilepage.php"><?php  echo $_SESSION['Username']; ?> </a>
          <a href="messages.php">Messages  </a>
            <a href="book.php">Booking</a>
            <a href="logout.php"> Log Out </a>
                </div>
                      </div>

                      </ul>
                      <div id= "container">
                      <div id="form">
                      				 	<form action="booking.php" method="post">
                      					<table>
                                  <p id="into"> Please insert the Tutor username <br> and they will message if the booking is accepted.</p>
                      						<tr>
                      							<td align= "right" id = "lt">
                      								First Name:
                      							</td>
                      							<td>
                      								<input size="20px" size="20px" maxlengh="15" type="text" name="first" id="user" onkeyup="check_user()" required>



                      						</tr>
                        </div>
                      						<tr>
                      							<td align = "right" id="lt">
                      								Last Name:
                      							</td>
                      							<td>
                      								<input size="20px" type="textf" size="20px" maxlengh="15" name="password" id="last">&nbsp;

                      							</td>


                      						</tr>

                      						<tr><td align = "right" id = "lt">
                      								Phone number:
                      							</td>
                      							<td>
                      								<input size="20px" type="text" size="20px" maxlengh="15" name="phonenumber" id = "pn">&nbsp;

                      							</td>


                      						</tr>
                                              <tr>
                      							<td align = "right" id = "lt">
                      								Location:
                      							</td>
                      							<td>
                      								<input size="20px" type="text" size="20px" maxlengh="15" name="location">&nbsp;

                      							</td>
                                              </tr>
                        <tr>

	<td align = "right" id = "lt">
                         Tutor:

                            </td>
                            <input size = "20px" type="text" maxlengh="15" name="tutor" id = "tutors">
                                              </tr>
                                              <tr>
                                                  <td align = "right" id="lt">
                      								Booking date:
                      							</td>
                                         <td>
                                           <input type="date" name="bookingd" id = "dates" >
                                         </td>

                                              </tr>



                                              <tr>
                                            <td align = "right" id = "lt">

                                              Time slot

                                              </td>
                                              <td>
                                                  <input type = "text" name ="time" id = "times">
                                                  </td>

                                              </tr>
                      						 <td colspan= "2" align="left">  <button type="submit" class="button" name="submit">Book</button></td>

                      					</div>


>>>>>>> parent of b50c7b2... working version so far


                      </body>



</html>
