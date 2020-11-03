<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Item Code</span>
        <span class="field-value"><?= ucfirst($inventories[0]['item_code_id']) ?></span>
      </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Item Category</span>
            <span class="field-value"><?= ucfirst($inventories[0]['item_category']) ?></span>
          </div>
        </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Location</span>
                <span class="field-value"><?= ucfirst($inventories[0]['location_id']) ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <span class="field">Quantity</span>
                <span class="field-value"><?= ucfirst($inventories[0]['quantity_id']) ?></span>
              </div>
            </div>

            <br>
            <div class="row">
              <div class="col-md-3 offset-8">
                <?php
                user_edit_link('inventories','edit-inventory', $permissions, $inventories[0]['id']);
                ?>
              </div>
            </div>
          </div>
        </div>
        <br>
