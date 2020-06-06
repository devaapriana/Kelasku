<div class="container-fluid" style="padding: 0; margin:0;">

    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" style="opacity: 0.8">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="<?php echo base_url('assets/'); ?>img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="<?php echo base_url('assets/'); ?>img/3.jpg" class="d-block w-100" alt="..." style="max-height: 598px;">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/'); ?>img/4.jpg" class="d-block w-100" alt="..." style="max-height: 598px;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <p class="caption">KelasKu</p>
</div>

<div class="container-md shadow p-3 mb-5 centered  p-5" style="padding: 0; margin-top:0;border-radius:15px;position:relative;">
    <?php echo $this->session->flashdata('message'); ?>
    <?php echo $this->session->flashdata('upload_error'); ?>

    <div class=" row">
        <div class="col">

            <div class="kartu hovercard centered">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="<?php echo base_url('assets/img/') ?><?php echo $user['gambar'] ?>">
                </div>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editprofile">
                    Edit Profile
                </button>
                <div class="info">
                    <div class="title">
                        <a target="_blank"><?php echo $user['name'] ?></a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher">
                        <i class="fab fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher">
                        <i class="fab fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Deva Apriana</a>
    </div>
    <!-- Copyright -->
</footer>


<!-- Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('user/editProfile'); ?>
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="name" class="form-control" id="fullname" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label for="gambar">Upload Image</label>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="<?php echo base_url('assets/img/') ?><?php echo $user['gambar']; ?>" alt="..." class="img-thumbnail">
                            </div>
                            <div class="col-md">
                                <input type="file" name="gambar" class="form-control-file" id="gambar">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>