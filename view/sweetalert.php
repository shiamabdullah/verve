
<script src="../view/scriptadmin/sweetalert.js"></script>

    <?php 
    if (isset($_SESSION['status']) && $_SESSION['status']!=''){
        ?>
        <script>
        swal({
            title: "<?php echo $_SESSION['stat'] ;?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['stat_code'] ;?>",
            button: "Ok. Done",
            });
        </script>
        <?php
        
        unset($_SESSION['status']);
    }