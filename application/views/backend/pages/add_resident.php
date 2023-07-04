<!-- Main Content -->
<div id="content">
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label> First Name </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>
<div class="form-group">
        <label> Last Name </label>
        <input type="text" name="lastname" class="form-control"/>
        <span><?= form_error('lastname') ?></span>
</div>
<div class="form-group">
        <label> Birth Date </label>
        <input type="date" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
    <button class="btn btn-primary"> SUBMIT </button>
</div>
</form>
</div>
</div>