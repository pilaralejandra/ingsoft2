window.onload = function () {
    Cargar();
}


function Cargar()
{
    $('#datagrid').load('php/lista_clientes.php');
}
