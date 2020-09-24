<html>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
  $("button").click(function(){
    alert('Data is insert to DB');
  });
});

</script>
</head>


<body>
<link href="/css/main.css" rel="stylesheet">
<form name="myForm" action="submit" method="POST">
@csrf
<div class="relative">
<h1>Registration form</h1>
First name <i class="glyphicon glyphicon-user"></i> <input type="text" name="fname" placeholder="enter First name" onsubmit="validateForm()"/><span class="error">*</span>
<br><br>
Last name <input type="text" name="lname" placeholder="enter Last name"/><span class="error">*</span>
<br><br>
Email id <input type="text" name="email" placeholder="enter EmailId"/><span class="error">*</span>
<br><br>
Mobile No <input type="number" name="mobileno" placeholder="enter Mobile no"/><span class="error">*</span>
<br><br>
Address <textarea name="address" rows="5" cols="40"></textarea>
<br><br>
<button>Submit </button>

</div>
</form>
</body>
</html>