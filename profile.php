<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="assets/font-awesome/cssf/font-awesome.min.css">

    </head>
    <body>
        <div class="container-fluid" id="profile">
            <div class="container">
                <div class="row content">
                    <div class=" col-md-9">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="img/dummy.png" alt="..." class="img-circle img-responsive">
                                
                            </div>
                            <div class="col-md-9">
                                <!--info about man-->
                                <h2 class="text-uppercase">person name <a href="change_profile.php">

            <!--change-profile link-->
                                 <i class="fa fa-pencil-square-o" aria-hidden="true" style="float: right;"></i></a>
                                </h2>
                                <p>No discription is available</p>
                                <!--Table about planted absorbed participated;-->
                                <table class=" table" style=" border-top-style:hidden;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>0</b>
                                                Seed Planted
                                            </td>
                                            <td>
                                                <b>0</b>
                                                kg CO
                                                <sub>2</sub>
                                                Absorbed
                                            </td>
                                            <td> Participated</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
<!--button for invest-->
                                <div class="text-left">
                                    <a type="button" class="btn btn-success btn-lg" href="#">Invest in a crop</a>
                                    
                                    <!-- <a type="button" class="btn btn-success btn-lg btn-block">Invest in a crop</a> -->
                                </div>
                            </div>
                        </div>
                        <!--penting part-->
                        <div class="row penting">
                            <h2 class="text-center text-capitalize">
                            Pending Payment
                            </h2>
                            <hr>
                            <div class="col-md-6">
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <img class="media-object image-responsive" src="img/avo.jpg" alt="Generic placeholder image">
                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Avokado</a></h3>
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp <a href = "#">Tanjung Lesung Agropolis</a>
                                            <br>
                                        <i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp Payment Pending</p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>

                        <!--pending payment right part-->
                        <div class="col-md-6">
                            <table class="table" style="border-top-style:hidden;">
                                <tbody>
                                    <tr>
                                        <td class="pull-right" style="border-top-style:hidden;">
                                            
                                            Seed Planted
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td> Participated</td>
                                    </tr>
                                    <tr>
                                        <td class="pull-right" style="border-top-style:hidden;">
                                            
                                            Seed Planted
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td> Participated</td>
                                    </tr>
                                </tbody>
                                
                            </table>
                        </div>
                        
                        <!--    <div class="col-md-12">
                            <div class="text-center">
                                <a type="button" class="btn btn-success btn-lg" href="#">Invest in a crop</a>
                                
                                <a type="button" class="btn btn-success btn-lg btn-block">Invest in a crop</a>
                            </div>
                            <h2 class="text-center text-capitalize">
                            Pending Payment
                            </h2>
                            <hr>
                            <br>
                            
                            <p class="text-center">There is no pending payment transaction</p>
                            <br>
                            
                            My Seed part
                            
                            <h2 class="text-center ">
                            My Seed
                            </h2>
                            <hr>
                            
                            two button
                            <div class="text-center">
                                <ul class="list-inline ">
                                    <li><button type="button" class="btn btn-default btn-lg">Large button</button></li>
                                    <li><button type="button" class="btn btn-default btn-lg">Large button</button></li>
                                </ul>
                                <img src="img/empty-state.png" class="img-responsive" alt="Responsive image">
                                <p>Whoops you don't have any on planting seed</p>
                            </div>
                        </div> -->
                    </div>
                    <hr>
                    <!--seed part-->
                    <div class="row seed text-center">

                    <!--title-->
                        <h2 class="text-center text-capitalize">
                        my seed
                        </h2>
                        <hr>
                        <!-- two button part-->
                        <div class="col-md-6 col-xs-6 text-uppercase text-center" id="left">
                            <a name="button"> on planting</a>
                        </div>
                        <div class="col-md-6 col-xs-2 text-uppercase text-center" id="right">
                            <a name="button">
                            harvested</a>
                        </div>
                        <!--line which scrol(left-right)-->
                        <div class="col-md-6 line">
                        
                        </div>
                        <br>
                        <!-- button part end-->

                        <!--part where we put some information-->
                        <div class="col-md-12 text-center leftInfo" >
                        <img src="img/empty-state.png" class="img-responsive" alt="Responsive image">
                        <p class="text-center">Whoops you don't have any on planting seed</p>
                        </div>

                        <div class="col-md-12 text-center rightInfo" style="display: none">
                        <img src="img/empty-state.png" class="img-responsive" alt="Responsive image">
                        <p class="text-center">Whoops Bla bla bla</p>
                        </div>
                    </div>
                </div>



                <!--right part (global col-md-3)-->
                
                <div class="col-md-3">

                <!--part about time -->
                    <div class="upcoming">
                        
                        <h3 class="text-capitalize text-left">
                        Upcoming Harvest
                        </h3>
                        <hr>
                          <ul class="media-list">
                                    <li class="media">
                                       
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="#">Avokado</a></h3>
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp <a href = "#">Tanjung Lesung Agropolis</a>
                                            <br>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp  10 September 2020</p>
                                    </div>
                                </li>
                                
                            </ul>
                          
                        <p class="text-center">There is no upcoming harvest </p>
                    </div>
                    <!--end time part-->

                    <!--part about investment-->
                    <br>
                    <div class="investment">
                        <h3 class="text-capitalize text-left">
                        Recent Investment
                        </h3>
                        <hr>
                        <ul class="media-list">
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Avocado</a> in <a href="#"> Tanjung Lesung Agropolis</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>
                            
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Deli Water Apple </a> in <a href="#">  Jonggol, Jawa Barat</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>
                            <li class="media">
                                <a class="media-left" href="#">
                                    <img class="media-object" src="img/dummy.png" alt="Generic placeholder image">
                                </a>
                                <div class="media-body">
                                    <span class="media-heading">Irma R Thala has planted crop</span>
                                    <p><a href="#">Deli Water Apple </a> in <a href="#">  Jonggol, Jawa Barat</a></p>
                                </div>
                                <p>1 day ago</p>
                            </li>
                            
                            
                        </ul>
                        
                    </div>

                    <!--end investment part-->
                    <br>

                    <!--info from our blog-->
                    <div class="ourBlog">
                        <h3 class="text-capitalize text-left">
                        From Our Blog
                        </h3>
                        <hr>
                        <span>
                            <a href="#" class="text-capitalize">Obah</a>
                            <p>2 days ago</p>
                        </span>
                        <span>
                            <a href="#" class="text-capitalize">Selling An Experience, Selling A Vision</a>
                            <p>1 month ago</p>
                        </span>
                        <span>
                            <a href="#" class="text-capitalize">Seeds of Life</a>
                            <p>1 month ago</p>
                        </span>
                    </div>
                    <!--end info part-->
                    
                </div>
            </div>
        </div>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/vendor/jquery-1.11.2.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/profile.js"></script>

   
</body>
</html>