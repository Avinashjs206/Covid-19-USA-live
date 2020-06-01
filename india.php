<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
<div>
    <?php include 'nav.php'?>
    
</div>
    <div class="container">
        <h1 class="text-center my-5">COVID-19 LIVE UPDATE IN INDIA</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    
                <th class="text-capitalize">lastupdated</th>
                    <th class="text-capitalize">State</th>
                    <th class="text-capitalize">Confermed</th>
                    <th class="text-capitalize">Active</th>
                    <th class="text-capitalize">Recoverd</th>
                    <th class="text-capitalize">Death</th>
                    
                
                </tr>
                
            </thead>
            <tbody>
            
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);
// echo '<pre>';
// print_r($coranalive);


$i = 1;

while ($i <= 37) {
?>
    <tr>
    <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime']?></td>
    <td><?php echo $coranalive['statewise'][$i]['state']?></td>
    <td><?php echo $coranalive['statewise'][$i]['confirmed']?></td>
    <td><?php echo $coranalive['statewise'][$i]['active']?></td>
    <td><?php echo $coranalive['statewise'][$i]['recovered']?></td>
    <td><?php echo $coranalive['statewise'][$i]['deaths']?></td>
    
</tr>
<?php
    $i++;
}
        
// ?>         
            <tr>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['lastupdatedtime']?></td>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['state']?></td>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['confirmed']?></td>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['active']?></td>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['recovered']?></td>
                    <td style="background: green"><?php echo $coranalive['statewise'][0]['deaths']?></td>
                    
                </tr>

            </tbody>
        </table>
    </div>
    <div>
    <?php include 'footer.php' ?>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>