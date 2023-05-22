<!-- Bootstrap -->
<script src="../bootstrap/js\bootstrap.js"></script>


<!-- SweetAlert -->
<script src="../bootstrap/js\sweetalert.min.js"></script>

<?php
    if(isset($_SESSION['status']) && $_SESSION['status']  != ''){

            
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal("WOW!","Message!","success");';
                echo '}, 1000);</script>';
    
    }
?>

