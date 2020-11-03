<div class="row">
  <div class="col-md-5">
    <br>
    <form class="" action="<?= base_url(). 'inventories' ?>" method="get">
      <input placeholder="Search Item Code" style="width:250px;" type="text" name="search" value="">
      <button style="background-color: #4e4f4f; border: 1.5px solid  #4e4f4f; " type="submit"><i style="color: #ffffff; " class="fas fa-search"></i></button>
    </form>
  </div>
  <div class="container">

  </div>
  <div class="col-md-2  offset-md-5">
    <br>
   <?php user_add_link('inventories', $_SESSION['userPermmissions']) ?>
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr class="text-center">
       <th>#</th>
       <th>Item Code</th>
       <th>Item Category</th>
       <th>location</th>
       <th>Quantity</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($inventories as $inventory): ?>
     <tr id="<?php echo $inventory['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($inventory['item_code_id']) ?></td>
       <td><?= ucwords($inventory['item_category']) ?></td>
       <td><?= ucwords($inventory['location_id']) ?></td>
       <td><?= ucwords($inventory['quantity_id']) ?></td>
       <td class="text-center">
         <?php
           users_action('inventories', $_SESSION['userPermmissions'], $inventory['id']);
         ?>
       </td>
     </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
</div>
<hr>

<div class="row">
 <div class="col-md-6 offset-md-6">
   <?php paginater('inventories', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
