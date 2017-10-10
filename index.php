<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
            require_once 'sql/db_connect.php';
            
            echo "Una consulta:"
            
        ?>
        
        <table id="Categorias" class="display" >
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Estado</th>
            </thead>
        </table>
        <script src="LlenaTabla.js" type="text/javascript"></script>

        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    </body>
</html>
