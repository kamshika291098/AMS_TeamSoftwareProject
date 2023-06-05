$(function () {
           $('#medical_name').autocomplete({
               source:function(request,response){
                
                   $.getJSON('?term='+request.term,function(data){
                        var array = $.map(data,function(row){
                            return {
                                id:row.id,
                                dosage:row.dosage
                            }
                        })

                        response($.ui.autocomplete.filter(array,request.term));
                   })
               },
               minLength:1,
               delay:500,
               select:function(event,ui){
                   $('dosage').val(ui.item.dosage)
               }
           })
})