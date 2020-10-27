<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	.checked{
		color: orange;
	}
</style>
<body align="center">
	<h3><u>Star Rating</u></h3>
	<h5>Default it will be 1 star and then after mouse hover or click it will show the rating value in the textarea</h5>
<div>
	<span onmouseover="starmouse(this.id)" id="1"  style="font-size:40px;cursor:pointer;"  class="fa fa-star checked"></span>
	<span onmouseover="starmouse(this.id)" id="2"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
	<span onmouseover="starmouse(this.id)" id="3"  style="font-size:40px;cursor:pointer;" class="fa fa-star "></span>
	<span onmouseover="starmouse(this.id)" id="4"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
	<span onmouseover="starmouse(this.id)" id="5"  style="font-size:40px;cursor:pointer;" class="fa fa-star"></span>
</div>
<input type="hidden" name="star_result" id="star_result">
<textarea rows="3" cols="40" name="message" id="message" maxlength="100"></textarea><br>
upto 100 characters
</body>
<script>
	function starmouse(str){
		for(i=1; i<=str;i++){
			document.getElementById(i).style.color = "orange";
		}
		for(i=5; i>str;i--){
			document.getElementById(i).style.color = "black";
		}
		document.getElementById("star_result").style.value = str;
		document.getElementById("message").innerHTML = str;
		//alert(str);
	}
	
</script>