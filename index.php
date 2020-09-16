<?php require 'data.php';?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title><?php echo TITLE; ?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Resume of Muhd Amirul Hakim Zailan.">
    <meta name="author" content="Amirul Hakim">
    <link rel="shortcut icon" href="<?php echo favicon; ?>">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Theme CSS -->
    <link type="text/css" id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="wrapper">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img class="profile" src="<?php echo PROFILEPIC; ?>" alt=""/>
                <h1 class="name"><?php echo USERNAME; ?></h1>
                <h3 class="tagline"><?php echo TAGLINE; ?></h3>
            </div><!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa fa-envelope"></i><a href="mailto: <?php echo email; ?>"><?php echo email; ?></a></li>
                    <li class="phone"><i class="fa fa-phone"></i><a href="tel:<?php echo phone; ?>"><?php echo phone; ?></a></li>
                    <?php if (!empty(exclass)) {?>
                        <?php for ($i = 0; $i < count(exclass); $i++) {?>
                            <li class="<?php echo exclass[$i]; ?>"><i class="<?php echo exfa[$i]; ?>"></i><a href="<?php echo exlink[$i]; ?>" target="_blank"><?php echo extext[$i]; ?></a></li>
                        <?php }?>
                    <?php }?>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                <?php if (!empty(edutitle)) {?>
                    <?php for ($i = 0; $i < count(edutitle); $i++) {?>
                        <div class="item">
                            <h4 class="degree"><?php echo edutitle[$i]; ?></h4>
                            <h5 class="meta"><?php echo eduplace[$i]; ?></h5>
                            <div class="time"><?php echo edutime[$i]; ?></div>
                        </div>
                    <?php }?>
                <?php }?>
            </div><!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <?php if (!empty(langtitle)) {?>
                        <?php for ($i = 0; $i < count(langtitle); $i++) {?>
                            <li><?php echo langtitle[$i]; ?> <span class="lang-desc"><?php echo langdesc[$i]; ?></span></li>
                        <?php }?>
                    <?php }?>
                </ul>
            </div><!--//interests-->

            <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <?php if (!empty(interest)) {?>
                        <?php for ($i = 0; $i < count(interest); $i++) {?>
                            <li><?php echo interest[$i]; ?></li>
                        <?php }?>
                    <?php }?>
                </ul>
            </div><!--//interests-->

        </div><!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title"><i class="fa fa-user"></i>Objective</h2>
                <div class="summary">
                    <p align="justify"><?php echo objective; ?></p>
                </div><!--//summary-->
            </section><!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><i class="fa fa-briefcase"></i>Experiences</h2>

                <?php if (!empty(jobtitle)) {?>
                    <?php for ($i = 0; $i < count(jobtitle); $i++) {?>
                        <div class="item">
                            <div class="meta">
                                <div class="upper-row">
                                    <h3 class="job-title"><?php echo jobtitle[$i]; ?></h3>
                                    <div class="time"><?php echo jobtime[$i]; ?></div>
                                </div><!--//upper-row-->
                                <div class="company"><?php echo jobcompany[$i]; ?></div>
                            </div><!--//meta-->
                            <div class="details">
                                <p><?php for ($j = 0; $j < count(jobdesc[$i]); $j++) {?>
                                    <li><?php echo jobdesc[$i][$j]; ?></li>
                                    <?php }?>
                                </p>
                            </div><!--//details-->
                        </div><!--//item-->
                    <?php }?>
                <?php }?>
            </section><!--//section-->

            <section class="section projects-section">
                <h2 class="section-title"><i class="fa fa-archive"></i>Projects</h2>
                <div class="intro">
                    <p>Below is list of my current & past project that have been done personally</p>
                </div><!--//intro-->
                <?php if (!empty(projectname)) {?>
                    <?php for ($i = 0; $i < count(projectlink); $i++) {?>
                        <div class="item">
                            <span class="project-title"><a href="<?php echo projectlink[$i]; ?>" target="_blank"><?php echo projectname[$i]; ?></a></span> - <span class="project-tagline"><?php echo projecttagline[$i]; ?></span>
                        </div><!--//item-->
                    <?php }?>
                <?php }?>
            </section><!--//section-->

            <section class="skills-section section">
                <h2 class="section-title"><i class="fa fa-rocket"></i>Skills &amp; Proficiency</h2>
                <div class="skillset">
                    <?php if (!empty(skilltitle)) {?>
                        <?php for ($i = 0; $i < count(skilltitle); $i++) {?>
                            <div class="item">
                                <h3 class="level-title"><?php echo skilltitle[$i]; ?></h3>
                                <div class="level-bar">
                                    <div class="level-bar-inner" data-level="<?php echo skilllevel[$i]; ?>">
                                    </div>
                                </div><!--//level-bar-->
                            </div><!--//item-->
                        <?php }?>
                    <?php }?>
                </div>
            </section><!--//skills-section-->

        </div><!--//main-body-->
    </div>

    <footer class="footer">
        <div class="text-center">
                <!-- <p><i class="fa fa-print"></i> Print or download this Resume as PDF <a href="to-pdf.php"><strong>here</strong></a></p> -->
                <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers. <?php echo selflink; ?></small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>

