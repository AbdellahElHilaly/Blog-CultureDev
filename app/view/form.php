
<script src="https://cdn.tiny.cloud/1/sc5gr4ufscakvxl0769jshvc0883ter7sbbcmdeoqwd5oesd/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<div class="m-2">
    <div class="form-group mb-2 text-center d-flex justify-content-between align-items-center flex-wrap">
        <div class="d-block">
            <h1 class=" text-center">Add your post please</h1>
        </div>
        <div class="">
            <a href="#" id="add-post-btn"  class="btn btn-primary mr-2" onclick="addNewForm()">Add New Post</a>
            <a href="#" onclick="sendPostData()" class="btn btn-secondary">Submit All</a>
        </div>
    </div>

    <div class="card ">
        <div class="card-body" id="post-form-parent-id">
            <form class="mt-2" id="post-form-id"  method="POST" action="">
                <div class="d-flex justify-content-between">
                    <h5 class="">Post Number: <span id="post-number">1</span></h5>
                    <a type="submit" class="btn btn-primary align-self-end">Submit</a>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <p class="card-title fs-5">Post Title</p>
                        <div class="form-group">
                            <input type="text" name="post-title"  id="form6Example1" class="form-control" placeholder="Title" />
                        </div>
                    </div>
                    <div class="col mb-3">
                        <p class="card-title fs-5">Post Categories</p>
                        <div class="form-group">
                            <select class="form-control" name="post-categories" aria-label="Default select example">
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
                            <input type="file" name="post-image" class="custom-file-input" id="inputGroupFile01">
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="card-title fs-5">Article</p>
                        <postditor class="form-control"  id="myTextarea-0" name="post-article"  rows="3"></postditor>
                    </div>
                </div>
            </form>
        </div>
    </div>


<script src="public/asset/js/form.js"></script>















