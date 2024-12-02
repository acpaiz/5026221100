<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Keyboard</h3>

	<a href="/keyboard"> Kembali</a>

	<br/>
	<br/>

	@foreach($keyboard as $p)
	<form action="/keyboard/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodekeyboard" value="{{ $p->kodekeyboard }}"> <br/>
		Merk <input type="text" required="required" name="merk" value="{{ $p->merkkeyboard }}"> <br/>
		Stock <input type="number" required="required" name="stock" value="{{ $p->stockkeyboard }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
