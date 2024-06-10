<?php 
  echo '
  <div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" target="_blank"><i class="fab fa-codepen"></i>THE DELUXE HOTEL</a>
    
  </div>
  <div id="nav-content">
    <div class="nav-button"><i class="fas fa-palette"></i><a href="user_view.php">My Info</a></div>
    <div class="nav-button"><i class="fas fa-images"></i><a href="bookroom.php">Book A Room</a></div>
    <div class="nav-button"><i class="fas fa-thumbtack"></i><a href="user_room_status.php">Show Booking Status</a></div>
    <hr/>
    <div class="nav-button"><i class="fas fa-heart"></i><a href="user_payment.php">Payment</a></div>
    <div class="nav-button"><i class="fas fa-chart-line"></i><a href="user_booking_history.php">Booking History</a></div>
    
    <div class="nav-button"><i class="fas fa-fire"></i><a href="../index.php">Logout</a></div>
    <div id="nav-content-highlight"></div>
  </div>
  <input id="nav-footer-toggle" type="checkbox"/>
  <div id="nav-footer">
    <div id="nav-footer-heading">
      <div id="nav-footer-avatar"><img src="https://gravatar.com/avatar/4474ca42d303761c2901fa819c4f2547"/></div>
      <div id="nav-footer-titlebox" style="width : 100px">By Artia</div>
      <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
    </div>
    <div id="nav-footer-content">
      <Lorem>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</Lorem>
    </div>
  </div>
</div>
  '
?>