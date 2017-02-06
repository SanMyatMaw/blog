<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form action="{{ url('update', $article->id) }}" method="POST">
		{{ csrf_field()}}

		Title: <input type="text" name="title" value="{{ $article->title }}">

		Content: <input type="text" name="content" value="{{ $article->content }}">

		<button>Update</button>
	</form>
</body>
</html>
