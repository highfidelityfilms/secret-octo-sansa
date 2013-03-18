<!-- Page Content
    ================================================== -->
<div class="row">

    <!-- Gallery Items
    ================================================== -->
    <div class="span12 gallery-single">

        <div class="row">
            <div class="span6">
                <img src="<?php echo $film[0]['poster_big']  ?>"  width="321" height="520" class="thumbnail" alt="image">
            </div>
            <div class="span6">
                <h2><?php echo $film [0]['title']  ?></h2>
                <p class="lead">Synopsis</p>
                <p><?php echo $film [0]['synopsis']  ?></p>

                <ul class="project-info">
                    <li><h6>Year:</h6> <?php echo $film [0]['year']  ?></li>
                    <li><h6>Runtime:</h6> <?php echo $film [0]['runtime']  ?></li>
                    <li><h6>Actors:</h6> Not Set</li>
                    <li><h6>Director:</h6> Not Set</li>
                    <li><h6>RAting:</h6> <?php echo $film [0]['audience_score']  ?></li>
                </ul>

                <a href="/" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a>
            </div>
        </div>

    </div><!-- End gallery-single-->

</div><!-- End container row -->

</div> <!-- End Container -->
