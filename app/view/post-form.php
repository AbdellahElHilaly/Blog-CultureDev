<script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


<?php
    require_once 'app/view/include/header.php';
    
    $postController = new PostController();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        print_r($postController->handleFormData($_POST));
    }

    $category = new CategoryController();
    // if(!$category->getCategories()) die("error : database categoris");

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        if(isset($_GET['id']) && isset($_GET['action'])){
            $display = "none";
            $title = "Edit your post here";
            $action =$_GET['action'];
            $id = $_GET['id'];
            
            $postController->getPost($id);
            $post = $postController->getPost($id)[0];
        }
        else {$display = "block"; $title = "Add your posts here"; $action = "add-post";}
    }
?>



<form action="" method="POST" enctype="multipart/form-data">

    <div class="m-4">
        <div class="form-group mb-2 text-center d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-block">
                <h1 class=" text-center"><?=$title?></h1>
            </div>
            <div class="d-<?=$display?>">
                <a href="#" id="add-post-btn"  class="btn btn-primary mr-2" onclick="addNewForm()">Add New Post</a>
                <button type="submit" name="add-posts"  class="btn btn-secondary">Submit All</button>
            </div>
        </div>

        <div class=" ">
            <div class=" " id="post-form-parent-id">
                <div class="card mb-5" id="post-form-id" >
                    <div class="card-body">
                    <div class=" d-flex justify-content-between">
                        <h5 class="">Post Number: <span class="post-number" id="post-number">1</span></h5>
                        <button name="<?=$action?>" value="<?php echo isset($post['id']) ? $post['id'] : $id; ?>" class="btn btn-secondary">Submit</button>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <p class="card-title fs-5">Post Title</p>
                            <div class="form-group">
                                <input type="text" name="post-title[]" value="<?php echo isset($post['title']) ? $post['title'] : ''; ?>"  id="form6Example1" class="form-control" placeholder="Title" />
                            </div>
                        </div>
                        <div class="col mb-3">
                            <p class="card-title fs-5">Post Categories</p>
                            <div class="form-group">
                                <select class="form-control" name="post-categorie_id[]" aria-label="Default select example">
                                    <?php foreach($category->getCategories() as $category): ?>
                                        <option value="<?=$category['id'] ?>"><?= $category['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-file">
                                <p class="card-title fs-5">Image</p>
                                <div class="d-flex justify-content-between align-items-center ">
                                    <input type="file"  name="post-image[]" class="custom-file-input" id="inputGroupFile01">
                                    <img src="public/asset/image/<?php echo isset($post['image']) ? $post['image'] : 'test.jpg'; ?>" class="img-thumbnail" alt="image" width="100" height="100">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="card-title fs-5">Article</p>
                            <textarea class="form-control vh-100"  name="post-article[]"     id="myTextarea-0" rows="3"><?php echo isset($post['article']) ? $post['article'] : ''; ?></textarea>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</form>

<script src="public/asset/js/form.js"></script>















