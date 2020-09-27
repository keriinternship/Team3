$(document).ready(function () {
    $("#delete-button").click(function(){
        $("table tbody").find('input[name="record"]').each(function(){
            if($(this).is(":checked")){
                $(this).parents("tr").remove();
            }
        });
       
    });
})
    
