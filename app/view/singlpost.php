<?php
    $postController = new PostController();
    if(isset($_GET['viwe-post'])) $post = $postController->handleFormData($_GET); 
?>


<section>
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="card " >
                    <div class="container">
                        <div class="position-relative  mt-3 ">
                            <h3 class="font-weight-bold text-uppercase  ">
                                <?=$post['title']?>
                                
                            </h3>

                            <div class="position-absolute top-0 start-100  ">
                                <a href="dashboard " class=" btn btn-secondary m-2 ">
                                    <i class="fa fa-home "></i>
                                </a>
                                <a href="post-form&id=<?=$post['id']?>&action=edit-post" class="btn btn-primary m-2">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="public/asset/image/<?= $post['image']; ?>" alt="Post Image" class="img-fluid" style="max-height:500px">
                        </div>
                        <p class="card-text text-center text-muted"><?=$post['article']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



