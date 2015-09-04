<?php $products = page('product')->children()->visible() ?>

<?php foreach($products as $product): ?>

<div class="product">
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="add" value="1">
        <input type="hidden" name="business" value="example@minicartjs.com">
        <input type="hidden" name="item_name" value="<?php echo html($product->title()) ?>">
        <input type="hidden" name="amount" value="<?php echo html($product->price()) ?>">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="currency_code" value="USD">
        <input type="hidden" name="return" value="http://www.reedwheels.com/?success">
        <input type="hidden" name="cancel_return" value="http://www.reedwheels.com/?cancel">
        <!-- IMAGE -->
        <strong><?php echo html($product->title()) ?> <!-- name --></strong>
        <p><?php echo html($product->price()) ?></p> <!-- price -->
        <div>
            <?php echo $product->description()->kirbytext() ?>
        </div>
        <!-- ^ kirbytext -->

        <?php if($product->select1option1name() != '' ?>
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
        <?php endif ?>



        <input type="submit" name="submit" value="Add to cart" class="button">
    </form>
</div>

<?php endforeach ?>


