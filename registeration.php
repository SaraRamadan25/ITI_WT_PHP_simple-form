
<form method="post" action ="done.php">
First Name  <input type="text" name="fname" > 
    <br>
    Last Name  <input type="text" name="lname" > 
    <br>
    address <input type="text" name="address" > 
    <br>
    department <input type="text" name="department" > 
    <br>

    country <select name="country">
  <option value="egypt">egypt</option>
  <option value="alex">alex</option>
  <option value="cairo">cairo</option>
  <option value="mansoura">mansoura</option>
</select>
<br>
    gender <br>
    <input type="radio" name="gender" value="male">
<label for="male">male</label>

<input type="radio" name="gender" value="female">
<label for="female">female</label><br>
<br>
Skills <br>
<input type="checkbox" name="checkbox[]" value="html">
<label for="html"> html</label>

<input type="checkbox" name="checkbox[]" value="css">
<label for="css"> css</label>

<br>
<input type="checkbox" name="checkbox[]" value="css">
<label for="PHP"> PHP</label>

<input type="checkbox" name="checkbox[]" value="MySQL">
<label for="MySQL"> MySQL</label><br>

User Name  <input type="text" name="username" > 
<br>
Password <input type="password" name="password">
<br>

    <input type="submit" name="submit">

</form>
