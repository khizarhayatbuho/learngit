<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php echo form_open('Testing/testing_insert');?>
<table width="200" border="1">
  <tr>
    <td colspan="2" align="center">testing </td>
  </tr>
  <tr>
    <td>course name</td>
    <td><input type="text" name="coursename" id="coursename" /></td>
  </tr>
  <tr>
    <td>category</td>
    <td><input type="text" name="category" id="category" /></td>
  </tr>
  <tr>
    <td>Deportment</td>
    <td><input type="text" name="deptment" id="deptment" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="save" /></td>
  </tr>
</table>
</body>
</html>