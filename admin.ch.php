<?php require_once ('./admin.header.php'); 
    $DB = new SQLite3('./maindb.db');
    $query = $DB->query("SELECT * FROM challenges;");
?>

<section class="section section-lg pb-5 z-2 bg-soft">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2 mb-3 text-center">
                <h3 class="h5">Challenges</h3>
            </div>
        </div>
        <div class="row justify-content-between">
            <?php while($rows = $query->fetchArray(SQLITE3_ASSOC)){?>
            <div class="col-12 col-md-5 col-lg-4 mb-6 mb-md-5">
                <div class="btn-info-sj card bg-primary shadow-soft border-light text-center" id="<?php echo $rows['num'];?>">
                    <div class="text-center pt-2 pb-2"><?php echo $rows['title']; ?></div>
                    <div>
                        <p><?php echo $rows['desc']; ?></p>
                        <p><?php echo $rows['score']; ?>점</p>
            </div>
            </div>
            </div><?php $ch_count += 1; } ?>

            <!-- <div class="col-12 col-md-5 col-lg-4 mb-6 mb-md-5">
                <div class="card bg-primary shadow-soft border-light text-center">
                    <div class="pb-5"></div>
                    <div class="pb-5"></div>
                </div>
            </div> -->
        </div>
<style>
    .info-overlay{
    display: none;
    width:100%;
    height:100%;
    position: absolute;
    left: 0;
    top: 0;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    background: rgba(255, 255, 255, 0.4);
    }

    /* .info-window{
        position: relative;
        align-items: center;     
    } */
</style>
        

</div>


    <div id="info" class="info-overlay">
            <div class="col-12 col-md-6">
                <div class="card bg-primary shadow-soft text-center border-light">
                    <div class="card-header">
                        <span class="card-text stmall"></span>
                    </div>
                    <div class="card-body">
                        <h3 id="sj-try">hi</h3>
                        <p id="sj-try2">test</p>
                        <div id="training_info">
                            <form id="training_start" action="admin.ch.php" method="POST">
                                <input type="hidden" name="training_num">
                                <button id="start" class="btn btn-primary" type="submit">훈련 시작</button>
                            </form>
                        </div>
                        <div id="ssh_info"></div>
                        <div id="http_info"></div>
                    </div>
                    <div class="card-footer">
                        <span id="sj-try3">hihihi</span>
                    </div>
                </div>
            </div>
        </div>
</section>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

// function select_title($count) {
//         $database = new SQLite3('./maindb.db');
//         $info_query = $database->query("SELECT * FROM challenges WHERE num=$count;");
//         while($info_row = $info_query->fetchArray(SQLITE3_ASSOC)) {
//             return $info_row['title'];
//         }
//     }
$(document).ready(function(){
$('.btn-info-sj').click(function(){
var click_id = $(this).attr("id");
<?php
    $info_query = $database -> query("SELECT * FROM challenges WHERE num=$count;");
    while($info_row = $info_query -> fetchArray(SQLITE3_ASSOC)) { ?>
            var title = $info_row['title'];
            var desc = $info_row['desc'];
            var score = $info_row['score'];
            var os = $info_row['os'];
            document.getElementById("sj-try").innerHTML = title;
       <?php } ?>
});
});

</script>

<?php require_once ('./admin.footer.php') ?>

<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="./css/neumorphism.css" rel="stylesheet">
<script type="text/javascript" src="./css/event.js"></script>
<script src="./vendor/jquery/dist/jquery.min.js"></script>
<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./vendor/headroom.js/dist/headroom.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
<script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>
<script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>
<script src="./vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="./vendor/prismjs/prism.js"></script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="./css/neumorphism.js"></script>
<?php
        function port_scan($ssh, $http) {
            system("netstat -tnlp | grep $ssh", $port_check);
            system("netstat -tnlp | grep $http", $port_check2);
            if ($port_check == '1' && $port_check2 == '1') {
                return 1;
            } else {
                return -1;
            };
        }
        if(isset($_POST['training_num'])){
            echo "<script>document.getElementById('training_info').innerText ='접속정보';</script>";
            echo "<script>document.getElementById('training_start').style.display='none';</script>";
            echo "<script>document.getElementsByClassName('btn-info-sj')[0].click();</script>";
            do {
              $rand_port_ssh = rand(10000, 65530);
              $rand_port_http = $rand_port_ssh + 1;
            } while (port_scan($rand_port_ssh, $rand_port_http) != 1);
    
            $docker_run = "docker run -d -p $rand_port_ssh:22 -p $rand_port_http:80 test:0.1";
            exec($docker_run, $docker_id);
            $ssh_info = "ssh: " . $_SERVER['SERVER_ADDR'] . ":" . $rand_port_ssh . " /  id: root, pw: root";
            $http_info = "http://" . $_SERVER['SERVER_ADDR'] . ":" . $rand_port_http;
            echo "<script>document.getElementById('ssh_info').innerText ='" . $ssh_info . "';</script>";
            echo "<script>document.getElementById('http_info').innerText ='" . $http_info . "';</script>";
        }
    ?>