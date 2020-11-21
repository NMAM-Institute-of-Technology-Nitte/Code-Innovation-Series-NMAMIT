<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

if(isset($_SESSION['status']) && isset($_SESSION['status_msg']))
{
  ?>
  <script>
    swal("Good job!", "You clicked the button!", "success");

  </script>

  <?php
  unset($_SESSION['status']);
}
  ?>
?>