<!-- FUCK this wont work =-/ maybe subpage options or just fuck it. probably just fuck it. -->
<ul>
<!-- This shit will get tricky with kirby blueprint inputs  -->
    <li>
        <label>
            <select name="os0"> <!-- will probably have to customize this name somehow-->
                <option value="Black"><?php echo html($product->price()) ?></option> <!-- select1option1name -->
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
