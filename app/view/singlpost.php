<?php
    $postController = new PostController();
    if(isset($_GET['viwe-post'])) $post = $postController->handleFormData($_GET); 
?>



<section>
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card" >
                    <div class="text-center mt-3">
                        <h3 class="font-weight-bold text-uppercase"><?=$post['title']?></h3>
                    </div>
                    <div class="card-header d-flex justify-content-between align-items-center">
                        
                        <p class="text-muted"><?=$post['category_id']?></p>
                        <p class="text-muted"><?=$post['admin_id']?></p>
                        <p class="text-muted"><?=$post['datetime']?></p>
                    </div>
                    
                    <div class="card-body">
                    <div class="text-center">
                        <img src="public/asset/image/<?= $post['image']; ?>" alt="Post Image" class="img-fluid">
                    </div>
                    <p class="card-text text-center text-muted"><?=$post['article']?></p>
            </div>
        </div>
    </div>
</section>
                    