<html>
<head>
<title>Prueba de PHP</title>
</head>
<body>
    <?php
        
        
    
    $NU=$_POST["Unidades"];      
    for($a=1; $a<=$NU; $a++)
    {  
        echo"<table border='1' align='center'>";
        echo"<thead>";
            echo"<tr>";
                echo"<th>"; 
                    echo$_POST["Artista"],"<br>";
                echo"</th>"; 
                echo"<th>"; 
                    echo$_POST["Nombre"],"<br>";
                echo"</th>"; 
                echo"<th>"; 
                    echo$_POST["Apellido"],"<br>";
                echo"</th>"; 
                echo"<th>"; 
                    echo$_POST["Lugar"],"<br>";
                echo"</th>"; 
            echo"</tr>";
        echo"</thead>";
        echo"<tbody>";
            echo"<tr>";
                echo"<td>";
                    $artista = $_POST['Artista'];

                    switch($artista)
                    {
                        case "Bruses":
                            echo "<img src='/img/Bruses.jpg'>";
                        break;
                        case "Morat":
                            echo "<img src='/img/Morat.jpg'>"; 
                        break;
                        case "SCRUBB":
                            echo "<img src='/img/SRUBB.jpg'>";
                        break;
                        case "(G)I-DLE":
                            echo "<img src='/img/(G)I-DLE.jpg'>";
                        break;
                    }
                echo"<td>";
                    $p3 =(isset($_POST["P3"]) && $_POST["P3"] != "")? $_POST ["P3"] : false;
                    $p1 =(isset($_POST["P1"]) && $_POST["P1"] != "")? $_POST ["P1"] : false;
                    $p2 =(isset($_POST["P2"]) && $_POST["P2"] != "")? $_POST ["P2"] : false;
                    $p4 =(isset($_POST["P4"]) && $_POST["P4"] != "")? $_POST ["P4"] : false;
                        echo$p1,"<br>";
                        echo$p2,"<br>";
                        echo$p3,"<br>";
                        echo$p4,"<br>";
                echo"<td>";
                        
                 $V1 =(isset($_POST["OP1"]) && $_POST["OP1"] != "")? $_POST ["OP1"] : false;
                 $V2 =(isset($_POST["OP2"]) && $_POST["OP2"] != "")? $_POST ["OP2"] : false;
                 $V3 =(isset($_POST["OP3"]) && $_POST["OP3"] != "")? $_POST ["OP3"] : false;
                 $V4 =(isset($_POST["OP4"]) && $_POST["OP4"] != "")? $_POST ["OP4"] : false;
                     echo$V1,"<br>";
                     echo$V2,"<br>";
                     echo$V3,"<br>";
                     echo$V4,"<br>";
                    echo$_POST["Fecha"],"<br>";
                echo"<td>";
                    $zona = $p1;
                    
                        switch($zona )
                        {
                            case "General A":
                                echo "<img src='/img/GeneralA.jpg'>";
                            break;
                        } 
                    $zona2 = $p2;
                    switch($zona2)
                    {
    
                        case "General B":
                            echo "<img src='/img/GeneralB.jpg'>"; 
                        break;
                      
                    } 
                    $zona3 = $p3; 
                    switch($zona3 )
                    {
                        case "Naranja AA":
                            echo "<img src='/img/NaranjaA.jpg'>";
                        break;
                    }  
                    $zona4 = $p4;
                    switch($zona4)
                    {
                        case "Platino A":
                            echo "<img src='/img/Platino.jpg'>";
                        break;
                    }        
                echo"</td>";

                echo"</th>";
                    
                echo"</tr>"; 
                
        echo"</tbody>";

        echo"</table>";
    }

       
    ?>
</body>
</html>