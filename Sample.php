<!DOCTYPE html>
<html>
<head>

<title>Payment List</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 60%;
  table-layout: fixed;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
  word-wrap: break-word;
}

table tr button { 
  opacity:0;
  float: left;
}

table tr:hover button {
  opacity:1 
}

button{
  background-color: #ffff33;
  color: black;
  border-radius: 8px;
  font-size: 12px;
  border: 1px solid black;
  padding: 10px 24px;
  cursor: pointer;
}
.subbtn{
  background-color: green;
}

</style>
</head>
<body>
<center>

<h2>Manage Accounts</h2>


<table>
  <tr>
    <th colspan="3" style="border:none;">Goal:<textarea>input text</textarea><br>Enter Date:<textarea>input text</textarea><br><button class="subbtn">Submit</button></th>
  </tr>
  <tr>
    <th style="width:50px">Day</th>
    <th style="width:200px">Goal</th>
    <th style="width:50px; border: none;"></th>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td style="border: none;"><button>Edit Goal</button></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td style="border: none;"><button>Edit Goal</button></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td style="border: none;"><button>Edit Goal</button></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td style="border: none;"><button>Edit Goal</button></td>
  </tr>

  <tr>
    <td></td>
    <td></td>
    <td style="border: none;"><button>Edit Goal</button></td>
  </tr>
</table>

</center>
</body>
</html>

