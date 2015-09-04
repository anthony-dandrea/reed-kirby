<!--<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <fieldset>
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="add" value="1">
        <input type="hidden" name="business" value="example@minicartjs.com">
        <input type="hidden" name="item_name" value="Unicorn">
        <input type="hidden" name="amount" value="2.00">
        <input type="hidden" name="discount_amount" value="1.00">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="http://www.minicartjs.com/?success">
        <input type="hidden" name="cancel_return" value="http://www.minicartjs.com/?cancel">
        <strong>Unicorn</strong>
        <ul>
            <li>Price $2.00</li>
            <li>Discounted $1.00</li>
        </ul>
        <input type="submit" name="submit" value="Add to cart" class="button">
    </fieldset>
</form> -->

<p>wnieqfejlsm</p>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">
    <input type="hidden" name="business" value="example@minicartjs.com">
    <input type="hidden" name="item_name" value="Pizza Pie"> <!-- name -->
    <input type="hidden" name="amount" value="30.00"> <!-- price -->
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="http://www.reedwheels.com/?success">
    <input type="hidden" name="cancel_return" value="http://www.reedwheels.com/?cancel">
    <!-- IMAGE -->
    <strong>Pizza Pie <!-- name --></strong>
    <p>30.00</p> <!-- price -->
    <p>Wheels<br>Size: 54mm<br>Durometer: 101a<br>Free Shipping<br>Made in the U.S.</p>
    <!-- ^ kirbytext -->

    <input type="submit" name="submit" value="Add to cart" class="button">
</form>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">
    <input type="hidden" name="business" value="example@minicartjs.com">
    <input type="hidden" name="item_name" value="Reed T-Shirt Logo"> <!-- name -->
    <input type="hidden" name="amount" value="20.00"> <!-- price -->
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="http://www.reedwheels.com/?success">
    <input type="hidden" name="cancel_return" value="http://www.reedwheels.com/?cancel">
    <!-- IMAGE -->
    <strong>Reed T-Shirt Logo <!-- name --></strong>
    <p>20.00</p> <!-- price -->
    <p>Black/Grey<br>90% Cotton<br>10% Polyester<br>Free Shipping</p>
    <!-- ^ kirbytext -->
    <ul>
    <!-- This shit will get tricky with kirby blueprint inputs  -->
        <li>
            <label>
                <select name="os0">
                    <option value="Black">Black</option> <!-- select1option1name -->
                    <option value="Grey">Grey</option> <!-- select1option2name -->
                </select>
            </label>
            <input type="hidden" name="on0" value="Type">
            <input type="hidden" name="option_select0" value="Black"> <!-- select1option1name -->
            <input type="hidden" name="option_amount0" value="0.00">
            <input type="hidden" name="option_select1" value="Grey"> <!-- select1option2name -->
            <input type="hidden" name="option_amount1" value="0.00">
        </li>
    </ul>
    <input type="submit" name="submit" value="Add to cart" class="button">
</form>

<!--
    <ul>
        <li>
            <label>
                <select name="os0">
                    <option value="Stripes">Stripes $3.00</option>
                    <option value="Spots">Spots $4.00</option>
                    <option value="Psychedelic">Psychedelic $5.00</option>
                </select>
            </label>
            <input type="hidden" name="on0" value="Type">
            <input type="hidden" name="option_select0" value="Stripes">
            <input type="hidden" name="option_amount0" value="3.00">
            <input type="hidden" name="option_select1" value="Spots">
            <input type="hidden" name="option_amount1" value="4.00">
            <input type="hidden" name="option_select2" value="Psychedelic">
            <input type="hidden" name="option_amount2" value="5.00">
        </li>
    </ul>
