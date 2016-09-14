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
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="assets/font-awesome/cssf/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid change_pro">

            <div class="container">

            <!--title-->
                <div class="row title">
                    <div class="col-md-12">

                        <h2 class="text-capitalize">Edit Profile</h2>
                        <hr>
                    </div>
                    
                    
                </div>
                <!-- end title-->

                <!--start man info part-->
                <div class="row content">
                    <div class="col-md-3">
                        <div class="card">

                        <!--start all post part-->
                        <form method="post">
                        <!--picure post part-->
                            <div class="card-block"> Picture </div>
                            <br>
                            <div class="photo">
                                <img class="card-img-bottom img-responsive" src="img/dummy.png" alt="Card image cap">
                                <div class="text-center caption">


                                    <i class="fa fa-camera fa-2x btn btn-default btn-file" aria-hidden="true">
                                    <input  type="file" name="..." value="select"></i>


                                    <h3 class="text-center text-capitalize">change picture</h3>
                                    
                                </div>
                                
                                
                            </div> 

<!--end img post part-->

                         <!--    <div class="fileinput fileinput-new" data-provides="fileinput">
                             <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 248px; height: 248px;"></div>
                             <div>
                                 <span class="btn btn-default btn-file"><i class="fileinput-new">Select image</i><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                 <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                             </div>
                         </div> -->
                        </div>
                    </div>

                    <!--start another info inputs-->
                    <div class="col-md-9">
                        
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@email.com" readonly>
                            </div>
                            <div class="form-group">
                                <label for="biodata">Biodata</label>
                                <textarea name="" id="biodata" cols="30" class="form-control" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="province">Province</label>
                                <input type="text" class="form-control" id="province" value="o">
                            </div>
                            <div class="form-group">
                                <label for="region">Region</label>
                                <input type="text" class="form-control" id="region" value="o">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" value="o">
                                <span class="text-left">*informasi Alamat tidak dipublikasikan</span>
                            </div>
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" id="telephone" value="o">
                                <span class="text-left">*informasi No Telephone tidak dipublikasikan</span>
                            </div>
                            
                            <h3 class="text-capitalize">Informasi Ahli Waris</h3>
                            <div class="form-group">
                                <label for="informasi">Nama Ahli Waris</label>
                                <input type="text" class="form-control" id="informasi" value="o">
                                
                            </div>
                            <div class="form-group">
                                <label for="notelp">No Telp. Ahli Waris</label>
                                <input type="text" class="form-control" id="notelp" value="o">
                                
                            </div>
                            <div class="form-group">
                                <label for="almat">Alamat Ahli Waris</label>
                                <textarea name="" cols="30" class="form-control" rows="2" id="ealmat"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-lg text-capitalize pull-right">Update profile</button>
                        </form>

                        <!--end -->
                        
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
        <script src="js/cnprofile.js"></script>
       
    </body>
</html>