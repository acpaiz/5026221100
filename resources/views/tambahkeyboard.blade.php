<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Keyboard</h3>

	<a href="/keyboard"> Kembali</a>

	<br/>
	<br/>

	<form action="/keyboard/store" method="post">
		{{ csrf_field() }}
		Merk <input type="text" name="merk" required="required"> <br/>
		Stock <input type="number" name="stock" required="required"> <br/>
        Status
        <input type="hidden" name="status" value="0">
        <input type="checkbox" name="status" value="1">
        <input type="submit" value="Simpan Data">
        </form>

</body>
</html>
