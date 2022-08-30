<?php


function converting($str): string
{
 return  mb_strtolower(str_replace(' ','-', $str));
}
$str = $_GET['str'];
$result = converting($str);
?>
<form action="/index.php" method="get">
    <label for="test1"></label>
    <label for="test2"></label>
    <input id="test1" style="height: 40px; width: 300px;" type="text" name="str" value="<?php echo $str; ?>"><br><br>
    <input id="test2" style="height: 40px; width: 300px;" type="text" value="<?php echo $result; ?>">
    <button type="submit">Submit</button>

</form>
