
<?php require_once 'app/view/include/header.php';?>
<section class="container-fluid mt-2" style="height: 90vh;">
    <div class="row">
        <div class="col-md-3" id="dashbord-overview-id">
            <div class="card text-center mb-3" >
                <div class="card-header bg-info text-white">
                    Overview
                </div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <div>
                            <button onclick="displayTabel(1)" class="btn btn-secondary btn-sm d-block d-md-inline" >Developers</button>
                            <span class="text-success font-weight-bold" id="posts">12</span>
                        </div>
                        <div>
                            <button onclick="displayTabel(2)" class="btn btn-secondary btn-sm d-block d-md-inline" >Articles</button>
                            <span class="text-success font-weight-bold" id="articles">176</span>
                        </div>
                        <div>
                            <button onclick="displayTabel(3)" class="btn btn-secondary btn-sm d-block d-md-inline" >Categories</button>
                            <span class="text-success font-weight-bold" id="developers">22</span>
                        </div>
                        
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <small>Last updated: </small>
                </div>
            </div>

            <div class="card text-center d-none d-sm-block">
                <div class="card-header bg-info text-white">
                    Admin Content
                </div>
                <div class="card-body">
                    <div class="card-text d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-user-circle fa-3x"></i>
                        </div>
                        <div>
                            <a href="#" class="btn btn-danger btn-sm d-block d-md-inline">Log Out</a>
                            <a href="#" class="btn btn-secondary btn-sm d-block d-md-inline">Show Profile</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="col-md-9 " id="dashbord-body-id">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-info">
                    <h5 class="card-title">Articles</h5>
                    <a href="#" class="text-black" id="fullscreen-icon" data-toggle="tooltip" data-placement="top" title="View Full Screen">
                        <i class="fas fa-expand"></i>
                    </a>
                    <a href="form" class="btn btn-primary btn-sm d-block d-md-inline" id="add-article-icon" data-toggle="tooltip" data-placement="top" title="Add Article">
                        <i class="fas fa-plus"></i> Add Article
                    </a>
                </div>

                <div class="card-body d-none" id="table-categories-id">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cell</td>
                                    <td class="d-flex">
                                        <a href="#" class="text-success me-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-body d-none" id="table-developers-id">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">image</th>
                                    <th scope="col">article</th>
                                    <th scope="col">date_time</th>
                                    <th scope="col">category</th>
                                    <th scope="col">admin</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td class="d-flex">
                                        <a href="#" class="text-success me-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="text-info me-2" data-toggle="tooltip" data-placement="top" title="Show"><i class="fas fa-eye me"></i></a>
                                        
                                        <a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body" id="table-posts-id">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">posts_number</th>
                                    <th scope="col">posts</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td >
                                        <a href="#" class="text-info me-2" data-toggle="tooltip" data-placement="top" title="Show"><i class="fas fa-eye me"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="public/asset/js/dashbord.js"></script>





