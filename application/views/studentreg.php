<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bahria University lms system</title>
</head>

<body>
<?php echo form_open('Student_reg/registration');?>
<table width="200" border="1" align="center">
  <tr>
    <td colspan="2">Student Registration form</td>
  </tr>
  <tr>
    <td>Student name</td>
    <td><label for="1"></label>
    <input type="text" name="stdname" id="stdname" /></td>
  </tr>
  <tr>
    <td>Session </td>
    <td><input type="text" name="session" id="session" /></td>
  </tr>
  <tr>
    <td>Class</td>
    <td><input type="text" name="class" id="class" /></td>
  </tr>
  <tr>
    <td>Year</td>
    <td><input type="text" name="yesr" id="yesr" /></td>
  </tr>
  <tr>
    <td>Roll number</td>
    <td><input type="text" name="rollno" id="rollno" /></td>
  </tr>
  <tr>
    <td>Registration No</td>
    <td><input type="text" name="regisno" id="regisno" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" id="save" value="save" /></td>
  </tr>
</table>
<table align="center" width="50%" height="100px">
<tr> <td  style="color:#0CC">Course Code </td>
<td  style="color:#0CC">Course name </td><td style="color:#0CC">Course Category </td><td style="color:#0CC">Deportment </td></tr>
<?php
$query = $this->db->query('SELECT * FROM course');

foreach ($query->result_array() as $row)
{
	?><tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['course_name'] ?></td>
    <td> <?php echo $row['category'] ?></td>
    <td><?php echo $row['dept']?></td>
    </tr>
       <?php 
        
}

?>

</table>
<?php
?>

</body>
</html>