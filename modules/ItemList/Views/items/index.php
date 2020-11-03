<div class="row">
  <div class="col-md-5">
    <br>
    <form class="" action="<?= base_url(). 'items' ?>" method="get">
      <input placeholder="Search Item Code" style="width:250px;" type="text" name="search" value="">
      <button style="background-color: #4e4f4f; border: 1.5px solid  #4e4f4f; " type="submit"><i style="color: #ffffff; " class="fas fa-search"></i></button>
    </form>
  </div>
  <div class="container">

  </div>
  <div class="col-md-2  offset-md-5">
    <br>
   <?php user_add_link('items', $_SESSION['userPermmissions']) ?>
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
       <th>Brand Name</th>
       <th>Property #</th>
       <th>Description</th>
       <th>location</th>
       <th>Quantity</th>
       <th>Unit Stocks</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($items as $item): ?>
     <tr id="<?php echo $item['id']; ?>">
       <th scope="row"><?= $cnt++ ?></th>
       <td><?= ucwords($item['item_code']) ?></td>
       <td><?= ucwords($item['item_category_code']) ?></td>
       <td><?= ucwords($item['brand_name']) ?></td>
       <td><?= ucwords($item['property_no']) ?></td>
       <td><?= ucwords($item['description']) ?></td>
       <td><?= ucwords($item['location']) ?></td>
       <td><?= ucwords($item['quantity']) ?></td>
       <td><?= ucwords($item['unit_on_stocks']) ?></td>
       <td class="text-center">
         <?php
           users_action('items', $_SESSION['userPermmissions'], $item['id']);
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
   <?php paginater('items', count($all_items), PERPAGE, $offset) ?>
 </div>
</div>
