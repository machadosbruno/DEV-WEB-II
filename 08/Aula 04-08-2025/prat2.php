<!DOCTYPE html>
 <html>
   <head>
     <title>Quadrados</title>
     <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
   </head>
   <body>
     <table>
       <tr>
         <th>Número</th>
         <th>Quadrado</th>
       </tr>
       <?php
            $numero = 1;
            while ($numero <= 10):
                $quadrado = $numero * $numero; ?>
                <tr>
                    <td><?= $numero ?></td>
                    <td><?= $quadrado ?></td>
                </tr>
                <?php
                $numero++;
            endwhile;
        ?>
     </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    </body>
 </html>