<!-- Maybe will work with this loop, nah -->
<?php $opts = ['os0', 'os1', 'os2'] ?>
<?php foreach($opts as $opt): ?>
    <p><?php echo $opt ?></p>
<?php endforeach ?>

<ul>
<!-- This shit will get tricky with kirby blueprint inputs  -->
<!-- This is bad, need to refactor -->
    <li>
        <label>select1option2name
            <select name="os0"> <!-- will probably have to customize this name somehow-->
                <?php if(!$product->select1option1name()->related()->empty()): ?>
                    <option value="<?php echo html($product->select1option1name()) ?>"><?php echo html($product->select1option1name()) ?></option> <!-- select1option1name -->
                <?php endif ?>
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

