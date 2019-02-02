<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monitoring Tanah</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css" />
</head>
<body>
<div class="container">
    <div align="center" style="margin-top: 2%;margin-bottom: 5%;"><h3>Monitoring Tanaman<h3></div>
    <div class="row">
        <h5 class="col-xs-1">Suhu</h5>
        <div class="col-xs-11">
            <div class="progress">
            <div id="valueTemp" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h5 class="col-xs-1">Kelembaban Tanah</h5>
        <div class="col-xs-11">
            <div class="progress">
            <div id="valueSoil" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
            </div>
            </div>
        </div>
    </div>
</div>

    <!-- script -->
    <script>
        onLoad();

        function onLoad(){
            var value;
            var dataHandler = $("label");
            dataHandler.html('');
            $.ajax({
                type  : 'GET',
                data : '',
                url : 'ambilData.php',
                success : function(result){
                    var obj= JSON.parse(result);
                    valueTemp = obj.suhu;
                    valueSoil = obj.soil;
                    $('#valueTemp').css('width', valueTemp);
                    $('#valueTemp').html(valueTemp +' %');
                    $('#valueSoil').css('width', valueSoil);
                    $('#valueSoil').html(valueSoil +' %');
                }
            })
            //document.getElementById("value").innerHTML="34";
            //document.getElementById("data").className=classProgress;
        }
    </script>
</body>
</html>