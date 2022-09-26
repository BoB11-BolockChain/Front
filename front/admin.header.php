<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Pixel CSS -->
<link type="text/css" href="./css/neumorphism.css" rel="stylesheet">


<?php 

session_start();

?>


<html>
<body>
<header class="header-global">
    <nav id="navbar-main"  class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
        <div class="container position-relative">
            <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="./admin.index.php">
                <!-- <strong>PDxF</strong> -->
                <!-- <img class="navbar-brand-dark" src="./assets/img/brand/dark.svg" alt="Logo light"> -->
                <img class="navbar-brand-light" src="./assets/img/brand/PDxF_logo2.png" alt="Logo dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="./index.php" class="navbar-brand shadow-soft py-2 px-3 rounded border border-light">
                                <img src="./assets/img/brand/dark.svg" alt="logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <a href="#navbar_global" class="collapse fas fa-times" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" title="close" aria-label="Toggle navigation"></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                    <li class="nav-item">
                        <a href="#" onclick="location.href='./admin.index.php'" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Main</span>
                            <!-- <span class="fas fa-angle-down nav-link-arrow ml-2"></span> -->
                        </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">1</a></li>
                                <li><a class="dropdown-item" href="">2</a></li>
                            </ul> -->
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="location.href='./admin.ch.php'" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Challenges</span>
                            <!-- <span class="fas fa-angle-down nav-link-arrow ml-2"></span> -->
                        </a>
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./about.php">About</a></li>
                            <li><a class="dropdown-item" href="./contact.php">Contact</a></li>
                        </ul> -->
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="location.href='./admin.score.php'" class="nav-link" data-toggle="dropdown" >

                            <span class="nav-link-inner-text">DashBoard</span>
                            <!-- <span class="fas fa-angle-down nav-link-arrow ml-2"></span> -->
                        </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">1</a></li>
                                <li><a class="dropdown-item" href="">2</a></li>
                            </ul> -->
                    </li>
                    <li class="nav-item">
                        <a href="#" onclick="location.href='./admin.noti.php'"  class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Notification</span>
                            <!-- <span class="fas fa-angle-down nav-link-arrow ml-2"></span> -->
                        </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">1</a></li>
                                <li><a class="dropdown-item" href="">2</a></li>
                            </ul> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Admin</span>
                            <!-- <span class="fas fa-angle-down nav-link-arrow ml-2"></span> -->
                        </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./admin.q.manage.php">문제 관리</a></li>
                                <li><a class="dropdown-item" href="">사이트 관리</a></li>
                                <li><a class="dropdown-item" href="">사용자 관리</a></li>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a href="./user/logout.php" class="nav-link" data-toggle="dropdown" >
                            <span class="nav-link-inner-text">Logout</span>
                            
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center">
                <!-- <a href="" target="_blank" class="btn btn-primary text-secondary d-none d-md-inline-block mr-3"><i class="far mr-2"></i>Account</a> -->
                <a href="./account.php" target="_blank" class="btn btn-primary"><i class="fas"></i>Account</a>
                <button class="navbar-toggler ham_btn ml-2 collapsed" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
    
        </div>
    </nav>
</header>

<div id="side_bg" class="side_bg"></div>
<div id="sideNav" class="sideNav">
<a href="./admin.index.php">Main</a>
<a href="./admin.index.php">Main</a>
<a href="./admin.index.php">Main</a>
<a href="./admin.index.php">Main</a>
<a href="./admin.index.php">Main</a>
</div>
</body>


<style>

.side_bg{
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 1);
    position: absolute;
    top: 0;
    left: 0;
    display : none;
    /* z-index: 1; */
}

.sideNav{
    width: 0px;
    height: 100%;
    position : fixed;
    top: 0;
    right: 0;
    background: rgba(255, 255, 255, 1);
    overflow-x: hidden;
    z-index: 1;
}

.sideNav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    transition: 0.3s;
}

.sideNav a:hover {

}

.sideNav.on{
    right: 0;
}

</style>

<script>

const ham = document.getElementById("ham_btn");
const side = document.getElementById("sideNav");
const bg = document.getElementById("side_bg");

function openNav(){
    side.width = "300px";
}

function closeNav(){
    side.width = "0";
}


// ham.addEventListener("click", function(){
//     if(side.classList.contains("on")){
//         side.classList.remove("on");
//         bg.style.display = "none";
//     }else{
//         side.classList.add("on");
//         bg.style.display = "block";
//     }
// })

// bg.addEventListener("click", e => {
//     const evTarget = e.target
//     if(evTarget.classList.contains("side_bg")){
//         side.classList.remove("on");
//         bg.style.display = "none"
//     }
// })

</script>

</html>


