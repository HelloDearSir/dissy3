<?php
    session_start();
    if($_SESSION['login'] != "That GRRRRREAT")

{
  header('Location: login.php');
  exit();
          }

?>
<html>
<head> <link rel="stylesheet" a href="css/book.css">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta charset="utf-8">
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3..3.1/jquery"></script></head>
      <body>
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




                      </body>



</html>
