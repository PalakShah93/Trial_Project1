<!-- palpal link=-->
<form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="palakjerry93@gmail.com">
<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="add" value="1">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="Birthday - Cake and Candle">
<input type="hidden" name="amount" value="3.95">
<input type="hidden" name="currency_code" value="USD">
<!-- Provide a dropdown menu option field, without prices. -->
<input type="hidden" name="on0" value="Color">Color scheme <br />
<select name="os0">
<option value="Select a color scheme">-- Select a color scheme -- <option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select> 
<br />
<!-- Display the payment button. -->
<input type="image" name="submit" border="0" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" >
</form>