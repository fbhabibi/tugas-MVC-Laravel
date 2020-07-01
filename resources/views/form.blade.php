<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
<h1>Buat Account Baru</h1>

<h3>Sign Up Here</h3>

<form action="/biodata" method="post">
@csrf 
	<label>First Name:</label><p>
		<input type="text" name="first">
		<p>
	<label>Last Name:</label><p>
		<input type="text" name="last">
		<p>
	<label>Gender:</label>
	<p>
	<input type="radio" id="male" name="gender" value="male">Male<p>
	<input type="radio" id="female" name="gender" value="female">Female<p>
	<input type="radio" id="other" name="gender" value="other">Other<p>

	<label>Nationality:</label><p>
		<select name="national">
			<option value="indonesia">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysia">Malaysian</option>
            <option value="Australian">Australian</option>
		</select>
	<p>
	<label>Language Spoken:</label><p>
        <input type="checkbox" id="speak" name="speak" value="bahasa indonesia">Bahasa Indonesia<p></p>
        <input type="checkbox" id="speak" name="speak" value="english">English<p>
		<input type="checkbox" id="speak" name="speak" value="other">Other<p>

	<label>Bio</label><p>
		<textarea name="Bio"></textarea><p>
	<button type="submit">Sign Up</button>
</form>
</body>
</html>