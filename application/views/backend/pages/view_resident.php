<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Resident List</h1>
   <p class="mb-4">
    <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-resident') ?>"> Add Resident </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Birth Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($resident_list as $resident):?>
    <tr>
      <th scope="row"><?= $resident->resident_id ?></th>
      <td><?= $resident->first_name ?></td>
      <td><?= $resident->last_name ?></td>
      <td><?= $resident->birth_date ?></td>
      <td>
        <a class="btn btn-danger btn-sm" href="<?=base_url('index.php/dashboard/update-residents/'.$resident->resident_id);?>">EDIT</a>
        <a class="btn btn-danger btn-sm" href="<?=base_url('index.php/dashboard/delete-residents/'.$resident->resident_id);?>">DELETE</a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
      </div>
   </div>
</div>