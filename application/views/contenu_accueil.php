<section class="bg-light">  
    <div class="container py-5">
        <div class="row">
            <?php if(isset($article)) {
            for($i=0;$i<count($article);$i++) {?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>">
                        <img src="<?php echo $article_image[$i] ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>" class="h3 text-decoration-none text-dark"><?php echo $article[$i]['titre']; ?></a>
                        <hr>
                        <p class="afficherDesc">
                        <?php echo $article[$i]['texte']; ?>
                        </p>
                        <p class="text-muted">Isan ny nijery(<?php echo $article[$i]['visites']; ?>)</p>
                    </div>
                    <p class="text-center"><a href="<?php echo site_url("controller/ficheArticle?id=".$article[$i]['idcontenu']."&type=article");?>" class="btn btn-success">Hamaky ny tohiny</a></p>
                </div>
            </div>
            <?php }}?>
            <?php if(isset($artCateg)) {
            for($i=0;$i<count($artCateg);$i++) {?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo site_url("controller/ficheArticle?id=".$artCateg[$i]['idcontenu']."&type=article");?>">
                        <img src="<?php echo $imgArt[$i] ?>" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="<?php echo site_url("controller/ficheArticle?id=".$artCateg[$i]['idcontenu']."&type=article");?>" class="h3 text-decoration-none text-dark"><?php echo $artCateg[$i]['titre']; ?></a>
                        <hr>
                        <p class="afficherDesc">
                        <?php echo $artCateg[$i]['texte']; ?>
                        </p>
                        <p class="text-muted">Isan ny nijery(<?php echo $artCateg[$i]['visites']; ?>)</p>
                    </div>
                    <p class="text-center"><a href="<?php echo site_url("controller/ficheArticle?id=".$artCateg[$i]['idcontenu']."&type=article");?>" class="btn btn-success">Hamaky ny tohiny</a></p>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</section>
    <br>
    <br>
    <!-- <h2 class="h2">Ny Boky </h2> -->
    <hr>
    <br>
    <br>
<div class="row">
    <?php if(isset($livre)) {
    for($i=0;$i<count($livre);$i++) {?>
    <div class="col-md-4">   
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo $livre_image[$i]; ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>" class="h3 text-decoration-none"><?php echo $livre[$i]['titre']; ?></a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheLivre?id=".$livre[$i]['idcontenu']."&type=livre"); ?>">Hijery</a></p>
            </div>
        </div>
    </div>
    <?php }}?>
    <?php if(isset($livreCateg)) {
    for($i=0;$i<count($livreCateg);$i++) {?>
    <div class="col-md-4">   
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0">
                <a href="<?php echo site_url("controller/ficheLivre?id=".$livreCateg[$i]['idcontenu']."&type=livre"); ?>"><img class="card-img rounded-0 img-fluid" src="<?php echo $imgLivre[$i]; ?>"></a>
                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled">
                        <li><a class="btn btn-success text-white mt-2" href="<?php echo site_url("controller/ficheLivre?id=".$livreCateg[$i]['idcontenu']."&type=livre"); ?>"><i class="far fa-eye"></i></a></li>
                    </ul>
            </div>    
            </div>
            <div class="card-body">
                <p style="text-align:center" ><a href="<?php echo site_url("controller/ficheLivre?id=".$livreCateg[$i]['idcontenu']."&type=livre"); ?>" class="h3 text-decoration-none"><?php echo $livreCateg[$i]['titre']; ?></a></p>
                <br>
                <p style="text-align:center"><a class="btn btn-success" href="<?php echo site_url("controller/ficheLivre?id=".$livreCateg[$i]['idcontenu']."&type=livre"); ?>">Hijery</a></p>
            </div>
        </div>
    </div>
    <?php }}?> 
</div>
<br>
<hr>
<br>
<br>
<div class="row">
    <?php if(isset($video)) {
    for($i=0;$i<count($video);$i++) {?>
    <div class="col-md-4">  
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"> 
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls="true" class="embed-responsive-item">
                        <source src="<?php echo site_url('assets/video/'.$video[$i]['video']); ?>" type="video/mp4" />
                    </video>
                </div>
            </div>    
        </div>
        <div class="card-body">
            <p style="text-align:center" class="h3 text-decoration-none" ><?php echo $video[$i]['titre']; ?></p>
            <!-- <span  class="publiedBy">Publié par Jean  </span>     -->
        </div>
    </div>
    <?php }}?>
    <?php if(isset($videoCateg)) {
    for($i=0;$i<count($videoCateg);$i++) {?>
    <div class="col-md-4">  
        <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"> 
                <div class="embed-responsive embed-responsive-16by9">
                    <video controls="true" class="embed-responsive-item">
                        <source src="<?php echo site_url('assets/video/'.$videoCateg[$i]['video']); ?>" type="video/mp4" />
                    </video>
                </div>
            </div>    
        </div>
        <div class="card-body">
            <p style="text-align:center" class="h3 text-decoration-none" ><?php echo $videoCateg[$i]['titre']; ?></p>
            <!-- <span  class="publiedBy">Publié par Jean  </span>     -->
        </div>
    </div>
    <?php }}?>
</div>