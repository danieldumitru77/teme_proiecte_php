


    
<!DOCTYPE html>
    <html>
    <head>
        <title>Tabla Inmulțirii</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            color:green;
        }
  </style>

</head>
<h1>Tabla Inmultirii</h1>
<body>
    <table>
        <tr>
            <th>x</th>
            <?php
                for($i=1;$i<=10;$i++){
                    echo "<td>$i</td>";
                }  
            ?>  
        </tr>
       <?php
            for($i=1;$i<=10;$i++){
               echo "<tr>";
               echo " <td>$i</td>";
               for($j = 1;$j <= 10; $j++){
                   echo "<td>$i*$j=" .$i*$j ."</td>"; 
               }
               
               echo "</tr>";
            }
        ?>

    </table>
</body>
</html>
    
    
