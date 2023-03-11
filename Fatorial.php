  <!DOCTYPE html>
<html>
    <head>
        <title>Fatorial</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                
                <tr>
                    <td>Número :</td>
                    <td><input type="text" name="numero"></td>
                </tr>       
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    

    $i = $_POST["numero"];
    $calc = 1;
    while ($i > 1){
        $calc *= $i;
        $i--;
    }

    echo "O valor fatorial é :".$calc;
    

   
}
?>