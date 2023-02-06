echo '
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon site PHP</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>

        <table>
            <thead>
             
            
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                <tr>
            </thead>
            
            <tbody>

            <?php
                

                for($intI=1 ;$intI<=10; $intI++){
                   echo "<tr><th>$intI</th>";
                   for($intJ=1; $intJ<=10; $intJ++){
                    echo '<td>'. $intI * $intJ .'</td>';
                   } 
                   echo  '</tr>';
                }
                
                ?>
                
            </tbody>

        </table>
    </body>
</html>