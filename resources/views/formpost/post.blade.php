<form action="/public/form" method="POST">
	{{ csrf_field() }}
	<input type="number" name="num">
	<input type="number" name="num2">
	<input type="submit">
</form>
{{$text}}

