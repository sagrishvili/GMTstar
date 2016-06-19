<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ECOSAVE BOOTSTRAP ENVIRONMENT TEMPLATE</title>
    <!--  Bootstrap Style -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
    <!--  Font-Awesome Style -->
    <link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet" />
    <!--  Animation Style -->
    <link href="<?php echo base_url('assets/css/animate.css');?>" rel="stylesheet" />
    <!--  Pretty Photo Style -->
    <link href="<?php echo base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet" />
    <!--  Google Font Style -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--  Custom Style -->
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="pre-div">
        <div id="loader">
        </div>
    </div>
    <!--/. PRELOADER END -->
    <div class="navbar navbar-default navbar-fixed-top move-me ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <p style="color:green;">GMTstar</p>

                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">

                    <li >
                        <a href="#home">მთავარი 

                        </a>

                    </li>
                    <li >
                        <a href="#about">ჩვენს შესახებ

                        </a>

                    </li>


                    <li >
                        <a href="#contact">კონტაქტი 
                        </a>

                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--./ NAV BAR END -->
    <div id="home" >
        <div class="overlay">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-9 col-md-9 head-text">

                        <div class="div-trans text-center">


                            <h3>ავტორიზაცია</h3>
                            <div class="col-lg-12 col-md-12 col-sm-12" >

                           <form action="<?php echo base_url('index.php/main/login'); ?>" method="post">
                                <div class="form-group">
                                    <input type="email" name="maili" class="form-control" required="required" placeholder="ელექტრონული ფოსტა">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" required="required" placeholder="პაროლი">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-lg">ავტორიზაცია</button>
                                </div>
                             </div>
                             </form>


                              <h2 ><i class="fa fa-code" ></i><span >გაიარეთ ავტორიზაცია ან რეგისტრაცია</span>  <i class="fa fa-code"></i></h2>

                        </div>







                        
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="div-trans text-center">


                            <h3>რეგისტრაცია</h3>
                            <h3 ><i class="fa fa-code" ></i><span >STARTUP</span>  <i class="fa fa-code"></i></h3>

