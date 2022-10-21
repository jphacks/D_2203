here

<form action="">
    <input type="hidden" name="hel" value="<script>alert(1)</script>">
    <input type="submit">
</form>

<?php 
echo "hello";
if(isset($_GET['hel'])){
    echo $_GET['hel'];
}

?>
<form action="">
    <input type="text" name="clear">
<input type="submit">
</form>
