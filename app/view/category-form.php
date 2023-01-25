<?php
require_once 'app/view/include/header.php';


    $cateroryController = new CategoryController();
    $categoryname = '';
    $id = $id =  NULL;
    $action = "add";
    if (isset($_POST['submite'])) {
        print_r($cateroryController->handleFormData($_POST));
    }
    if(isset($_GET['edit-category'])){
        // print_r($_GET);
        $id =  $_GET['edit-category'];
        $action = "edit";

        $categoryname = $cateroryController->getCategories($id)[0]['name'];
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
                        <input type="text" class="form-control" id="category-name" value="<?=$categoryname?>"  name="category-name" placeholder="Enter category name">
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