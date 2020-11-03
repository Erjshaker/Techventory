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
   <form action="<?= base_url() ?>inventories/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="item_code_id">Item Code</label>
           <input name="item_code_id" type="text" value="<?= isset($rec['item_code_id']) ? $rec['item_code_id'] : set_value('item_code_id') ?>" class="form-control <?= $errors['item_code_id'] ? 'is-invalid':'is-valid' ?>" id="item_code_id" placeholder="Item Code">
             <?php if($errors['item_code_id']): ?>
               <div class="invalid-feedback">
                 <?= $errors['item_code_id'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>

      <div class="row">
         <div class="col-md-6 offset-md-3">
           <div class="form-group">
             <label for="item_category">Item Category</label>
             <!-- <input name="item_category" type="text" value="<?= isset($rec['item_category']) ? $rec['item_category'] : set_value('item_category') ?>" class="form-control <?= $errors['item_category'] ? 'is-invalid':'is-valid' ?>" id="item_category" placeholder="Item Category Code"> -->
             <select class="form-control" name="item_category" value="<?= isset($rec['item_category']) ? $rec['item_category'] : set_value('item_category') ?>" class="form-control <?= $errors['item_category'] ? 'is-invalid':'is-valid' ?>" id="item_category"  placeholder="Select">
               <option placeholder="Unselected">Select Category</option>
               <option value="Keyboard">Keyboard</option>
               <option value="Mouse">Mouse</option>
               <option value="Monitor">Monitor</option>
               <option value="Laptop">Laptop</option>
               <option value="CPU Unit">CPU Unit</option>
              </select>
               <?php if($errors['item_category']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['item_category'] ?>
                 </div>
               <?php endif; ?>
           </div>
         </div>
       </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="location_id">Location</label>
                       <input name="location_id" type="text" value="<?= isset($rec['location_id']) ? $rec['location_id'] : set_value('location_id') ?>" class="form-control <?= $errors['location_id'] ? 'is-invalid':'is-valid' ?>" id="location_id" placeholder="Location">
                         <?php if($errors['location_id']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['location_id'] ?>
                           </div>
                         <?php endif; ?>
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-6 offset-md-3">
                     <div class="form-group">
                       <label for="quantity_id">Quantity</label>
                       <input name="quantity_id" type="text" value="<?= isset($rec['quantity_id']) ? $rec['quantity_id'] : set_value('quantity_id') ?>" class="form-control <?= $errors['quantity_id'] ? 'is-invalid':'is-valid' ?>" id="quantity_id" placeholder="Quantity">
                         <?php if($errors['quantity_id']): ?>
                           <div class="invalid-feedback">
                             <?= $errors['quantity_id'] ?>
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
