/* função para exibir a mensagem de carregando */
function saving(msg){
    window.onbeforeunload=null;
    if(typeof(msg)==="undefined"){
        msg="Aguarde um momento";
    }
    $('body').append('<div class="overlay"><p class="text yellow">'+msg+'</p></div>');
    $('.overlay').fadeIn();
}

/* função para exibir a mensagem de finalização */
function saved(msg){
    window.onbeforeunload=null;
    if(typeof(msg)==="undefined"){
        msg="Dados salvos com sucesso";
    }
    $('.overlay').stop().fadeOut();
    $('body').append('<div class="overlay"><p class="text green">'+msg+'</p></div>');
    setTimeout(function(){
        $('.overlay').stop().fadeOut(function(){
            $('.overlay').remove();
        });
    },1000);
}

$(document).ready(function(){
    
    /* a mágia está aqui! */
    $('.ajaxForm').submit(function(e){
    
        e.preventDefault();
        e.stopPropagation();
    
        var currentForm = $(this);
        var valida = true;
    
        //uma pequena validação simples, para os campos com a classe "required"
        currentForm.find('.required').each(function(){
            if($(this).val()===""){
                $(this).css({borderColor:'#ff0000'});
                valida = false;
                return false;
            }else{
                $(this).css({borderColor:'#bdc3c7'});
            }
        });
    
        //se está validado, envia o form para a url do mesmo
        if(valida){
            saving('Aguarde');
            var src = $(this).attr('action');
            
            //o grande segredo de enviar um formulario por ajax, o FormData();
            var data = new FormData($(this)[0]);
            $.ajax({
                url: src,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function(data){
                    saved('Dados enviados com sucesso');
                    //exemplo de como tratar os dados depois do retorno... o objeto data tem todos os campos enviados
                    $('.footer').html('Retorno do AJAX: '+data.nome1+" - "+data.nome2+" - "+data.nome3+" - "+data.foto1+" - "+data.foto2+" - "+data.foto3+'');
                }
            });
        }
        return false;
    });
    
});