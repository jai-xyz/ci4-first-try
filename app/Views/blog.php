<?= $this->include('partials/header') ?>

<h1><?= $title ?></h1>

<div class="container-fluid d-flex">
<?= $this->include('partials/sidebar') ?>
<div class="col-8">
        <div class="row d-flex justify-content-center gap-3">
            <?php foreach ($posts as $post) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="/assets/dummyimage.jpg" class="card-img-top" alt="imgs" style="max-width:100%" width="100%" head="100%">
                    <div class="card-body">
                        <h5 class="card-title"><?= $post ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis est asperiores unde reiciendis vel consequuntur delectus ea culpa tempora incidunt quia, modi repudiandae distinctio pariatur velit commodi nemo autem? Eius.</p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->include('partials/footer') ?>