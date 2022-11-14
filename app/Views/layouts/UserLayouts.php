
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP Pengaduan Masyarakat AlvitoD.</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/specimen/Kumbh+Sans -->
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/fontawesome/css/all.min.css">  <!-- https://fontawesome.com/-->  
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/css/magnific-popup.css">       <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/css/bootstrap.min.css">        <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/slick/slick.min.css">          <!-- https://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/slick/slick-theme.css">
    <link rel="stylesheet" href="<?=base_url()?>/../masyarakat/css/templatemo-upright.css">
</head>
<body>    
    <div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <?=$this->include('layouts/components/mainsidebar')?>
            
            <div class="tm-main">
                <!-- Home section -->
                <?=$this->renderSection('content')?>
                <!-- Contact section -->
                

                <!-- Copyright -->                
                <div class="tm-section-wrap tm-copyright row">
                    <div class="col-12">
                        <div class="text-right">
                            Copyright 2020 Upright Company
                        </div> 
                    </div>
                </div>                 
            </div> <!-- .tm-main -->                      
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script src="<?=base_url()?>/../masyarakat/js/jquery-3.4.1.min.js"></script>          <!-- https://jquery.com/ -->
    <script src="<?=base_url()?>/../masyarakat/js/jquery.singlePageNav.min.js"></script>  <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="<?=base_url()?>/../masyarakat/js/parallax/parallax.min.js"></script>     <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="<?=base_url()?>/../masyarakat/js/imagesloaded.pkgd.min.js"></script>     <!-- https://imagesloaded.desandro.com/ -->
    <script src="<?=base_url()?>/../masyarakat/js/isotope.pkgd.min.js"></script>          <!-- https://isotope.metafizzy.co/ -->
    <script src="<?=base_url()?>/../masyarakat/js/jquery.magnific-popup.min.js"></script> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <script src="<?=base_url()?>/../masyarakat/slick/slick.min.js"></script>              <!-- https://kenwheeler.github.io/slick/ -->
    <script src="<?=base_url()?>/../masyarakat/js/templatemo-script.js"></script>
    <?=$this->renderSection('script')?>
</body>
</html> 