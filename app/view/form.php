
<script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div class="">
<div class="form-group text-center my-5 d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-block">
        <h1 class="mr-2 text-center">Add your post please</h1>
    </div>
    <div class="d-block">
        <a href="#" id="add-post-btn" class="btn btn-primary mr-2" onclick="addNewForm()">Add New Post</a>
        <a href="#" class="btn btn-secondary">Submit All</a>
    </div>
</div>

    <div class="card my-5">
        <div class="card-body" id="post-form-parent-id">
            <div class="d-flex justify-content-between">
                <h5 class="ms-2">Post Number: <span id="post-number">1</span></h5>
                <a type="submit" class="btn btn-primary align-self-end">Submit</a>
            </div>
            <form class="mt-4"  method="POST" action="">
                <div class="row">
                    <div class="col mb-3">
                        <p class="card-title fs-5">Post Title</p>
                        <div class="form-group">
                            <input type="text" id="form6Example1" class="form-control" placeholder="Title" />
                        </div>
                    </div>
                    <div class="col mb-3">
                        <p class="card-title fs-5">Post Categories</p>
                        <div class="form-group">
                            <select class="form-control" aria-label="Default select example">
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
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="card-title fs-5">Article</p>
                        <textarea class="form-control" id="form6Example7" rows="3"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>










<script src="public/asset/js/form.js"></script>















