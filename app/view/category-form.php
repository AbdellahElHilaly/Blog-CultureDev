<?php
    $postController = new CategoryController();
    $categoryname = 'Enter category name';
    $id = $id =  NULL;
    $action = "add";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(isset($_POST['action']))  $action =  $_POST['action'];
        
        if(isset($_POST['id']))  $id =  $_POST['id'];

        if(isset($_POST['submite'])) {print_r($postController->handleFormData($_POST));} 
        
        else $categoryname = $postController->handleFormData($_POST);
    }
?>




<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center my-5">Add Category</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group my-4">
                        <label for="category-name">Category Name</label>
                        <input type="text" class="form-control" id="category-name" name="category-name" placeholder="<?=$categoryname?>">
                    </div>
                    <div class="text-center my-4">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <button type="submit" name="submite" value="<?=$action?>" class="btn btn-primary" id="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script src="public/asset/js/category.js"></script>