<script>
function validateForm() {
    var x = document.forms["myForm"]["idnumb"].value;
    if (x == null || x.length < 11) {
        alert("Name must be filled out");
        return false;
    }
}
</script>

                            <form action="" method="post" name="myForm" onsubmit="return validateForm()">
                           
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="სახელი გვარი" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" required="required" placeholder="ელექტრონული ფოსტა" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="პირადი ნომერი" name="idnumb">
                                </div>
                                 <div class="form-group">
                                    <input type="date" class="form-control" required="required"  name="date">
                                </div>
                                 <div class="form-group">
                                    <input type="password" class="form-control" required="required" placeholder="პაროლი" name="pass">
                                </div>
                                 <div class="form-group">
                                    <input type="password" class="form-control" required="required" placeholder="გაიმეორეთ პაროლი" name="passw">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block btn-lg">რეგისტრაცია</button>
                                </div>

                                </form>
                             

                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    <!--./ HOME SECTION END -->











    <div id="about" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head">
                    <h2  data-wow-delay="0.3s" class="wow rollIn animated" ><strong>ჩვენს შესახებ</strong></h2>
                    <p class="sub-head">ჩვენს საიტზე სტარტაპებს ექნებათ შესაძლებლობა დარეგისტრირდნენ და დაუკავშირდნენ სპონსორებს </p>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4">
                    <div class="media wow rotateIn animated" data-wow-delay="0.2s">
                        <div class="pull-left">
                            <i class="fa fa-recycle fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">საიტის მიზანი</h3>
                            <p >
                                ჩვენი მიზანია, ჩვენი სერვისი გავხადოთ ყველასათვის ხელმისაწვდომი, რათა თითოეულ ადამიანს ჰქონდეს შესაძლებლობა თავისი იდეა გადააქციოს უდიდესი მოგების მომტან იდეად 
                            </p>

                        </div>
                    </div>
                    <div class="media wow rotateIn animated" data-wow-delay="0.3s">
                        <div class="pull-left">
                            <i class="fa fa-history fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">სტარტაპები</h3>
                            <p>
                                სტარტაპის იდეა კომპანიას გაეგზავნება შეტყობინების სახით. აღნიშნულ შეტყობინებას თან დაერთვება ორი ფუნქცია: დასტურისა და უარყოფის. დასტურის შემთხვევაში სპონსორის დადებით პასუხი ავტომატურად გაეგზვანება სტარტაპ ორგანიზაციას და დაიწყება მათ შორის კომუნიკაცია.. 
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 wow bounceInDown animated" style="padding: 10px;" data-wow-delay="0.6s"   >
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="item">

                                <img src="<?php echo base_url('assets/img/slider/1.jpg');?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('assets/img/slider/2.png');?>" class="img-thumbnail" alt="">
                            </div>
                            <div class="item active">
                                <img src="<?php echo base_url('assets/img/slider/3.jpg');?>" class="img-thumbnail" alt="">
                            </div>
                        </div>
                        <!--INDICATORS-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-slider" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-slider" data-slide-to="2" class="active"></li>
                        </ol>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4">

                    <div class="media wow rotateIn animated" data-wow-delay="0.4s">
                        <div class="pull-left">
                            <i class="fa fa-star-o fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">სპონსორები</h3>
                            <p>
                               საიტზე დარეგისტრირებული იქნება დიდი კომპანიები და სპონსორები, რომლებსაც სურვილი აქვს დააფინანსონ მატტვის საი ნტერესო იდეები.

                        </div>
                    </div>
                    <div class="media wow rotateIn animated" data-wow-delay="0.5s">
                        <div class="pull-left">
                            <i class="fa fa-life-ring fa-4x  "></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">ანდროიდ აპლიკაცია</h3>
                            <p>
                                გვექნება მესინჯერის აპლიკაციაც, რასაც გადმოიწერენ სტარტაპები და სპონსორები, რომელთაც ეს აპლიკაცია გაუადვილებს კომუნიკაციას, მაშინ როდესაც არ ექნებათ კომპიუტერთან წვდომა. 
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row pad-top-botm wow flipInX animated" data-wow-delay="0.7s">
                <div class="col-lg-8 col-md-8 col-sm-8 " >

                    <h3><strong>რატომ უნდა გამოიყენო ვენი ვებგვერდი?? ?</strong></h3>
                    <p>
                       ჩვენი ვებგვერდი  ამარტივებს სტარტაპებსა და კომპანიებს შორის კავშირს და სახლიდან გაუსვლელად შეგიზლია მიიღო დაპინანსება საკუთარ პროექტზე

                    </p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center" >
                    <i class="fa fa-lightbulb-o big-icon "></i>


                </div>

            </div>
        </div>
    </div>
    <!--./ ABOUT SECTION END -->



    <div id="contact" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 data-wow-delay="0.3s" class="wow rollIn animated"><strong>დაგვიკავშირდით </strong>

                    <p class="sub-head  wow rotateIn animated" data-wow-delay="0.4s"><strong>ADDRESS :</strong> ...  
                    Email: info@gmtstar.com</p>
                </div>
            </div>
            <div class="row  text-center wow rotateIn animated" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <a href="#">  <img src="<?php echo base_url('assets/img/Social/facebook.png');?>" alt="" /> </a>
                     <a href="#"> <img src="<?php echo base_url('assets/img/Social/google-plus.png');?>" alt="" /></a>
                     <a href="#"> <img src="<?php echo base_url('assets/img/Social/twitter.png');?>" alt="" /></a>
                    </div>
                </div>
            <div class="row pad-top-botm">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control wow rotateIn animated" data-wow-delay="0.5s" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wow rotateIn animated" required="required" data-wow-delay="0.6s" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message"  required="required" data-wow-delay="0.7s" class="wow rotateIn animated form-control" style="min-height: 150px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block btn-lg wow rotateIn animated " data-wow-delay="0.8s">გაგზავნა</button>
                        </div>

                    </form>
                </div>

            </div>
            
        </div>
    </div>
    <!--./ CONTACT SECTION END -->
    <div id="footser-end">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                 &copy; 2016   created by/g.sagrishvili/t.qashibadze <a href="#" style="color:#fff;" target="_blank" >ATSUhack</a>
                </div>
            </div>

        </div>
    </div>
    <!--./ FOOTER SECTION END -->
    <!--  Jquery Core Script -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <!--  Core Bootstrap Script -->
    <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
     <!--  WOW Script -->
    <script src="<?php echo base_url('assets/js/wow.min.js');?>"></script>
    <!--  Scrolling Script -->
    <script src="<?php echo base_url('assets/js/jquery.easing.min.js');?>"></script>
    <!--  PrettyPhoto Script -->
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
    <!--  Custom Scripts -->
    <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
   
</body>
</html>
