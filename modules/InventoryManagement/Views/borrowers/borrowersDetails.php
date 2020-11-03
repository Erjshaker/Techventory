<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="row">
      <div class="col-md-12">
        <span class="field">Borrower</span>
        <span class="field-value"><?= ucfirst($borrowers[0]['borrowed_by']) ?></span>
      </div>
    </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Approved By</span>
            <span class="field-value"><?= ucfirst($borrowers[0]['approved_by']) ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Approved Date</span>
            <span class="field-value"><?= $borrowers[0]['approved_date'] ?> (<?= floor((time() - strtotime($borrowers[0]['approved_date'])) / 31556926) ?> yrs old) </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Date Borrowed</span>
            <span class="field-value"><?= $borrowers[0]['date_borrowed'] ?> (<?= floor((time() - strtotime($borrowers[0]['date_borrowed'])) / 31556926) ?> yrs old) </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <span class="field">Date Return</span>
            <span class="field-value"><?= $borrowers[0]['date_return'] ?> (<?= floor((time() - strtotime($borrowers[0]['date_return'])) / 31556926) ?> yrs old) </span>
          </div>
        </div>

        <br>
        <div class="row">
          <div class="col-md-3 offset-8">
            <?php
            user_edit_link('borrowers','edit-borrower', $permissions, $borrowers[0]['id']);
            ?>
          </div>
        </div>
      </div>
    </div>
    <br>
