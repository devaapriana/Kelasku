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

<div class="container-md shadow p-3 mb-5 centered  p-5" style="padding: 0; margin-top:0;border-radius:15px;">

    <?php
    $email = $this->session->userdata('email');
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`
``````````````FROM `user_menu` JOIN `user_acess_menu`
              ON `user_menu`.`id` = `user_acess_menu`.`menu_id`
              WHERE `user_acess_menu`.`role_id` = $role_id
              ORDER BY `user_acess_menu`.`menu_id` ASC";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>
    <img class="rounded-circle" src="<?php echo base_url('assets/'); ?>img/<?php echo $user['gambar']; ?>" alt="" style="max-width: 200px;max-height:200px;position:absolute;top:-100px;right:40%;">
    <br>

    <div class="row row-cols-4 mt-5" style="margin-top: 50px">

        <?php foreach ($menu as $m) : ?>
            <?php
            $menuID = $m['id'];
            $submenu = $this->db->get_where('user_sub_menu', ['menu_id' => $menuID])->result_array();

            ?>
            <?php foreach ($submenu as $sm) : ?>
                <div class="col">
                    <div class="card shadow p-3" style="padding-top: 5px;border-radius:15px;">
                        <img src="<?php echo base_url('assets/'); ?>img/<?php echo $sm['image'] ?>" class="card-img-top centered" alt="...">
                        <hr>
                        <div class="card-body">
                            <a href="<?php echo base_url(); ?><?php echo $sm['url'] ?>"><button class="btn-grad"><?php echo $sm['title'] ?></button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

</div>



<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar1.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar3.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar5.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-12 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar4.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar5.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4">

                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img src="<?php echo base_url('assets/'); ?>img/fotbar6.jpg" class="img-fluid" alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> Deva Apriana</a>
    </div>
    <!-- Copyright -->