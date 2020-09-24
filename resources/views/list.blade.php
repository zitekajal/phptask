<html>
<body>
<link href="/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h1>List of data</h1>

<table class="table">
<thead>
<tr>
<th scope="col">Fname</th>
<th scope="col">Lname</th>
<th scope="col">Email</th>
<th scope="col">Mobile No</th>
<th scope="col">Address</th>
</tr>
</thead>
<tbody>
@foreach($data as $item)
<tr>
<td>{{$item->Fname}}</td>
<td>{{$item->Lname}}</td>
<td>{{$item->Email}}</td>
<td>{{$item->Mobileno}}</td>
<td>{{$item->Address}}</td>
<td>
<a href="edit/{{$item->id}}"><i class="fa fa-edit">EDIT</i></a>
</td>
</tr>
@endforeach
</tbody>
</table>
<body>
<html>