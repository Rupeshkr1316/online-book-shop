<?php
session_start();
include('head_meenu.php');
?>
<style>
    .contact-us-info1 ul {
        margin-top: 11px;
        border: 1px solid #bdbdbd;
    }

    li {
        display: list-item;
        text-align: -webkit-match-parent;
    }

    .contact-us-info1 ul li {
        list-style: none;
        margin-left: 20px;

    }

    ul {

        margin: 0;
        padding: 0;
    }

    ol,
    ul {
        margin-top: 0;
        margin-bottom: 10px;
    }
</style>
<div id="wrapper">
    <!-- Header Area Start Here -->
    <!-- Header Area End Here -->
    <!-- Inner Page Banner Area Start Here -->
    <div class="inner-page-banner-area" style="background:url(slider/contact.jpg); padding-bottom:50px;">
        <div class="container">
            <div class="pagination-area">
                <h1>Contact Us</h1>
                <p style="font-size:18px; color:#FFF;"><span><a href="index.php">Home</a></span>&nbsp;&nbsp;&nbsp;<span><a href="index.php">Contact</a></span>
                    </ul>
            </div>
        </div>
    </div>
    <!-- Inner Page Banner Area End Here -->
    <!-- Contact Us Page 1 Area Start Here -->
    <div class="contact-us-page1-area" style="border:1px solid #CCCCCC">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-us-info1">
                        <ul>
                            <li>

                                <h3> <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<strong>Phone</strong></h3>
                                <p>9955722781</p>
                            </li>
                            <li>

                                <h3> <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <strong>Address</strong></h3>
                                <p>
                                    House no- 156, Ashok Rajpath Road Patna , Bihar 800006</p>
                            </li>
                            <li>

                                <h3><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;<strong>E-mail</strong></h3>
                                <p>onlinebookshop@gmail.com</p>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="contact-form1">
                            <form id="contact-form">
                                <fieldset>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                            <button type="submit" class="default-big-btn">Send Message</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                        <div class='form-response'></div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    <!-- Contact Us Page 1 Area End Here -->
    <!-- Footer Area Start Here -->
    <?php include('comman_footer.php'); ?>
    <!-- Footer Area End Here -->