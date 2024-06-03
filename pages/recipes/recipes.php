<?php include '../../components/header/header.php'; ?>

<div class="py-5 mx-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="text-left mb-4">My Recipes</h1>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <input class="form-control rounded-left" type="search" placeholder="Search recipe" aria-label="Search">
                <div class="input-group-append">
                    <span class="input-group-text bg-white border-left-0 rounded">
                        <i class="fa fa-search"></i>
                    </span>
                    <a class="btn btn-primary my-2 my-sm-0 ml-2 rounded-right" href="../../pages/add-recipes/add-recipes.php">Add New</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../../components/footer/footer.php'; ?>
