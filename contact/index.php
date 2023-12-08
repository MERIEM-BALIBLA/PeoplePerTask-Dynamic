<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Contact US .</h3>

<div>
  <form action="test.php" method="POST">
    <label for="fname">name</label>
    <input type="mail" id="fname" name="name">

    <label for="fname1">mail</label>
    <input type="text" id="fname1" name="mail">
    
    <label for="fname2">body</label>
    <input type="text" id="fname2" name="message">
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


