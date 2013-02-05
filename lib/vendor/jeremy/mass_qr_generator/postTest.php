<?php
if(isset($_POST['formWheelchair']) &&
   $_POST['formWheelchair'] == 'Yes')
{
    echo "Need wheelchair access.";
}
else
{
    echo $_POST["formWheelchair"];
}
?>
