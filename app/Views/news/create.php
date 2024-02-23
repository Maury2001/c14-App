<!-- <h2><?=esc($title)?></h2> -->

<?= session()->getFlashdata('error')?>

<?= validation_list_errors()?>

<div class="card position-absolute top-50 start-50 translate-middle p-4 shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="width: 50rem;">
  <div class="card-body p-4">
  <form action="/news" method="post">
    <?= csrf_field()?>
    <label class=" p-2" for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label class=" p-2" for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" class="btn btn-outline-primary p-2" value="Create news item">
</form>

  </div>
</div>

