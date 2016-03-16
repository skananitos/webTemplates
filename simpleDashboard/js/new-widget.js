$(document).ready(function() {  
    $('#newWidget').click(function() {
        
        var str = '';
        str += '<div class="col-sm-6 col-md-4 draggable-element"><div class="widget-wrapper"><div class="widget-title">' + $('#title').val() + '<button type="button" class="btn btn-default widget-remove" aria-label="Left Align"><span class="glyphicon glyphicon-remove " aria-hidden="true"></span></button></div><div class="widget-stage">' + $('#text').val() + '</div><div class="widget-notes">' + $('#notes').val() + '</div></div></div>';

        $('.display').append(str);
        return false;
    });

    $(document).on('click', ':button', function() {
        $(this).parent().parent().parent().remove();
    });


    $(function() {
        $('.draggable-element').arrangeable();
    });

});