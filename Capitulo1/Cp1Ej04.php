<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            td { height: 20%;
                 width: 15%;
                 text-align: center;                
            }
        </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $dwes = "DWES";
        $dwec = "DWEC";
        $daw = "DAW";
        $diw = "DIW";
        $einem = "EINEM";
        $hlc = "HLC";
        
        ?>
        
        <table style="width:100%; height:100%">
            <tr>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <tr>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $diw;?></td>
            </tr>
            <tr>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $diw;?></td>
            </tr>
            <tr>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $dwes;?></td>
                <td><?php echo $dwec;?></td>
                <td><?php echo $diw;?></td>
            </tr>
            <tr>
                <td><?php echo $einem;?></td>
                <td><?php echo $daw;?></td>
                <td><?php echo $hlc;?></td>
                <td><?php echo $einem;?></td>
                <td><?php echo $diw;?></td>
            </tr>
            <tr>
                <td><?php echo $diw;?></td>
                <td><?php echo $daw;?></td>
                <td><?php echo $hlc;?></td>
                <td><?php echo $einem;?></td>
                <td><?php echo $dwes;?></td>
            </tr>
            <tr>
                <td><?php echo $diw;?></td>
                <td><?php echo $daw;?></td>
                <td><?php echo $hlc;?></td>
                <td><?php echo $einem;?></td>
                <td><?php echo $dwes;?></td>
            </tr>
        </table>
    </body>
</html>
