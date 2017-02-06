<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<form action="{{ url('show')}}" method="POST">
		{{ csrf_field()}}

		Title: <input type="text" name="title">

		Content: <input type="text" name="content">

		<button>Create</button>
	</form>
</body>
</html>
