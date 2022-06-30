<h4>Edit user</h4>

<?= $this->Form->create($user); ?>
  <div class="form-group">
    <label for="">Email</label>
    <?= $this->Form->input('username',['label'=>false,'class'=>'form-control']); ?>
  </div>
  <div class="form-group">
    <label for="">Name</label>
    <?= $this->Form->input('first_name',['label'=>false,'class'=>'form-control','type'=>'text']); ?>
  </div>
  <div class="form-group">
    <label for="">Last name</label>
    <?= $this->Form->input('last_name',['label'=>false,'class'=>'form-control','type'=>'text']); ?>
  </div>
  <div class="form-group">
        <label for="">Role</label>
        <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author'],
            'class'=>'form-control',
            'label'=>false
        ]) ?>
  </div>
  <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
<?php echo $this->Form->end(); ?>