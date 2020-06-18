
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://localhost:8000/static/assets/css/styles.css">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="col-8">
			<div class="shadow p-3 mb-5 bg-white rounded">
				<div class="card">
					<div class="card-body">
						<b>task</b>
					</div>
				</div>
			</div>

			<div class="shadow p-3 mb-5 bg-white rounded">
				<div class="card">
					<div class="card-body">
						<b>task</b>
						<div id="editor" class="ace_editor"></div>
					</div>
					
				</div>
				<div class="card-footer">
					<textarea id="stdin" style="display: none" rows="6" cols="40"></textarea>
					<div class="justify-content-end">
						<button class="btn btn-primary" id="run" >Run</button>
						<button class="btn btn-secondary" id="submit" >Submit</button>
					</div>

					<div class="form-check form-check-inline mt-2">
					  <input class="form-check-input" type="checkbox" id="text-input" value="option1">
					  <label class="form-check-label" for="inlineCheckbox1">Text input from outside</label>
					</div>

				</div>
			</div>


			<div class="text-danger" style="font-weight: bold" id="notification"></div>

				<div id="error" style="display: none">

					<div class="shadow p-3 mb-5 bg-white rounded">
					
							<div class="card-body">
								<b class="text-danger">Compilation error :(</b>
							</div>
					</div>

					<div class="shadow p-3 mb-5 bg-white rounded">
					
							<div class="card-body">
								<b id="error-reporting">task</b>
							</div>
					</div>
				</div> <!-- error finished -->

				<div id="success" style="display: none">

					<div class="shadow p-3 mb-5 bg-white rounded">
					
							<div class="card-body">
								<b class="text-success">Compilation Successful :)</b>
							</div>
					</div>

					<div class="shadow p-3 mb-5 bg-white rounded">
					
							<div class="card-body">
								<b id="success-reporting">task</b>
							</div>
					</div>
				</div> <!-- success print finished-->
				

		</div> <!-- col-8 finished -->
	</div> <!-- row finished-->
</div> <!-- container finished -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


        <script src="http://localhost:8000/static/ace-editor/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
        var editor = ace.edit("editor");
        editor.session.setMode("ace/mode/python");
        editor.resize(true);

        </script>
    <script>
         $(document).ready(function(){

         	   function hideAllReporting(){
         	   		$("#error").hide();
         	   		$("#success").hide();
         	   		//$("#notification").hide();
         	   }
       			//$( "#text-input" ).prop( "checked", true );
      	
	      		/*
	      		*  text area  toggling effect
	      		*/
	      		$('#text-input').click(function(){
	      				//var is_input=$('#checkbox').is(':checked');
	      				//console.log(is_input);
				 	 $("#stdin").toggle(500,"linear");
				 });

	      		

	      		// run and submit button functionality
	      		$("#run").click(function(){
	      			// get student code from editor
	      			let code = editor.getValue();
	      			let input =$("#stdin").val();
	     	      	
	     	      	$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	      			
	      			//post to compiler run section
	      			$("#notification").text("Processing ...");
	      			
	      			// post code and input for compilation
	      			$.post("http://localhost/compiler/baby-compiler/compilee.php",
			      			{
				      				code:code,
				      				input:input
			      			})
			      			.done(function(data){
				      				//converting response-data to json
				      				let result=JSON.parse(data);

				      				if(result.error==1){
				      					//error reporting
				      					hideAllReporting();
				      					$("#error").show();
				      					$("#error-reporting").html(result.code);

				      				}
				      				else if(result.error==0){
				      					// code reporting
				      					hideAllReporting();
				      					$("#success").show();
				      					$("#success-reporting").html(result.code);

				      				}
				      				console.log(result.code);
				      				$("#notification").text("Completed");

				      				//hide notification message after 3 sec
				      				setTimeout(function(){ 
				      					$("#notification").hide();
				      				 }, 2000);
			      			});
	      				});



	      		$("#submit").click(function(){
	      			/*
	      			 $.post( "https://reqres.in/api/users", 
	      				{
	      					  
	      				})
						.done(function( data ) {
    						
  						})
  						.fail(function() {
    						
  						});
  						*/
	      		});
	      		// run and submit button finished

	      	

			});
    </script>

  </body>
</html>