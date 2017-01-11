$("document").ready(function(){
	//alert('Page Loaded');

	function cardloading(){
		date = $("#date").val();
		product = $("#product").val();
	$.ajax({
		url: 'product_reference.json',
		type: 'get',
		dataType: 'JSON',
		error: function(data){
			alert('ping');
			console.log(data.parsererror);
		},
		success: function(data){
			$.each(data, function(index, value) {
				console.log(Object.keys(value));
				console.log(index);
				console.log(value);
				console.log(value.id);
				console.log(value.product_name);
				console.log(value.product_date);
				console.log(value.quantity);
				console.log(date); 
				console.log(product); 
				
				
				var id = value.id;
				var product_name = value.product_name;
				var product_date = value.product_date;
				var quantity = value.quantity;
				
				//WRAP WHOLE THING IN IF STATEMENT FROM JSON 
				if (product_name == product && product_date == date){ 
					if (quantity == "0"){
						check = true;
						return false;
						//console.log("can't order. no inventory ")

					} else {
						check = false;
					}
					
				} else {
					check = false;
				}
			});

			if (check == true){
				alert("You have no inventory");
			} else {
				formData = new FormData($('form')[0]);
				$.ajax({
					url: "ToolBooker.php",
					type: "POST",
					data: formData,
					//runs only when called not at the same time of other functions
					//async: false,
					success: function (msg) {
						console.log(msg);
					},
					cache: false,
					contentType: false,
					processData: false
				});

				alert("GO AHEAD AND BOOK");
				//console.log("can order. process transaction")
				
				window.location = "finished.html";

			}
		}
	});
	}
	

/*
				if (product_name == "Roger Pen" || product_name == "Compilot"){
					if (quantity >= "1"){
						if (product_date >= "12/15/2016"){
							console.log("You can still get this item")
						}
						else if 
							{console.log("this item is not available because the date does not work")
						}	
					else if (quantity <="0"){
						console.log("this item is 0 or less")		
					}

*/



	//cardloading();
	
	/*$('#submit').click(function(){
		var formInput = $(this).parents('form').serialize();
		$.post($(this).parents('form').attr('action'),formInput );
		cardloading();
		event.preventDefault();
	});*/
	
	$("form").submit(function(e) {
		
		//alert("submitted");
		

		cardloading();
		e.preventDefault();

		
		
		
	});
});