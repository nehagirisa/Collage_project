<html>
<title>Add fees</title>
</head>
<body>
<h1><a href="add.php">Add receipt</a> &nbsp &nbsp &nbsp  <a href="search.php">Record</a></h1>
<form method="POST"
oninput="x.value=parseInt(a.value)+parseInt(b.value)+parseInt(c.value)" action="fees.php">
  <input type="date" name="date"><br/><br/>
  Name
  <input type="text" name="name"><br/><br/>
  Registration No.
  <input type="number" name="rno"><br/><br/>
  Course
  <select name="course">
  <option>Select Course</option>
  <option value="PHP">PHP</option>
  <option value="JAVA">JAVA</option>
  <option value="ACCOUNTS">ACCOUNTS</option>
  <option value="BASIC">BASIC</option>
  <option value="GRAPHIC DESIGNING">GRAPHIC DESIGNING</option>
  </select><br/><br/>
  Cash/Cheque/Draft
  <select name="type">
  <option value="Cash">Cash</option>
  <option value="Cheque">Cheque</option>
  <option value="Draft">Draft</option>
  </select><br/><br/>
  Cheque/Draft No.
  <input type="number" name="cno"><br/><br/>
  Cheque/Draft Date
  <input type="date" name="cdate"><br/><br/>
  Programme Fees
  <input type="number" placeholder="0" id="a" name="a"><br/><br/>
  Late Fees
  <input type="number" placeholder="0" id="b" name="b"><br/><br/>
  Other Fees
  <input type="number" placeholder="0" id="c" name="c"><br/><br/>
  Balance
  <input type="number" placeholder="0" id="c" name="bal"><br/><br/>
  Total
  <input name="x" for="a b c" />
  <br><br>
  <input type="submit" name="submit">
</form>


</body>
</html>