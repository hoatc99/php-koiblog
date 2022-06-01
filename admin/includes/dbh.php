<?php

    $servername = 'byt3adjecddqfpnhuj91-mysql.services.clever-cloud.com';
    $dbUsername = 'ukjs091upjezxrbf';
    $dbPassword = 'cXiAVmralrRtrA6i4IdE';
    $dbName = 'byt3adjecddqfpnhuj91';
    
    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }