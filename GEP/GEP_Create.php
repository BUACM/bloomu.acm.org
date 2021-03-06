<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>BloomU.info</title>

   <!-- Font -->
   <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,500,600,700,800,300italic,400italic">
   <!-- Icons -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="css/custome.css">
   <link rel="stylesheet" type="text/css" href="css/topNavBar.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


   <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

   <!-- For MVC - (Underscore, Backbone) -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
   <!-- APP JS FOR BACKBONE.js -->
   <!--<script type="text/javascript" src="js/app.js"></script>-->
</head>

<body>
   <div id="app">
      <!-- Navigation -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <a id="menu-toggle" class="navbar-brand" onclick="document.getElementById('wrapper').classList.toggle('toggled');">
                  <i class="material-icons">&#xE5D2;</i>
               </a>
               <a href="#/home" class="navbar-brand" style="padding-top:17px;">
                  <span>BLOOMU Info</span>
               </a>
               <!--<a href="#/home" class="navbar-brand company" style="">-->
               <!--   <span style="padding-right:15px;">|</span><img src="img/medtrics-logo-white.png" style="width:100px; float: right;">-->
               <!--</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbar-collapse-1" class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li uib-dropdown class="dropdown">
                     <a class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">&#xE7F4;</i></a>
                     <ul class="dropdown-menu dropdown-alerts">
                        <li ng-repeat-start="alert in alerts">
                           <a href="#">
                              <div><i class="material-icons" style="color:{{alert.iconColor}};">&#xE7F4;</i> Title<em><span class="pull-right text-muted small">Time</span></em></div>
                           </a>
                        </li>
                        <li ng-repeat-end class="divider"></li>
                        <li><a class="text-center" href="#"><strong>See All Alerts </strong><i class="material-icons">&#xE315;</i></a></li>
                     </ul>
                  </li>
                  <!--<li ng-show="isLoggedIn" uib-dropdown class="dropdown">-->
                  <!--   <a uib-dropdown-toggle class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">-->
                  <!--      <i class="material-icons">&#xE896;</i></a>-->
                  <!--   <ul uib-dropdown-menu class="dropdown-menu">-->
                  <!--      <li><a><i class="material-icons">&#xE853;</i> Profile</a></li>-->
                  <!--      <li><a><i class="material-icons">&#xE8B8;</i> Settings</a></li>-->
                  <!--      <li role="separator" class="divider"></li>-->
                  <!--      <li><a><i class="material-icons">&#xE8AC;</i> Log Out</a></li>-->
                  <!--   </ul>-->
                  <!--</li>-->
                  <li class="dropdown">
                     <a class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">&#xE5C3;</i></a>
                     <ul class="medtrics_products dropdown-menu">
                        <li>
                           <a target="new" href="#">Here</a>
                        </li>
                        <li role="separator" class="divider"></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a id="profile_img_txt" class="nav_padding dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="profile_icon"><i class="material-icons">&#xE853;</i></div>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a><i class="material-icons">&#xE853;</i> <span>email</span></a></li>
                        <li><a href="#/settings"><i class="material-icons">&#xE8B8;</i> <span>Settings</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a><i class="material-icons">&#xE8AC;</i> <span>Log Out</span></a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>
      <!-- Page Content -->
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <h2 class="page_title">GEP Calculator</h2>
               <div class="list-group">
                  <a href="index.php" class="list-group-item">1. Select Your Major</a>
                  <a href="#" class="list-group-item active">2. Create Major</a>
                  <a href="#" class="list-group-item">3. Category</a>
                  <a href="./GEP_Calculate.php" class="list-group-item"><i class="material-icons">stars</i> Idc. Just show the GEP's!</a>
               </div>
            </div>
            <div class="col-md-9">
               <div class="thumbnail">
                  <header>
                     <div class="row">
                        <div id="part" class="col-sm-12 col-md-3 btn-group btn-group-lg" role="group" aria-label="Large button group">
                           <button type="button" class="btn btn-default">Part 1</button>
                           <button type="button" class="btn btn-default disabled">Part 2</button>
                        </div>
                        <div class="col-sm-12 col-md-9">
                           <h1 id="title" style="margin-top:0;">Create New Major</h1>
                        </div>
                     </div>
                  </header>
                  <footer class="caption-full row" style="margin:0; padding-bottom:25px;">
                     <div id="major_name_year" class="col-sx-12">
                        <p class="pull-right">Stuck? Click the i</p>
                        <h4>Enter the Name and the Year of your Major.</h4>
                        <div class="row">
                           <p style="margin:15px auto 0 auto; text-align:center; opacity:.5;" data-toggle="tooltip" title="Where is this information?!">
                              <i class="material-icons" style="color:#1b59ac; font-size:4em; cursor:pointer;" onclick="$('#howto1').toggle();">&#xE88E;</i>
                           </p>
                        </div>
                        <div id="howto1" style="display:none; max-width:550px; margin:auto;">
                           <img style="margin:auto; text-align:center;" src="./howto1.jpg"></img>
                        </div>
                        <hr>

                        <form id="major_name_year_form">
                           <div class="col-xs-12 col-sm-6 form-group">
                              <label for="major_name">Name of major</label>
                              <input type="text" class="form-control" name="major_name" style="text-transform:capitalize;" placeholder="Computer Science" required>
                           </div>
                           <div class="col-xs-12 col-sm-3 form-group">
                              <label for="major_semester">Semester Effective</label>
                              <select class="form-control" name="major_semester" placeholder="Fall" required>
                                 <option disabled selected>--</option>
                                 <option>Fall</option>
                                 <option>Spring</option>
                              </select>
                           </div>
                           <div class="col-xs-12 col-sm-3 form-group">
                              <label for="major_year">Year Effective</label>
                              <input type="number" class="form-control" name="major_year" min="2012" max="2030" placeholder="2014" required>
                           </div>
                           <div class="col-xs-12 checkbox">
                              <button type="submit" class="pull-right btn btn-default">Next <i class="material-icons">&#xE315;</i></button>
                           </div>
                        </form>
                     </div>

                     <div id="major_courses" class="col-sx-12" style="display:none;">
                        <p class="pull-right">Still Stuck? Click the i</p>
                        <h4>Enter the Required GEP courses for your Major.</h4>
                        <div class="row">
                           <p style="margin:15px auto 0 auto; text-align:center; opacity:.5;" data-toggle="tooltip" title="Where is this information?!">
                              <i class="material-icons" style="color:#1b59ac; font-size:4em; cursor:pointer;" onclick="$('#howto2').toggle();">&#xE88E;</i>
                           </p>
                        </div>
                        <div id="howto2" style="display:none; max-width:550px; margin:auto;">
                           <img style="margin:auto; text-align:center;" src="./howto2.jpg"></img>
                        </div>
                        <hr>
                        <style>
                           .gepTitle {
                              font-weight: 500;
                           }
                           
                           table {
                              font-size: .9em;
                              background-color: #eee;
                           }
                           
                           .table-bordered>tbody>tr>td,
                           .table-bordered>tbody>tr>th,
                           .table-bordered>tfoot>tr>td,
                           .table-bordered>tfoot>tr>th,
                           .table-bordered>thead>tr>td,
                           .table-bordered>thead>tr>th {
                              border: 1px solid #666;
                           }
                           
                           .table>tbody>tr>td,
                           .table>tbody>tr>th,
                           .table>tfoot>tr>td,
                           .table>tfoot>tr>th {
                              padding: 4px;
                           }
                           
                           table thead tr th {
                              text-align: center;
                           }
                           
                           table tbody tr td:first-of-type {
                              text-align: right;
                           }
                           
                           table tbody tr td:first-of-type span {
                              font-weight: 800;
                           }
                           
                           table tbody tr td input {
                              text-transform: uppercase;
                              text-align: center;
                           }
                        </style>
                        <table id="GEP_checklist" class="table table-bordered table-hover">
                           <thead>
                              <tr>
                                 <th></th>
                                 <th colspan="4">ENTER YOUR <u>REQUIRED</u> COURSES<br>*<span style="font-weight:500;">Spaces ignored.</span></th>
                              </tr>
                              <tr>
                                 <th></th>
                                 <th>COURSE</th>
                                 <th>COURSE</th>
                                 <th>COURSE</th>
                                 <th>COURSE</th>
                              </tr>
                           </thead>
                           <tbody>
                              <form id="major_courses_form">
                                 <tr>
                                    <td>
                                       <span>Learning Outcome 1</span><br>Communication
                                    </td>
                                    <td><input type="text" class="form-control" name="1_1" placeholder="ENGLISH 101"></td>
                                    <td><input type="text" class="form-control" name="2_1"></td>
                                    <td><input type="text" class="form-control" name="3_1"></td>
                                    <td><input type="text" class="form-control" name="4_1"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 2</span><br>Information Literacy</td>
                                    <td><input type="text" class="form-control" name="1_2"></td>
                                    <td><input type="text" class="form-control" name="2_2"></td>
                                    <td><input type="text" class="form-control" name="3_2"></td>
                                    <td><input type="text" class="form-control" name="4_2"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 3</span><br>Analytical/Quantitative</td>
                                    <td><input type="text" class="form-control" name="1_3"></td>
                                    <td><input type="text" class="form-control" name="2_3"></td>
                                    <td><input type="text" class="form-control" name="3_3"></td>
                                    <td><input type="text" class="form-control" name="4_3"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 4</span><br>Culture/History</td>
                                    <td><input type="text" class="form-control" name="1_4"></td>
                                    <td><input type="text" class="form-control" name="2_4"></td>
                                    <td><input type="text" class="form-control" name="3_4"></td>
                                    <td><input type="text" class="form-control" name="4_4"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 5</span><br>Natural Sciences</td>
                                    <td><input type="text" class="form-control" name="1_5"></td>
                                    <td><input type="text" class="form-control" name="2_5"></td>
                                    <td><input type="text" class="form-control" name="3_5"></td>
                                    <td><input type="text" class="form-control" name="4_5"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 6</span><br>Social Sciences</td>
                                    <td><input type="text" class="form-control" name="1_6"></td>
                                    <td><input type="text" class="form-control" name="2_6"></td>
                                    <td><input type="text" class="form-control" name="3_6"></td>
                                    <td><input type="text" class="form-control" name="4_6"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 7</span><br>Arts and Humanities</td>
                                    <td><input type="text" class="form-control" name="1_7"></td>
                                    <td><input type="text" class="form-control" name="2_7"></td>
                                    <td><input type="text" class="form-control" name="3_7"></td>
                                    <td><input type="text" class="form-control" name="4_7"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 8</span><br>Second Language</td>
                                    <td><input type="text" class="form-control" name="1_8"></td>
                                    <td><input type="text" class="form-control" name="2_8"></td>
                                    <td><input type="text" class="form-control" name="3_8"></td>
                                    <td><input type="text" class="form-control" name="4_8"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 9</span><br>Health</td>
                                    <td><input type="text" class="form-control" name="1_9"></td>
                                    <td><input type="text" class="form-control" name="2_9"></td>
                                    <td><input type="text" class="form-control" name="3_9"></td>
                                    <td><input type="text" class="form-control" name="4_9"></td>
                                 </tr>
                                 <tr>
                                    <td><span>Learning Outcome 10</span><br>Citizenship</td>
                                    <td><input type="text" class="form-control" name="1_10"></td>
                                    <td><input type="text" class="form-control" name="2_10"></td>
                                    <td><input type="text" class="form-control" name="3_10"></td>
                                    <td><input type="text" class="form-control" name="4_10"></td>
                                 </tr>
                                 <tr>
                                    <td colspan="5">
                                       <input class="btn btn-default" type="reset" value="Reset">
                                       <button class="btn btn-primary" type="submit">Submit</button>
                                    </td>
                                 </tr>
                              </form>
                           </tbody>
                        </table>
                     </div>
                  </footer>
               </div>

               <script>
                  var NewMajorName = '';
                  var NewMajorCourses = '';

                  $(function() {
                     $('#major_name_year_form').submit(function(e) {
                        e.preventDefault(); // cancel the actual submit

                        var $inputs = $('#major_name_year_form :input');
                        var values = {};
                        $inputs.each(function() {
                           values[this.name] = $(this).val();
                        });
                        // console.log(values);

                        if (values['major_semester'].toLowerCase() == 'fall' || values['major_semester'].toLowerCase() == 'spring') {
                           if (values['major_year'] < 2100) {
                              // Update to Next Screen
                              NewMajorName = values['major_name'].replace(/,/g, '');
                              NewMajorName += ',' + values['major_semester'];
                              NewMajorName += ',' + values['major_year'];

                              $('#title').text(values['major_name'] + ' - ' + values['major_semester'] + ' ' + values['major_year']);
                              $('#part button:first-of-type').addClass('disabled');
                              $('#part button:last-of-type').removeClass('disabled');
                              $('#major_name_year').hide();
                              $('#major_courses').show();
                           }
                        }
                        return false;
                     });
                  });

                  $(function() {
                     $('#major_courses_form').submit(function(e) {
                        e.preventDefault(); // cancel the actual submit

                        var $inputs = $(this).closest('table').find('input');

                        var values = {};
                        $inputs.each(function() {
                           values[this.name] = $(this).val();
                        });

                        for (var key in values) {
                           if (values[key] == '' || values[key] == 'Reset')
                              delete values[key];
                        }

                        for (key in values) {
                           values[key] = values[key].replace(/\s+/g, '');
                           values[key] = values[key].toUpperCase();
                        }

                        NewMajorCourses = values;
                        var data = {
                           majorInfo: NewMajorName,
                           majorCourses: NewMajorCourses
                        };

                        $.post('./GEP_NewMajor.php', data, function(returnedData) {
                           // do something here with the returnedData
                           console.log(returnedData);
                        });

                        return false;
                     });
                  });
               </script>


            </div>
         </div>
      </div>
   </div>

   <script>
      $(document).ready(function() {
         $('[data-toggle="tooltip"]').tooltip();
      });
   </script>
</body>

</html>
