<html>
    <head>
 <title>Passar Variável Javascript para PHP</title>
 <script type="text/javascript">
     var variaveljs = 'Mauricio Programador';
     </script>
    </head>
    <body>
            <?php
            $teste =  '<script>document.write(variaveljs)</script>';
            echo $teste;
            ?>
        </body>
        </html>