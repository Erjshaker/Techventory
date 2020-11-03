<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Item Code</span>
        <span class="field-value"><?= ucfirst($items[0]['item_code']) ?></span>
      </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Item Category</span>
            <span class="field-value"><?= ucfirst($items[0]['item_category_code']) ?></span>
          </div>
        </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Brand Name</span>
                <span class="field-value"><?= ucfirst($items[0]['brand_name']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Property Number</span>
                <span class="field-value"><?= ucfirst($items[0]['property_no']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Description</span>
                <span class="field-value"><?= ucfirst($items[0]['description']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Location</span>
                <span class="field-value"><?= ucfirst($items[0]['location']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Quantity</span>
                <span class="field-value"><?= ucfirst($items[0]['quantity']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Unit Stocks</span>
                <span class="field-value"><?= ucfirst($items[0]['unit_on_stocks']) ?></span>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-md-3 offset-8">
                <?php
                user_edit_link('items','edit-item', $permissions, $items[0]['id']);
                ?>
              </div>
            </div>
          </div>
        </div>
        <br>
