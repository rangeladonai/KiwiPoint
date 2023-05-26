<?php
include '../public/templates/header.php';
include '../controller/sistemaControl.php';
?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<style>
    .sidebar {
  background-color: #f2f2f2;
  width: 200px;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  padding: 20px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.content {
  margin-left: 220px;
  padding: 20px;
}
</style>
<body>
  <div class="sidebar">
    <ul>
      <li><a href="#">Item 1</a></li>
      <li><a href="#">Item 2</a></li>
      <li><a href="#">Item 3</a></li>
    </ul>
  </div>
</body>
</html>


