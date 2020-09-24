<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
  $("button").click(function(){
    alert('Data is Update to DB');
  });
});

</script>
</head>


<body>
<link href="/css/main.css" rel="stylesheet">
<form  action="/edit" method="POST">
@csrf
<div class="relative">
<h1>UPDATE form</h1>
<input type="hidden" name="id" value="{{$data->id}}"/>
First name <i class="glyphicon glyphicon-user"></i> <input type="text" name="fname" value="{{$data->Fname}}" onsubmit="validateForm()"/>
<br><br>
Last name <input type="text" name="lname" value="{{$data->Lname}}"/>
<br><br>
Email id <input type="text" name="email" value="{{$data->Email}}"/>
<br><br>
Mobile No <input type="number" name="mobileno" value="{{$data->Mobileno}}"/>
<br><br>
Address <input type="text" name="address" value="{{$data->Address}}"/>
<br><br>
<button>UPDATE </button>

</div>
</form>
</body>
</html>