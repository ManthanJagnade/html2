<!DOCTYPE html>
<html>
<body>

<h2>Password field</h2>

<p>The <strong>input type="password"</strong> defines a password field:</p>

<form action="{{route('store')}}"method="POST">
    @csrf
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
  <input type="submit" value="Submit">
</form>

<p>The characters in a password field are masked (shown as asterisks or circles).</p>

</body>
</html>

