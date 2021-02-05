<html>
    <head>
        <title>Calendrier 3</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <style type="text/css"> 
            td {text-align : center;}
        </style>
    </head>
    <body>
        <?php 
            $first = mktime(0,0,0,$_GET["month"],1,$_GET["year"]);
            $offset = date("N",$first);
            echo "<table><tbody><tr><td>Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>";
            for($i = 2-$offset; $i <= intval(date("t",$first));) {
                echo "<tr>";
                for($j = 1; $j <= 7; $j++,$i++) {
                    echo "<td>";
                    if($i >= 1 && $i <= intval(date("t",$first))) {
                        $tmp = getdate(mktime(0,0,0,date("m",$first),$i,date("y",$first)));
                        echo $tmp["mday"];
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
        ?>
    </body>
</html>