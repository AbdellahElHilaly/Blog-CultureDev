<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Edit Profile</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="admin-name">Name</label>
                        <input type="text" class="form-control" id="admin-name" name="admin-name" placeholder="Enter name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="admin-email">Email</label>
                        <input type="email" class="form-control" id="admin-email" name="admin-email" placeholder="Enter email">
                    </div>
                    <div class="form-group mt-3">
                        <label for="admin-password">Password</label>
                        <input type="password" class="form-control" id="admin-password" name="admin-password" placeholder="Enter password">
                    </div>
                    <div class="form-group mt-3">
                        <label for="admin-password-confirm">Confirm Password</label>
                        <input type="password" class="form-control" id="admin-password-confirm" name="admin-password-confirm" placeholder="Confirm password">
                    </div>
                    <div class="form-group my-3">
                        <label for="admin-image">Profile Image</label>
                        <input type="file" class="form-control-file" id="admin-image" name="admin-image">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>