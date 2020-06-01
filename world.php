<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link/link.php' ?>
    <?php include 'css/style.php' ?>
</head>
<body onload="fetch()">
    <div>
        <?php include 'nav.php'?>
    </div>

    <div class="corona_update my-5 container-fluid">
            <div class="mb-3 text-center">
                <h3 class="mb-5" id="worlData">COVID-19 UPDATE WORLD WIDE</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-dark" id="tbval">
                    <tr>
                        <td>Country</td>
                        <td>TotalConfermed</td>
                        <!-- <td>TotalActive</td> -->
                        <td>TotalRecovered</td>
                        <td>TotalDeath</td>
                        <td>NewConfermed</td>
                        <td>NewRecovered</td>
                        <td>NewDeaths</td>
                    </tr>
                </table>
            </div>
        </div>


        <script type="text/javascript">function fetch() {
                $.get("https://api.covid19api.com/summary",
                    function(data){
                        // console.log(data['Countries'].length);
                        var tbval = document.getElementById('tbval');
                        for (let i = 1; i < data['Countries'].length; i++) {
                            var x = tbval.insertRow();
                            x.insertCell(0);
                            tbval.rows[i].cells[0].innerHTML = data['Countries'][i]['Country'];
                            tbval.rows[i].cells[0].style.background = '#38C9FB';
                            tbval.rows[i].cells[0].style.color = '#fffff';
                            x.insertCell(1);
                            tbval.rows[i].cells[1].innerHTML = data['Countries'][i]['TotalConfirmed'];
                            x.insertCell(2);
                            tbval.rows[i].cells[2].innerHTML = data['Countries'][i]['TotalRecovered'];
                            x.insertCell(3);
                            tbval.rows[i].cells[3].innerHTML = data['Countries'][i]['TotalDeaths'];
                            x.insertCell(4);
                            tbval.rows[i].cells[4].innerHTML = data['Countries'][i]['NewConfirmed'];
                            x.insertCell(5);
                            tbval.rows[i].cells[5].innerHTML = data['Countries'][i]['NewRecovered'];
                            x.insertCell(6);
                            tbval.rows[i].cells[6].innerHTML = data['Countries'][i]['NewDeaths'];
                            
                        }
                    }
                
                )
            }
            </script>

    <?php include 'footer.php'?>
</body>
</html>