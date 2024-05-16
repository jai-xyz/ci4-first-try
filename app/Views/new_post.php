<?= $this->include('partials/header') ?>

<h1><?= $title ?></h1>

<h1><?= $popup ?></h1>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <form  method="post" action="/blog/new">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="post_title">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea type="text" class="form-control" name="post_content" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success btm-sm">Create</button>
                </div>
            </form>

        </div>
    </div>
</div>
</div>

<?= $this->include('partials/footer') ?>