<?php

function pingAddress($ip) {
    $pingresult = exec("ping -W 3 -c 1 $ip && exit", $outcome, $status);
    if (0 == $status) {
        $status = "online";
    } else {
        $status = "offline";
    }
    echo "<div align=center>The website, $ip, is  ".$status."</div>";
}



 ?>