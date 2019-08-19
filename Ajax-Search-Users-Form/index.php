<!DOCTYPE html>
<html>
<head>
	<title>Search Users with Suggestions by Chris Darnell</title>
	<link rel="stylesheet" href="http://bootswatch.com/cerulean/bootstrap.min.css">
	<!-- Javascript -->
	<script>
		function showSuggestion(str){
			// Check for input
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else {
				// AJAX 
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					// Check response is ready to be put into output
					if(this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				// Get suggestions from suggest.php using AJAX methods
 				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<!-- Text input, with suggestions as typed using onkeyup -->
	<div class="container">
	    <h1>Search Users</h1>
	    <form> 
	    	Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
	    </form>
	    <p>Suggestions: <span id="output" style="font-weight:bold"></span></p>
</div>
</body>
</html>