<?php get_header(); ?>
    <div class="main">
        <div class="container">
            <div class="main-site-front shadow-lg p-3 mb-5">
                <h2>Welcome To Our Site</h2>
                <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum
                </p>
                <button type="button" class="btn btn-primary">
                    <a href="" style="color:#fff">Get Started</a>
                </button>
            </div>
            <div class="box-home">
                <h2>Home</h2>
                <p>Welcome to the homepage. This is an area for static text</p>
            </div>
        </div>
        <div class="box-container">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="box-title">
                            <h4>Box 1 Heading</h4>
                        </div>
                        <div class="box-body">
                            <p>
                                Lorem ipsum zarzavat, patrunjel
                                ipsel Lorem. Foaie verde si-o castana
                                Eu ma duc la marioara, poate-mi da si mie o
                                zeama. Lorep ipsum si-o castana.
                            </p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-title">
                            <h4>Box 2 Heading</h4>
                        </div>
                        <div class="box-body">
                            <p>
                                Lorem ipsum zarzavat, patrunjel
                                ipsel Lorem. Foaie verde si-o castana
                                Eu ma duc la marioara, poate-mi da si mie o
                                zeama. Lorep ipsum si-o castana.
                            </p>
                        </div>


                    </div>
                    <div class="col-4">
                        <?php include('widgets2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php get_footer(); ?>