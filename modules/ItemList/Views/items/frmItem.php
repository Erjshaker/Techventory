<div class="row">
  <div class="col-md-10">
     <!-- search here -->
  </div>
  <div class="col-md-2">
    <!--  <a href="<?= base_url() ?>node/add" class="btn btn-sm btn-primary btn-block float-right">Add Node</a> -->
  </div>
</div>
<br>
<div class="row">
 <div class="col-md-12">
   <form action="<?= base_url() ?>items/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="item_code">Item Code (Auto-Generate)</label>
           <div class="row-2">
           <button style="background-color: #C0C0C0; " type="submit"><i style="color: #ffffff; " class="fas fa-random"></i>
           <input readonly style="text-align: center;  font-weight: bold;" name="item_code" type="text" value="<?= isset($rec['item_code']) ? $rec['item_code'] : substr(str_shuffle(md5('item_code')), 0 , 10) ?>" class="form-control <?= $errors['item_code'] ? 'is-invalid':'is-valid' ?>" id="item_code" placeholder="Item Code">
             <?php if($errors['item_code']): ?>
               <div class="invalid-feedback">
                 <?= $errors['item_code'] ?>
               </div>
             <?php endif; ?>
             </button>
              </div>
         </div>
       </div>
     </div>

      <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="item_category_code">Item Category</label>
             <!-- <input name="item_category_code" type="text" value="<?= isset($rec['item_category_code']) ? $rec['item_category_code'] : set_value('item_category_code') ?>" class="form-control <?= $errors['item_category_code'] ? 'is-invalid':'is-valid' ?>" id="item_category_code" placeholder="Item Category Code"> -->
             <select class="form-control" name="item_category_code" value="<?= isset($rec['item_category_code']) ? $rec['item_category_code'] : set_value('item_category_code') ?>" class="form-control <?= $errors['item_category_code'] ? 'is-invalid':'is-valid' ?>" id="item_category_code"  placeholder="Select">
               <option placeholder="Unselected">Select Category</option>
               <option value="Keyboard">Keyboard</option>
               <option value="Mouse">Mouse</option>
               <option value="Monitor">Monitor</option>
               <option value="Laptop">Laptop</option>
               <option value="CPU Unit">CPU Unit</option>
              </select>
               <?php if($errors['item_category_code']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['item_category_code'] ?>
                 </div>
               <?php endif; ?>
           </div>
         </div>
       </div>

        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="form-group">
              <label for="brand_name">Brand</label>
              <!-- <input name="item_category_code" type="text" value="<?= isset($rec['brand_name']) ? $rec['brand_name'] : set_value('brand_name') ?>" class="form-control <?= $errors['brand_name'] ? 'is-invalid':'is-valid' ?>" id="item_category_code" placeholder="Item Category Code"> -->
              <select class="form-control" name="brand_name" value="<?= isset($rec['brand_name']) ? $rec['brand_name'] : set_value('brand_name') ?>" class="form-control <?= $errors['brand_name'] ? 'is-invalid':'is-valid' ?>" id="brand_name">
                <option value="Unselected">Select Brand</option>
                <option value="Unbranded">Unbranded</option>
                <option value="Genius">Genius</option>
                <option value="A4tech">A4tech</option>
                <option value="Lenovo">Lenovo</option>
                <option value="Acer">Acer</option>
                <option value="Dell">Dell</option>
               </select>
                <?php if($errors['brand_name']): ?>
                  <div class="invalid-feedback">
                    <?= $errors['brand_name'] ?>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="property_no">Property Number</label>
                       <input name="property_no" type="text" value="<?= isset($rec['property_no']) ? $rec['property_no'] : set_value('property_no') ?>" class="form-control <?= $errors['property_no'] ? 'is-invalid':'is-valid' ?>" id="property_no" placeholder="Property Number">
                         <?php if($errors['property_no']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['property_no'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <<div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="description">Status</label>
                       <!-- <input name="item_category_code" type="text" value="<?= isset($rec['description']) ? $rec['description'] : set_value('description') ?>" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid' ?>" id="item_category_code" placeholder="Item Category Code"> -->
                       <select class="form-control" name="description" value="<?= isset($rec['description']) ? $rec['description'] : set_value('description') ?>" class="form-control <?= $errors['description'] ? 'is-invalid':'is-valid' ?>" id="description">
                         <option value="Unselected">Select Status</option>
                         <option value="Working">Working</option>
                         <option value="Not Working">Not Working</option>
                         <option value="Under Maintenance">Under Maintenance</option>
                        </select>
                         <?php if($errors['description']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['description'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="location">Location</label>
                       <input name="location" type="text" value="<?= isset($rec['location']) ? $rec['location'] : set_value('location') ?>" class="form-control <?= $errors['location'] ? 'is-invalid':'is-valid' ?>" id="location" placeholder="Location">
                         <?php if($errors['location']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['location'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="quantity">Quantity</label>
                       <input name="quantity" type="text" value="<?= isset($rec['quantity']) ? $rec['quantity'] : set_value('quantity') ?>" class="form-control <?= $errors['quantity'] ? 'is-invalid':'is-valid' ?>" id="quantity" placeholder="Quantity">
                         <?php if($errors['quantity']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['quantity'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="unit_on_stocks">Unit Stocks</label>
                       <input name="unit_on_stocks" type="text" value="<?= isset($rec['unit_on_stocks']) ? $rec['unit_on_stocks'] : set_value('unit_on_stocks') ?>" class="form-control <?= $errors['unit_on_stocks'] ? 'is-invalid':'is-valid' ?>" id="unit_on_stocks" placeholder="Unit Stocks">
                         <?php if($errors['unit_on_stocks']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['unit_on_stocks'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <button type="submit" class="btn btn-primary float-right">Submit</button>
                   </div>
                 </div>
               </form>
               <p style="clear: both"></p>
             </div>
            </div>
