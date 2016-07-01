jQuery(function($){
        $.datepicker.regional['pt-BR'] = {
                closeText: 'Fechar',
                prevText: '&#x3c;Anterior',
                nextText: 'Pr&oacute;ximo&#x3e;',
                currentText: 'Hoje',
                monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
                'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
                'Jul','Ago','Set','Out','Nov','Dez'],
                dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
                dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
                weekHeader: 'Sm',
                dateFormat: 'dd/mm/yy',
                firstDay: 0,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['pt-BR']);


         $(function(){
				
    			$("body").on("click", ".calendarioF", function(){
    			if (!$(this).hasClass("hasDatepicker"))
    			{
					$(this).datepicker({
						minDate: new Date(1950, 1 - 1, 1), 
						maxDate: 0,  	
						showOn: "button",
						buttonImage: "img/c.png",
						buttonImageOnly: true
						
						
					});
					
					
    			}
    			});
    	});
    	
    	$(function(){
    			$("body").on("click", ".calendarioC", function(){
    			if (!$(this).hasClass("hasDatepicker"))
    			{
					$(this).datepicker({
					
						minDate: new Date(2000, 1 - 1, 1), 
						maxDate: 0,  	
						showOn: "button",
						buttonImage: "img/c.png",
						buttonImageOnly: true
						
						
					});
    			}
    			});
    	});
});
