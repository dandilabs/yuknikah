<?= $this->extend('layouts/default')?>

<?= $this->section('title')?>
<title>Gawe  &mdash; Yuknikah</title>
<?= $this->endsection()?>

<?= $this->section('content')?>
<section class="section">
    <div class="section-header">
        <h1>Data Gawe / Acara</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Gawe / Acara</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Info</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($query as $key=> $value):?>
                <tr>
                    <td><?= $key+1;?></td>
                    <td><?= $value->name_gawe?></td>
                    <td><?= $value->date_gawe?></td>
                    <td><div class="badge badge-success"><?= $value->info_gawe?></div></td>
                    <td class="text-center" style="width:15%">
                        <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> </a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>  </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endsection()?>