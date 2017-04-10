<!DOCTYPE html>
<html>
    <head>
        <title> Community | Facing Homelessness </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body onload='setup()'>
        <div class="overlay" id="overlay">
            <div class="close" onclick="closeOverlay()"> x </div>
            <div class="overlayContent">
                <div class='row'>
                    <div id="img"></div>
                    <div class='column'>
                        <div class="personDesc">
                            <div class="bold" id="name"></div>
                            <div id="homeContent"></div> 
                        </div>
                        <div class="navigation">
                            <a class="prev" onclick="prev()"> View Previous </a>
                            <a class="next" onclick="next()"> View Next </a>
                        </div>
                    </div>
                </div>
                <div id="quietThought" class='hidden-phone'>
                    A quiet thought: If you're moved by the goodness of this community, please visit the donation page, then select the 'recurring monthly' box and donate just $5 a month.
                </div>
            </div>
        </div> 
        <div class="container">
            <span class="button" id="menu" style="position: fixed; top: 10px; left: 20px; z-index: 200" onclick="toggleNav()"> menu </span>
            <div id="menu-items">
                <a href="../"> <div> home </div> </a>
                <a href="../getinvolved/"> <div> get involved </div> </a>
                <a href="../programs/"> <div> programs </div> </a>
                <a href="../donate"> <div> donate </div> </a>
                <a href="../community"> <div class="current"> community </div> </a>
                <!--<a href="../stories"> <div> stories </div> </a>-->
                <a href="../about"> <div> about </div> </a>
            </div>
            <div class="section">
                <div id="splash-screen" style="background-image:url('image.jpg');height: 100vh;" title='The Community'>
                    <div class="button" style="position: absolute; top: 10px; right: 20px;"> <a style='color: #fff !important;' href='../donate'>donate</a> </div>
                    <h1 id='text1' style="display:block;"> We are a modern village, where meaning is derived from relationships. </h1>
                </div>
            </div>
            <div class="section">
                <div class="section-content centered">
                    <?php
                        $dirs = array_filter(glob('*'), 'is_dir');
                        $count = 0;
                        foreach ($dirs as $dir) {
                            $count = $count + 1;
                            $images = glob($dir."/*.jpg");
                            $files = glob($dir.'/home.txt');
                            if ($dir[0] == 0)
                                $dir = $dir[1];
                            foreach ($images as $image) {
                                echo "<div class='card' onclick='showOverlay(".$dir.")'><div class='flipper'><div class='front' style='background-image: url(".$image.")' id='".$dir."'></div>";
                                echo "<div class='back'><p class='pname' id='".$dir."pname'>".basename($image, '.jpg')."</p><p class='biography' onclick='showOverlay(".$dir.")'> View </p> </div></div>";
                                foreach ($files as $file) {
                                    $myfile = fopen($file, 'r') or die('Unable to opne file!');
                                    echo "<div class='homeMeaning' id='".$dir."homeMeaning'>".fread($myfile, filesize($file)).'</div></div>';
                                    fclose($myfile);
                                } 
                            }
                        }
                        echo "<div class='noShow' id='noShow'>".$count."</div>";     
                    ?>
                </div>
            </div>
            <div class='section'>
                <div class='section-content' id='grateful'>
                    <h2> Grateful </h2>
                    <p> We are SO grateful to the organizations and teams that have contributed to the success of Facing Homelessness. Your commitment, expertise, and compassion inspire us and allow us to do the work we love. 
                    <br> <br>
                    Perkins Coie, The Cloud Room, Facebook, POSSIBLE, University Temple United Methodist Church, King 5, Turner Construction Company, Real Change, Chief Seattle Club, Zeeman Scott CPAs, FSi Consulting Engineers, Swenson Say Fagét, Herrera Environmental Consultants, Allworth Design, The University of Washington and the many classes and teams that have moved our work forward, Microsoft, Facing Homelessness Tech Team, Seattle GiveCamp Team - 2015 </p>
                </div>
            </div>
            <footer>
                <div class="footer-content">
                    <div class="site-map">
                        <span> 
                            <h4> <a href='../getinvolved/' style="color: #000 !important;">Get Involved</a> </h4>
                            <p> <a href='../getinvolved/#passionsAndSkills'>Passions and Skills</a> </p>
                        </span>
                        <span>
                            <h4> <a href='../programs/' style="color: #000 !important;">Programs</a> </h4>
                            <p> <a href='../programs/#photojournalism'>Photojournalism</a> </p>
                            <p> <a href='../programs/#theWindowofKindness'>The Window of Kindness</a> </p>
                            <p> <a href='../programs/#theBlockProject'>The BLOCK Project</a> </p>
                            <p> <a href='../programs/#theCitiesProject'>The Cities Project</a> </p>
                            <p> <a href='../programs/#justSayHello'>Just Say Hello</a> </p>
                        </span>
                        <span>
                            <h4> <a href='../donate/' style="color: #000 !important;">Donate</a> </h4>
                            <p> <a href='../donate/#donateFunds'>Donate Funds</a> </p>
                            <p> <a href='../donate/#donateSupplies'>Donate Supplies</a> </p>
                            <p> <a href='../donate/#dropOff'>Drop off hours</a> </p>
                        </span>
                        <span>
                            <h4> <a href='../community/' style="color: #000 !important;">Community</a> </h4>
                            <p> <a href='#grateful'>Grateful</a> </p>
                        </span>
                        <span>
                            <h4> <a href='../about/' style="color: #000 !important;">About</a> </h4>
                            <p> <a href='../about/#mission'>Mission</a> </p>
                            <p> <a href='../about/#history'>History</a> </p>
                            <p> <a href='../about/#media'>Media</a> </p>
                            <p> <a href='../about/#team'>Team</a> </p>
                            <p> <a href='../about/#officeHrs'>Office Hours</a> </p>
                        </span>
                    </div>
                    <div id="social">
                        <div id="social-content">
                            <h4 class="centered"> Follow us</h4>
                            <div class="social-icons"> 
                                <a class="fb" href="https://www.facebook.com/HomelessInSeattle/">
                                </a>
                                <a class="twitter" href="https://twitter.com/facinghomeless">
                                </a>
                                <a class="instagram" href="https://www.instagram.com/facinghomelessness/">
                                </a>
                                <a class="youtube" href="https://www.youtube.com/channel/UCrC2LQb6EI6ExlZlKPq70jQ">
                                </a>
                                <a class="tumblr" href="http://facing-homelessness.tumblr.com/">
                                </a>
                                <a class="google-plus" href="https://plus.google.com/+FacinghomelessnessOrg/posts">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id='copyright' style="width: 100%; margin-top: 10px; padding-top: 5px; border-top: 1px solid #626262;">
                        <span> &copy; 
                        <script>
                            var yr = new Date().getFullYear();
                            document.write(yr);
                        </script> 
                        | Facing Homelessness </span>
                        <span> <a href="tel:+1-206-632-7299"> 206.632.7299 </a> </span>
                        <span> <a href="mailto:info@facinghomelessness.org">info@facinghomelessness.org </a> </span>
                    </div>
                </div>
            </footer>
        </div>
        <script>
            var toggle = 0;
            var currentPerson = 1;
            var totalCount = 1;
            function setup() {
                totalCount = parseInt(document.getElementById('noShow').innerHTML);
            }
            function toggleNav() {
                if (toggle == 0) {
                    document.getElementsByTagName('body')[0].style.overflow = 'hidden';
                    document.ontouchmove = function (e) {
                        e.preventDefault();
                    }
                    document.getElementById("menu-items").style.opacity = "1";
                    document.getElementById("menu-items").style.visibility = "visible";
                    document.getElementById("menu").innerHTML = 'CLOSE';
                    toggle = 1;
                }
                else {
                    document.getElementsByTagName('body')[0].style.overflow = 'auto';
                    document.ontouchmove = function (e) {
                        return true;
                    }   
                    document.getElementById("menu-items").style.opacity = "0";
                    document.getElementById("menu-items").style.visibility = "hidden";
                    document.getElementById("menu").innerHTML = 'MENU';
                    toggle = 0;
                }
            }
            function showOverlay(id) {
                document.getElementsByTagName('body')[0].style.overflow = 'hidden';
                document.ontouchmove = function (e) {
                    e.preventDefault();
                }
                var overlay = document.getElementById('overlay');
                document.getElementById('name').innerHTML = document.getElementById(id + 'pname').innerHTML;
                document.getElementById('homeContent').innerHTML = document.getElementById(id + 'homeMeaning').innerHTML;
                document.getElementById('img').style.backgroundImage = document.getElementById(id).style.backgroundImage;
                overlay.style.display = 'block';
                currentPerson = id;
            }
            function closeOverlay() {
                document.getElementsByTagName('body')[0].style.overflow = 'auto';
                document.ontouchmove = function (e) {
                    return true;
                }
                document.getElementById('overlay').style.display = 'none';
            }
            function prev() {
                if (currentPerson > 1) {
                    currentPerson = currentPerson - 1;
                    showOverlay(currentPerson);
                }
            }
            function next() {
                if (currentPerson <  totalCount) {
                    currentPerson = currentPerson + 1;
                    showOverlay(currentPerson);
                }
            }
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-93837106-2', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>