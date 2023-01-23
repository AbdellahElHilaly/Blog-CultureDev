<?php
    require_once 'app/view/include/header.php';
    require_once './app/controller/AdmineController.php';
    
    $postController = new PostController();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        print_r($postController->handleFormData($_POST));
    }
?>

<script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<form action="" method="POST" enctype="multipart/form-data">

    <div class="m-2">
        <div class="form-group mb-2 text-center d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-block">
                <h1 class=" text-center">Add your post please</h1>
            </div>
            <div class="">
                <a href="#" id="add-post-btn"  class="btn btn-primary mr-2" onclick="addNewForm()">Add New Post</a>
                <button type="submit" name="add-posts"  class="btn btn-secondary">Submit All</button>
            </div>
        </div>

        <div class="card ">
            <div class="card-body" id="post-form-parent-id">
                <div class="mt-2" id="post-form-id" >
                    <div class="d-flex justify-content-between">
                        <h5 class="">Post Number: <span id="post-number">1</span></h5>
                        <button name="add-post" value="0" class="btn btn-secondary">Submit</button>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <p class="card-title fs-5">Post Title</p>
                            <div class="form-group">
                                <input type="text" name="post-title[]"  id="form6Example1" class="form-control" placeholder="Title" />
                            </div>
                        </div>
                        <div class="col mb-3">
                            <p class="card-title fs-5">Post Categories</p>
                            <div class="form-group">
                                <select class="form-control" name="post-categorie_id[]" aria-label="Default select example">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-file">
                                <p class="card-title fs-5">Image</p>
                                <input type="file"  name="post-image[]" class="custom-file-input" id="inputGroupFile01">
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="card-title fs-5">Article</p>
                            <textarea class="form-control"  name="post-article[]"   id="myTextarea-0" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="public/asset/js/form.js"></script>















