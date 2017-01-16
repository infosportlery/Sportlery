$(function(){
    $('#editUser').click(function (){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'))
    });
    $('#editAvatar').click(function (){
        $('#modal').modal('show')
            .find('#modalContent')
            .load($(this).attr('value'))
    });

});

 $(document).ready(function(){
        $("#stepone").modal('show')
        .find('#stepOneContent')
    });