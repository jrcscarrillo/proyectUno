<div class="form-group">
    <h1>
        Search users
    </h1>
    <p>
        <?= $this->tag->linkTo(['users/new', 'Create users']) ?>
    </p>
</div>

<?= $this->tag->form(['users/search', 'method' => 'post', 'autocomplete' => 'off', 'class' => 'form-horizontal']) ?>

<div class="form-group">
    <label for="fieldId" class="col-sm-2 control-label">Id</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['id', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldId']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['name', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldName']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['email', 'size' => 30, 'class' => 'form-control', 'id' => 'fieldEmail']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldPassword" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <?= $this->tag->selectStatic(['password', 'using' => [], 'class' => 'form-control', 'id' => 'fieldPassword']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldMustchangepassword" class="col-sm-2 control-label">MustChangePassword</label>
    <div class="col-sm-10">
        <?= $this->tag->selectStatic(['mustChangePassword', 'using' => [], 'class' => 'form-control', 'id' => 'fieldMustchangepassword']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldProfilesid" class="col-sm-2 control-label">ProfilesId</label>
    <div class="col-sm-10">
        <?= $this->tag->textField(['profilesId', 'type' => 'numeric', 'class' => 'form-control', 'id' => 'fieldProfilesid']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldBanned" class="col-sm-2 control-label">Banned</label>
    <div class="col-sm-10">
        <?= $this->tag->selectStatic(['banned', 'using' => [], 'class' => 'form-control', 'id' => 'fieldBanned']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldSuspended" class="col-sm-2 control-label">Suspended</label>
    <div class="col-sm-10">
        <?= $this->tag->selectStatic(['suspended', 'using' => [], 'class' => 'form-control', 'id' => 'fieldSuspended']) ?>
    </div>
</div>

<div class="form-group">
    <label for="fieldActive" class="col-sm-2 control-label">Active</label>
    <div class="col-sm-10">
        <?= $this->tag->selectStatic(['active', 'using' => [], 'class' => 'form-control', 'id' => 'fieldActive']) ?>
    </div>
</div>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?= $this->tag->submitButton(['Search', 'class' => 'btn btn-default']) ?>
    </div>
</div>

</form>
