<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">COVID-19 LIVE UPDATE IN U.S</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    
                    <th class="text-capitalize">state Code</th>
                    <th class="text-capitalize">Lastupdate</th>
                    <th class="text-capitalize">Total TEST</th>
                    <th class="text-capitalize">positive</th>
                    <th class="text-capitalize">recoverd</th>
                    <th class="text-capitalize">death</th>
                </tr>
            </thead>
            <tbody>
<?php

$data = file_get_contents('https://covidtracking.com/api/states');
$coranalive = json_decode($data, true);

// echo "<pre>";
//     print_r($coranalive);
// echo "</pre>";
// echo $coranalive[1]['state'];
$i = 0;

while ($i <= 55) {

?>

                <tr>
                    <td><?php echo $coranalive[$i]['state'] ?></td>
                    <td><?php echo $coranalive[$i]['dateChecked'] ?></td>
                    <td><?php echo $coranalive[$i]['totalTestResults'] ?></td>
                    <td><?php echo $coranalive[$i]['positive'] ?></td>
                    <td><?php echo $coranalive[$i]['recovered'] ?></td>
                    <td><?php echo $coranalive[$i]['death'] ?></td>
                </tr>

                <!-- echo $coranalive[$i]['state']."<br>";
    echo $coranalive[$i]['lastUpdateEt']."<br>";
    echo $coranalive[$i]['positive']."<br>";
    echo $coranalive[$i]['recovered']."<br>";
    echo $coranalive[$i]['death']."<br>"; -->

<?php
    $i++;
}

?>
            </tbody>
        </table>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>