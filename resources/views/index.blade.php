<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

@foreach ($articles as $article)
	<h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <a href="{{ url('show', $article->id)}}">Show</a>
    <a href="{{ url('edit', $article->id)}}">Edit</a>
    <a href="{{ url('destroy', $article->id)}}">Destroy</a>
@endforeach

</body>
</html>
