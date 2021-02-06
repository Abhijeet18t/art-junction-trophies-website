<html>
<h3 align='center'>QUOTATION</h3>
<h5 align='left'>ENTER PRODUCT</h5>
<form method='POST' action='bill2.php'>
<input type='text' name='des' placeholder='product name '>
<input type='number' name='quan' placeholder='quantity'>
<input type='number' name='price' placeholder='price'>
<button type='submit' name='add'>ADD</button><br>
<input type='number' name='gst' placeholder='GST'>
<button type='submit' formaction='invoice.php' name='print'>PRINT</button><br>
<button type='submit' formaction='del.php' name='print'>EXIT</button>
</form>
</html>
 