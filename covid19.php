<?php
    $SERVER = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'covid19';

    $con = mysqli_connect($SERVER, $username, $password, $db);

    if ($con) {
        ?>
        <script>
            // alert('conection seccessfull');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('conection not seccessfull');
        </script>
        <?php
    }
?>

