function loadContent(url, destino, qs) { 
    
    
        var spinner = "<span class='spinner'>&nbsp;<img src='../../img/loading_facebook.gif' width='160' height='24' alt='Cargando' /> </span>";
        var destino = jQuery('#'+destino);
        destino.html(spinner);
        
        jQuery.ajax({
            type:"get",
            url:url,
            dataType:'html',
            data: qs,
            cache:false,
            timeout:30000,
            error:function(xhr, ts, et){
                alert("Error al cargar la pagina");
                destino.html('');
            },
            success:function(data, ts){
                window.setTimeout(function(){
                        destino.html('');
                        destino.html(data);
                    }, 500);
            }
        });
    }
    function buscarNombre(){
        var rut = document.getElementById('txt_rut_cliente').value;
        // se envia la url primero, segundo se le dice en que contenerdor carga los datos y al final se pasan los parametros
         loadContent('../../ajax/carga-nombre-cliente.php','cnt_nombre_cliente','p_rut='+rut);


    }