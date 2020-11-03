<div class="row">
  <div class="col-md-5">
    <form class="" action="<?= base_url(). 'borrowers' ?>" method="get">
      <br>
      <input placeholder="Search Name" style="width:250px;" type="text" name="search" value="">
      <button style="background-color: #4e4f4f; border: 1.5px solid  #4e4f4f; " type="submit"><i style="color: #ffffff; " class="fas fa-search"></i></button>
    </form>
  </div>
  <div class="container">

  </div>
  <div class="col-md-2  offset-md-5">
    <br>
    <?php user_add_link('borrowers', $_SESSION['userPermmissions']) ?>
   </div>
 </div>
<br>
  <?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
 <div class="table-responsive">
   <table class="table table-bordered">
    <thead class="thead-dark">
      <tr class="text-center">
        <th>#</th>
        <th>Borrower</th>
        <th>Approved By</th>
        <th>Date Approved</th>
        <th>Date Borrowed</th>
        <th>Date Return</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $cnt = 1; ?>
      <?php foreach($borrowers as $borrower): ?>
      <tr id="<?php echo $borrower['id']; ?>">
        <th scope="row"><?= $cnt++ ?></th>
        <td><?= ucwords($borrower['borrowed_by']) ?></td>
        <td><?= ucwords($borrower['approved_by']) ?></td>
        <td><?= ucwords($borrower['approved_date']) ?></td>
        <td><?= ucwords($borrower['date_borrowed']) ?></td>
        <td><?= ucwords($borrower['date_return']) ?></td>
        <td class="text-center">
          <?php
            users_action('borrowers', $_SESSION['userPermmissions'], $borrower['id']);
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
    <?php paginater('borrowers', count($all_items), PERPAGE, $offset) ?>
  </div>
</div>
