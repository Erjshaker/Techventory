<div class="row">
  <div class="col-md-5">
    <br>
    <form class="" action="<?= base_url(). 'activities' ?>" method="get">
      <input placeholder="Search Item Code" style="width:250px;" type="text" name="search" value="">
      <button style="background-color: #4e4f4f; border: 1.5px solid  #4e4f4f; " type="submit"><i style="color: #ffffff; " class="fas fa-search"></i></button>
    </form>
  </div>
  <div class="container">
  </div>
  <div class="col-md-2">
   <!-- <?php user_add_link('inventories', $_SESSION['userPermmissions']) ?> -->
  </div>
</div>
<br>
 <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="table-responsive">
  <table class="table table-bordered">
   <thead class="thead-dark">
     <tr align="center">
       <th>#</th>
       <th>Item Code</th>
       <th>Item Category</th>
       <th>Location</th>
       <th>Borrower</th>
       <th>Aproved By</th>
       <th>Approved Date</th>
     </tr>
   </thead>
   <tbody>
     <?php $cnt = 1; ?>
     <?php foreach($activities as $activity): ?>

       <th scope="row"><?= $cnt++ ?></th>
       <td><?= $activity['item_code_id']?></td>
       <td><?= $activity['item_category']?></td>
       <td><?= $activity['location_id']?></td>
       <td><?= $activity['borrowed_by']?></td>
       <td><?= $activity['approved_by']?></td>
       <td><?= $activity['approved_date']?></td>

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
