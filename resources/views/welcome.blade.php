<!DOCTYPE html>
<html>
<head>
    
	<title>My Task</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f7f7f7;
			margin: 0;
			padding: 0;
		}
		
		.button {
			display: inline-block;
			padding: 12px 24px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			font-weight: bold;
			color: #fff;
			background-color: black;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		
		.button:hover {
			background-color: #0f263f;
		}
	</style>
</head>
<body>
    <div>
     <h1 style="text-align:center;">MY TASKS</h1>
	<div style="text-align: center; padding-top: 50px;">
		<button class="button"><a href="{{ url('/Form') }}" style="text-decoration: none; color: inherit;">Add Information</a></button>
		<button class="button" style="margin-left: 20px;"><a href="{{ url('/Information') }}" style="text-decoration: none; color: inherit;">View Information</a></button>
	</div>
</div>
</body>
</html>
