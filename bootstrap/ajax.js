$(".navbar-ex-collapse a").click(function(e){
		e.preventDefault();
		var href = $(this).attr('href');
		$(".container").load(href + " .container");
		}
 });
