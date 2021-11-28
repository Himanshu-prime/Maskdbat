<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Gym</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@4.7.0/css/fontawesome.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.css"> -->
    <script src="https://kit.fontawesome.com/2e94a1d01a.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="header">
        <nav >
            <a ><img src="img/log.png"></a>

            <div class="links" id="dlinks">
                <!-- <div class="con"><i class="far fa-times-circle" onclick="hidemenu()"></i></div> -->
                <ul id="navlist">
                    <li><a id="btn1">Home</a></li>
                    <li><a id="btn2">About us</a></li>
                    <li><a id="btn3">contact</a></li>
                    <li><a id="btn4">Map</a></li>
                    <li><div class="admin"><a href="admin.php"><i class="fa fa-wrench" aria-hidden="true"></i></a></div></li>
                </ul>
            </div>
        </nav>
        <video id="vbg" poster="pstr.png" autoplay muted loop><source src="gym.webm" type="video/webm">

        </video>
        <div class="try">
            <h1>Mask-Debat Gym</h1>
            <p>
                The difference between wanting and achieving is discipline</p>
            <a id="btn5" class="btn">Visit us</a>
        </div>
    </section>
    <section class="sec">
        <h1>Facilities</h1>
        <div class="fac">
            <div class="col1">
                <h3>cardio</h3>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint quo laudantium impedit cumque!
                    Vitae nobis quam aperiam ad iste fugiat rerum sit eum pariatur, tempora eligendi ut voluptatem
                    cupiditate.</p>
            </div>
            <div class="col11">
                <h3>cross-fit</h3>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint quo laudantium impedit cumque!
                    Vitae nobis quam aperiam ad iste fugiat rerum sit eum pariatur, tempora eligendi ut voluptatem
                    cupiditate.</p>
            </div>
            <div class="col111">
                <h3>zumba</h3>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint quo laudantium impedit cumque!
                    Vitae nobis quam aperiam ad iste fugiat rerum sit eum pariatur, tempora eligendi ut voluptatem
                    cupiditate.</p>
            </div>
        </div>
        <div class="fac2">
            <div class="col2">
                <h3>weights</h3>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint quo laudantium impedit cumque!
                    Vitae nobis quam aperiam ad iste fugiat rerum sit eum pariatur, tempora eligendi ut voluptatem
                    cupiditate.</p>
            </div>
            <div class="col22">
                <h3>yoga</h3>
                <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sint quo laudantium impedit cumque!
                    Vitae nobis quam aperiam ad iste fugiat rerum sit eum pariatur, tempora eligendi ut voluptatem
                    cupiditate.</p>
            </div>

        </div>

    </section>
    <section class="memb">
        <div class="form">
            <form class="ent" action="" method="post" >
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Phone" name="phn">
                <input type="text" placeholder="E-Mail" name="email">
                <input type="text" placeholder="city" name="city">
                <button class="btn" id="btn6" name="submt" >Submit</button>
            </form>
            <div>
                <img class="mage" src="img/mem.jpg">
            </div>
        </div>

    </section>
    <section class="last">
        <div class="map">
            <iframe class="m"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.3458026701296!2d73.78516851439161!3d18.64847218733457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9ce41650fc9%3A0xebb89f103d3a7aec!2sGolds%20Gym%20PCMC%20Akurdi!5e0!3m2!1sen!2sin!4v1636099195289!5m2!1sen!2sin"
                width="430" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="texts">
            <h2>Join us soon</h2>
            <div class="icons" style="font-size: 40px;">
                <ul>
                <li><a href="Home"><i class="fab fa-instagram" ></i></a></li>
                <li><a href="Home"><i class="fab fa-facebook-square" ></i></a></li>
                <li><a href="Home"><i class="fab fa-google" ></i></a></li>
                <li><a href="Home"><i class="fab fa-linkedin" ></i></a></li>
            </ul>
        </div>

    </section>
    <script>

        var links = document.getElementById("dlinks");
        function showmenu() {
            dlinks.style.right = "0";
        }
        function hidemenu() {
            dlinks.style.right = "-200px";
        }


        document.getElementById("btn1").addEventListener("click",scrollwin);
        document.getElementById("btn2").addEventListener("click",scrollwin2);
        document.getElementById("btn3").addEventListener("click",scrollwin3);
        document.getElementById("btn4").addEventListener("click",scrollwin4);
        document.getElementById("btn5").addEventListener("click",scrollwin5);
       
        function scrollwin(){
            window.scrollTo({top:0,behavior:"smooth"});
        }
        function scrollwin2(){
            window.scrollTo({top:720,behavior:"smooth"});
        }
        function scrollwin3(){
            window.scrollTo({top:1440,behavior:"smooth"});
        }
        function scrollwin4(){
            window.scrollTo({top:2160,behavior:"smooth"});
        }
        function scrollwin5(){
            window.open('https://www.google.com/maps/dir/18.7318744,73.6653824/Golds+Gym+PCMC+Akurdi,+2nd+Floor,+Star+Bazar+Mall,+Star+Bazar+Road,+Akurdi,+opposite+to+Cotton+Greaves+Ltd,+Pune,+Maharashtra+411035/@18.698469,73.6827648,12.54z/data=!4m10!4m9!1m1!4e1!1m5!1m1!1s0x3bc2b9ce41650fc9:0xebb89f103d3a7aec!2m2!1d73.7873506!2d18.6484772!3e0?hl=en');
        }
        window.addEventListener("scroll",function(event){
        var scroll=this.scrollY;
        if(scroll>1400)
        {
            document.querySelector("nav").style.background="white";
        }
        else
        {
            document.querySelector("nav").style.background="transparent";
        }
    });
    window.addEventListener("scroll",function(event){
        var scrolll=this.scrollY;
        if(scrolll<682)
        {
            document.querySelector("links").style.color="white";
        }
        else
        {
            document.querySelector("links").style.color="black";
        }});

    </script>
</body>

</html>


<?php
// header('location:index.html');

$servername="localhost";
$username="root";
$password="";
$dbname="let";

    $conn=mysqli_connect($servername,$username,$password,$dbname);


// if($conn){
//     echo"connected";
// }
// else{
//     echo"not conn";
// }
if(isset($_POST['submt'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['city']) && !empty($_POST['phn'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $phon=$_POST['phn'];

    $qurey =" INSERT INTO `form` (`Name`, `email`, `city`, `phone number`) VALUES('$name', '$email', '$city','$phon');";
    $run=mysqli_query($conn,$qurey);
    
}
else{
    echo"no";
}

    }
?>