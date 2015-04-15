<?php
require('../controller/db_connect.php');

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cat7 Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <script src="../js/respond.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>

<img src="../img/androidlogo1.png">
<!-- javascript -->

<!-- Run this in CMD "cordova plugin add org.apache.cordova.device" -->
<script>
    document.addEventListener("deviceready", onDeviceReady, false);
    function onDeviceReady() {
        console.log(device.cordova);
    }

</script>
<button type="button">Check Device</button>


<div></div>
</body>
</html>


