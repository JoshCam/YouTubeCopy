<div class="col-sm-6 col-md-4 col-lg-3 mt-3">
  <!-- card 1 -->
  <div class="card">
    <img
      height="160"
      src="<?= $video->img ?>"
      class="card-img-top"
      alt="Bristol1"
    />
    <div class="card-body">
      <p class="card-text">
        <?= $video->title ?>
      </p>
      <p class="card-text">
        <small class="text-muted"><?= $video->date ?></small>
      </p>
    </div>
  </div>
</div>