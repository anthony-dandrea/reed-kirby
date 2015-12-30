<?php $products = page('shop')->children()->visible() ?>

<?php foreach($products as $product): ?>
<div class="product">
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="add" value="1">
    <input type="hidden" name="business" value="awhiting227@gmail.com">
    <input type="hidden" name="item_name" value="<?php echo html($product->title()) ?>">
    <input type="hidden" name="amount" value="<?php echo html($product->price()) ?>">
    <input type="hidden" name="quantity" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="http://www.reedwheels.com/?success">
    <input type="hidden" name="cancel_return" value="http://www.reedwheels.com/?cancel">

    <div class="row">
      <div class="small-12 medium-8 columns">
        <?php echo $product->pic()->kirbytext() ?>
      </div>
      <div class="small-12 medium-4 columns"> <!-- start desc col -->
        <h2><?php echo html($product->title()) ?></h2>
        <p>$ <?php echo html($product->price()) ?></p>
        <div>
          <?php echo $product->description()->kirbytext() ?>
        </div>

        <!-- Option 1 -->
        <?php if(!$product->select1()->empty()): ?>
          <p><?php echo html($product->select1()) ?></p>
          <select name="os0">
            <?php if(!$product->select1option1name()->empty()): ?>
              <option value="<?php echo html($product->select1option1name()) ?>">
                <?php echo html($product->select1option1name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select1option2name()->empty()): ?>
              <option value="<?php echo html($product->select1option2name()) ?>">
                <?php echo html($product->select1option2name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select1option3name()->empty()): ?>
              <option value="<?php echo html($product->select1option3name()) ?>">
                <?php echo html($product->select1option3name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select1option4name()->empty()): ?>
              <option value="<?php echo html($product->select1option4name()) ?>">
                <?php echo html($product->select1option4name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select1option5name()->empty()): ?>
              <option value="<?php echo html($product->select1option5name()) ?>">
                <?php echo html($product->select1option5name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select1option6name()->empty()): ?>
              <option value="<?php echo html($product->select1option6name()) ?>">
                <?php echo html($product->select1option6name()) ?>
              </option>
            <?php endif ?>
          </select>
          <input type="hidden" name="on0" value="<?php echo html($product->select1()) ?>">
          <input type="hidden" name="option_select0" value="<?php echo html($product->select1option1name()) ?>">
          <input type="hidden" name="option_select1" value="<?php echo html($product->select1option2name()) ?>">
          <input type="hidden" name="option_select2" value="<?php echo html($product->select1option3name()) ?>">
          <input type="hidden" name="option_select3" value="<?php echo html($product->select1option4name()) ?>">
          <input type="hidden" name="option_select4" value="<?php echo html($product->select1option5name()) ?>">
          <input type="hidden" name="option_select5" value="<?php echo html($product->select1option6name()) ?>">
        <?php endif ?>
        <!-- End Option 1 -->

        <!-- Option 2 -->
        <?php if(!$product->select2()->empty()): ?>
          <p><?php echo html($product->select2()) ?></p>
          <select name="os1">
            <?php if(!$product->select2option1name()->empty()): ?>
              <option value="<?php echo html($product->select2option1name()) ?>">
                <?php echo html($product->select2option1name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select2option2name()->empty()): ?>
              <option value="<?php echo html($product->select2option2name()) ?>">
                <?php echo html($product->select2option2name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select2option3name()->empty()): ?>
              <option value="<?php echo html($product->select2option3name()) ?>">
                <?php echo html($product->select2option3name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select2option4name()->empty()): ?>
              <option value="<?php echo html($product->select2option4name()) ?>">
                <?php echo html($product->select2option4name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select2option5name()->empty()): ?>
              <option value="<?php echo html($product->select2option5name()) ?>">
                <?php echo html($product->select2option5name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select2option6name()->empty()): ?>
              <option value="<?php echo html($product->select2option6name()) ?>">
                <?php echo html($product->select2option6name()) ?>
              </option>
            <?php endif ?>
          </select>
          <input type="hidden" name="on1" value="<?php echo html($product->select2()) ?>">
          <input type="hidden" name="option_select6" value="<?php echo html($product->select2option1name()) ?>">
          <input type="hidden" name="option_select7" value="<?php echo html($product->select2option2name()) ?>">
          <input type="hidden" name="option_select8" value="<?php echo html($product->select2option3name()) ?>">
          <input type="hidden" name="option_select9" value="<?php echo html($product->select2option4name()) ?>">
          <input type="hidden" name="option_select10" value="<?php echo html($product->select2option5name()) ?>">
          <input type="hidden" name="option_select11" value="<?php echo html($product->select2option6name()) ?>">
        <?php endif ?>
        <!-- End Option 2 -->

        <!-- Option 3 -->
        <?php if(!$product->select3()->empty()): ?>
          <p><?php echo html($product->select3()) ?></p>
          <select name="os2">
            <?php if(!$product->select3option1name()->empty()): ?>
              <option value="<?php echo html($product->select3option1name()) ?>">
                <?php echo html($product->select3option1name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select3option2name()->empty()): ?>
              <option value="<?php echo html($product->select3option2name()) ?>">
                <?php echo html($product->select3option2name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select3option3name()->empty()): ?>
              <option value="<?php echo html($product->select3option3name()) ?>">
                <?php echo html($product->select3option3name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select3option4name()->empty()): ?>
              <option value="<?php echo html($product->select3option4name()) ?>">
                <?php echo html($product->select3option4name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select3option5name()->empty()): ?>
              <option value="<?php echo html($product->select3option5name()) ?>">
                <?php echo html($product->select3option5name()) ?>
              </option>
            <?php endif ?>
            <?php if(!$product->select3option6name()->empty()): ?>
              <option value="<?php echo html($product->select3option6name()) ?>">
                <?php echo html($product->select3option6name()) ?>
              </option>
            <?php endif ?>
          </select>
          <input type="hidden" name="on2" value="<?php echo html($product->select3()) ?>">
          <input type="hidden" name="option_select12" value="<?php echo html($product->select3option1name()) ?>">
          <input type="hidden" name="option_select13" value="<?php echo html($product->select3option2name()) ?>">
          <input type="hidden" name="option_select14" value="<?php echo html($product->select3option3name()) ?>">
          <input type="hidden" name="option_select15" value="<?php echo html($product->select3option4name()) ?>">
          <input type="hidden" name="option_select16" value="<?php echo html($product->select3option5name()) ?>">
          <input type="hidden" name="option_select17" value="<?php echo html($product->select3option6name()) ?>">
        <?php endif ?>
        <!-- End Option 3 -->

        <?php if($product->instock()->bool()): ?>
          <input type="submit" name="submit" value="Add to Cart" class="button">
        <?php else: ?>
          <input type="submit" name="submit" value="Out of Stock" disabled="disabled" class="button">
        <?php endif ?>
      </div> <!-- end desc col -->
    </div> <!-- end row -->
  </form>
</div>
<?php endforeach ?>
