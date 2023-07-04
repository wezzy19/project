<!-- Main Content -->
<div id="content">
<div class="container">
    <form method="post" action="<?php echo base_url('index.php/dashboard/update_residents/'.$resident_data->resident_id); ?>">
    <div class="form-group">
        <label> First Name </label>
        <input type="text" value="<?php echo $resident_data->first_name; ?>" name="first_name" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>

<div class="form-group">
        <label> Last Name </label>
        <input type="text" value="<?php echo $resident_data->last_name; ?>" name="last_name" class="form-control"/>
        <span><?= form_error('lastname') ?></span>
</div>

<div class="form-group">
        <label> Birth Date </label>
        <input type="date" value="<?php echo $resident_data->birth_date; ?>" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
    <button class="btn btn-primary"> Update </button>
</div>
</form>
</div>
</div>