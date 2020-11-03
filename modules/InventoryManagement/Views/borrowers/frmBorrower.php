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
   <form action="<?= base_url() ?>borrowers/<?= isset($rec) ? 'edit/'.$rec['id'] : 'add' ?>" method="post">
     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="borrowed_by">Borrower</label>
           <input name="borrowed_by" type="text" value="<?= isset($rec['borrowed_by']) ? $rec['borrowed_by'] : set_value('borrowed_by') ?>" class="form-control <?= $errors['borrowed_by'] ? 'is-invalid':'is-valid' ?>" id="borrowed_by" placeholder="Borrower">
             <?php if($errors['borrowed_by']): ?>
               <div class="invalid-feedback">
                 <?= $errors['borrowed_by'] ?>
               </div>
             <?php endif; ?>
         </div>
       </div>
     </div>
     
           <div class="row">
             <div class="col-md-6 offset-md-3">
               <div class="form-group">
                 <label for="approved_by">Approved By</label>
                 <input name="approved_by" type="text" value="<?= isset($rec['approved_by']) ? $rec['approved_by'] : set_value('approved_by') ?>" class="form-control <?= $errors['approved_by'] ? 'is-invalid':'is-valid' ?>" id="approved_by" placeholder="Approved By">
                   <?php if($errors['approved_by']): ?>
                     <div class="invalid-feedback">
                       <?= $errors['approved_by'] ?>
                     </div>
                   <?php endif; ?>
               </div>
             </div>
           </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="approved_date">Date Approved</label>
             <input name="approved_date" type="date" value="<?= isset($rec['approved_date']) ? $rec['approved_date'] : set_value('approved_date') ?>" class="form-control <?= $errors['approved_date'] ? 'is-invalid':'is-valid' ?>" id="approved_date">
               <?php if($errors['approved_date']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['approved_date'] ?>
                 </div>
               <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="date_borrowed">Date Borrowed</label>
             <input name="date_borrowed" type="date" value="<?= isset($rec['date_borrowed']) ? $rec['date_borrowed'] : set_value('date_borrowed') ?>" class="form-control <?= $errors['date_borrowed'] ? 'is-invalid':'is-valid' ?>" id="date_borrowed">
               <?php if($errors['date_borrowed']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['date_borrowed'] ?>
                 </div>
               <?php endif; ?>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-md-6 offset-md-3">
         <div class="form-group">
           <label for="date_return">Date Returned</label>
             <input name="date_return" type="date" value="<?= isset($rec['date_return']) ? $rec['date_return'] : set_value('date_return') ?>" class="form-control <?= $errors['date_return'] ? 'is-invalid':'is-valid' ?>" id="date_return">
               <?php if($errors['date_return']): ?>
                 <div class="invalid-feedback">
                   <?= $errors['date_return'] ?>
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
