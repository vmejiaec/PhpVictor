$(document).ready(
    function (){
        $('#Categorias').DataTable(
                {
                    "ajax":'categorias.txt'
                }
        );
    }
);


