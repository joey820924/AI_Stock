



    
<?php
$url = "https://test-joey820924.c9users.io/user/joey/?code=1101&macd=-0.3312312&kdjj=-0.223312";
$content = file_get_contents($url);
echo $content;
?>

<input type="text" class="form-control m-b" value=" <?php echo $_POST["prediict"];?>">
   
</input>

<a href="Joey.php">Main Page</a>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>