<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Register :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Register</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="<?php echo base_url('auth/registration'); ?>" method="post">
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        <?php echo form_error('name', '<small class= "text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter email">
                        <?php echo form_error('email', '<small class= "text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <?php echo form_error('password', '<small class= "text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label>Repeat Password</label>
                        <input type="password" name="password1" class="form-control">
                        <?php echo form_error('password1', '<small class= "text-danger pl-3">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Register</button>
                </form>
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="<?php echo base_url('auth'); ?>">Back to Home</a>
                </h1>
            </div>


        </div>
    </div>