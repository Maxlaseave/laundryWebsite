<!-- Bootstrap -->
<script src="../bootstrap/js\bootstrap.js"></script>


<!-- SweetAlert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
    if(isset($_SESSION['status']) && $_SESSION['status']  != ''){
        ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['status']; ?>",  
                    icon: "<?php echo $_SESSION['status_code']; ?>",
                    button: "Done",
                });
            </script>
        <?php
            unset($_SESSION['status']);
    }

?>
