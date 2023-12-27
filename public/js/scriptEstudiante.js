$(document).ready(function(){
    $(document).on('click','.btn-primary', function(){

        console.log(`Editar Registro ${ $(this).val() }`);
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $('<form action="/estudiantes/' + $(this).val() + '" method="POST"><input type="hidden" name="_method" value="PATCH"/><input //type="hidden" name="_token" value="'
        + token + '"/></form>').appendTo('body').submit();
    });

    $(document).on('click','.btn-danger', function(){

        console.log(`Eliminar Registro ${ $(this).val() }`);
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        if(confirm('Está seguro de eliminar el registro?')){
            $('<form action="/estudiantes/' + $(this).val() + '" method="POST"><input type="hidden" name="_method" value="DELETE"/><input //type="hidden" name="_token" value="'
            + token + '"/></form>').appendTo('body').submit();
        }
        
    });
});