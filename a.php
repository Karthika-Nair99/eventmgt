   <script type="text/javascript">
function venue()
{
var myval = "hello";

}
    window.location.href = "a.php?w1=" + myval;

</script>

<?php
   if (isset($_GET["w1"])) {
	         $hello = $_GET["w1"];
             echo $hello;
   }
?>
