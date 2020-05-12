
   <div class = "container">
   <div class= "row">
   <h1> S2T </h1>
    </div>
   </div>

 
   <ul class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars"></span>
  </button>
 

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
   <div class= "container">
    <div class="row">
    <ul class="navbar-nav">
      <li>
      <a href="profilepage.php" class="nav-link" ><?php  echo $_SESSION['Username']; ?> </a>
      </li>
      <li>
      <a class="nav-link"  href="messages.php">Messages  </a>
      </li>
      <li>
      <a class="nav-link"  href="book.php">Booking</a>
      </li>
      <li>
				 	<a  class="nav-link" href="logout.php"> Log Out </a>
      </li>
    </ul>
   </div>
   </div>
  </div>
</ul>

<style>
.navbar .fa-bars
{
  color:black !important
}

 
</style>