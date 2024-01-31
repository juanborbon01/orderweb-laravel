$(document).ready(function(){
    $('#table-data').DataTable();
});

function remove()
{
    if(confirm("¿esta seguro  de eliminar el registro?"))
        return true;
    else
        return false;
}