
    <div class="footer">
        <center>
        Copyright2021@MAB
        </center>
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script src="scriptadmin/validate.js"></script> -->
    <script src="../view/scriptadmin/sweetalert.js"></script>
    <?php 
    if (isset($_SESSION['stat']) && $_SESSION['stat']!=''){
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
        
        unset($_SESSION['stat']);
    }

    ?>

</body>
</html>
