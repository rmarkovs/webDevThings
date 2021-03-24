<!--Assignment 2 - COSC 2328 - Professor McCurry -->
<!--Implemented by - Rebecca Markovsky -->
<!DOCTYPE html>
<!--form 1 -->
<h2> Form 1 </h2>
<form>
  <label for="firstNumber">First Number (between 0 and 100):</label>
  <input type="number" id="first" name="firstNumber" min="0.00" max="100.00">
  <br>
  <label for="secondNumber"> Second Number (between 0 and 100):</label>
  <input type="number" id= "second" name = "secondNumber" min = "0.00" max = "100.00">
  <br>
  <label for="thirdNumber">Third Number (between 0 and 100):</label>
  <input type = "number" id = "third" name = "thirdNumber" min = "0.00" max = "100.00">
  <br>
  <input type = "submit">
  <?php
  function findMin($num1, $num2, $num3)
  {
    $min = $num1;
    if($num2<$min)
    {
      $min = $num2;
    }
    if($num3<$min)
    {
      $min = $num3;
    }
    echo "<span> The min is " $min;

  }
  findMin($_GET["firstNumber"], $_GET["secondNumber"], $_GET["thirdNumber"]);
  function findMax($num1, $num2, $num3)
  {
    $max = $num1;
    if($num2>$max)
    {
      $max = $num2;
    }
    if($num3>$max)
    {
      $max = $num3;
    }
    echo "<span> The maximum is " $max;
  }
  findMax($_GET["firstNumber"], $_GET["secondNumber"], $_GET["thirdNumber"]);
  function computeAverage($num1, $num2, $num3)
  {
    $avg = ($num1 + $num2 + $num3)/3.0;
    echo "<span> The average is " $avg;
  }
  computeAverage($_GET["firstNumber"], $_GET["secondNumber"], $_GET["thirdNumber"]);
  ?>
</form>
<h2> Second Form </h2>
<form>
  Name: <br>
  <input type = "text" name= "name">
  <br>
  Email: <br>
  <input type = "text" name = "email">
  <br>
  Address: <br>
  <input type = "text" name = "address">
  <br>
  Phone Number: <br>
  <input type = "text" name = "number">
  <br>
  Classification: <br>
    <select name = "classifications">
      <option value = "freshman">Freshman</option>
      <option value = "sophomore">Sophomore</option>
      <option value = "junior"> Junior</option>
      <option value = "senior">Senior</option>
    </select>
    <br><br>
  Courses:<br>
    <select name = "courses[]" size = "8" multiple>
      <option value = "Immunology">Immunology</option>
      <option value = "Mobile Programming">Mobile Programming</option>
      <option value = "Bioethics">Bioethics</option>
      <option value = "Philosophy of Religion">Philosophy of Religion</option>
      <option value = "Web Programming">Web Programming</option>
      <option value = "Discrete math">Discrete Math</option>
      <option value = "Research">Research</option>
      <option value = "Human Genetics">Human Genetics</option>
    </select>
    <br><br>
    <input type = "submit">
    <?php
      Your name is: echo $_POST["name"];
      Your address is: echo $_POST["address"];
      Your email is: echo $_POST["email"];
      Your phone number is: echo $_POST["number"];
      Your classification is: echo $_POST["classifications"];
      Your courses are:
      for($i = 0; $i<count($_GET["courses[]"]); $i++)
      {
        echo $_GET["courses[i]"];
      }
    ?>
</form>
<h2> Form 3 </h2>
<form>
  Username: <br>
  <input type = "text" name = "username">
  <br>
  Password: <br>
  <input type = "password" name = "pass">
  <br>
  First color: <input type = "color" name = "color1" value = "#ff0000">
  <br>
  Second color: <input type = "color" name = "color2" value = "#ff0000">
  <br>
  <input type = "submit" value = "submit">
  <?php
    background-color : $_GET["color1"];
    text-color: $_GET["color2"];
  ?>
</form>
</html>
