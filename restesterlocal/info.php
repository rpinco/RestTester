<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Master Race Team</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	



	
    

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/ajustes.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>


 <style type="text/css">
#wrapper {
  padding-left: 250px;
  transition: all 0.4s ease 0s;
}

#sidebar-wrapper {
  margin-left: -250px;
  left: 250px;
  width: 250px;
  background: #000;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}

#wrapper.active {
  padding-left: 0;
}

#wrapper.active #sidebar-wrapper {
  left: 0;
}

#page-content-wrapper {
  width: 100%;
}



.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: #999999;
  display: block;
  text-decoration: none;
  padding-left: 60px;
}

.sidebar-nav li a span:before {
  position: absolute;
  left: 0;
  color: #41484c;
  text-align: center;
  width: 20px;
  line-height: 18px;
}

.sidebar-nav li a:hover,
.sidebar-nav li.active {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}



.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}

#menu-toggle {
    text-decoration: none;
}

.btn-menu {
  color: #000;
} 

.inset {
  padding: 20px;
}

@media (max-width:767px) {

#wrapper {
  padding-left: 0;
}

#sidebar-wrapper {
  left: 0;
}

#wrapper.active {
  position: relative;
  left: 250px;
}

#wrapper.active #sidebar-wrapper {
  left: 250px;
  width: 250px;
  transition: all 0.4s ease 0s;
}

#menu-toggle {
  display: inline-block;
}

.inset {
  padding: 15px;
}

input {
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 34px;
    line-height: 1.42857;
    padding: 6px 12px;

    width: 100%;
}

}


 </style>


</head>

<body>


<nav class="navbar navbar-default navfixed" role="navigation" style="margin-bottom: 0;">
  <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">

    <a class="navbar-brand" href="#">[MRaceT]</a>
  			</div>

 	 <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-bootsnipp-collapse">
    <ul class="nav navbar-nav">

     <li class=""><a href="index.php" ><span class="glyphicon glyphicon-plus"></span> Add</a></li>
     <li class=""><a href="delete.php"><span class="glyphicon glyphicon-remove"></span> Delete</a></li>
     <li class=""><a href="modify.php"><span class="glyphicon glyphicon-pencil"></span> Modify</a></li>
     <li class=""><a href="get.php"><span class="glyphicon glyphicon-share-alt"></span> get</a></li>
     <li class=""><a href="getby.php"><span class="glyphicon glyphicon-share"></span> getBy</a></li>
     <li class=""><a href="disable.php"><span class="glyphicon glyphicon-eye-close"></span> Disable</a></li>
     <li class=""><a href="enable.php"><span class="glyphicon glyphicon-eye-open"></span> Enable</a></li>
     <li class="active"><a href="info.php"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
    
    </ul>




  </div><!-- /.navbar-collapse -->
  </div>

  </nav>

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <nav id="spy">
                <ul class="sidebar-nav nav">
                    <li class="sidebar-brand">
                        <a href="#home"><span class="fa fa-home solo">Home</span></a>
                    </li>
                    <li>
                        <a href="#anch1" data-scroll>
                            <span class="fa fa-anchor solo">Anchor 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch2" data-scroll>
                            <span class="fa fa-anchor solo">Anchor 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch3" data-scroll>
                            <span class="fa fa-anchor solo">Anchor 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#anch4" data-scroll>
                            <span class="fa fa-anchor solo">Anchor 4</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Page content -->
        <div id="page-content-wrapper ">
            <div class="content-header infoajuste">
                <h1 id="home">
                    <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                    Sidebar Navigation Template
                </h1>
            </div>

            <div class="page-content inset" data-spy="scroll" data-target="#spy">
                <div class="row">
  
                        <div class="jumbotron text-center" >
                            <h1>En construcción!</h1>
                            <p>This is a sidebar navigation responsive template built off of Bootstrap 3.0 and simple sidebar template. It includes anchors, scroll spy, smooth scroll, and Awesome icon fonts.</p>
                            <p><a class="btn btn-default">Click On Me!</a>
                            <a class="btn btn-info">Tweet Me!</a></p>
                        </div>
    
                </div>
                <p>Add a drop-down filter, define its first option, sort it and remove a filter</p>
<table class="table" id="table2">
        <thead>
            <tr>
                <th>th is 0</th>

                <th>th is 1</th>

                <th>th is 2</th>

                <th>th is 3</th>

                <th>th is 4</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>cell is row 0, column 0</td>

                <td>cell is row 0, column 1</td>

                <td>cell is row 0, column 2</td>

                <td>cell is row 0, column 3</td>

                <td>cell is row 0, column 4</td>
            </tr>

            <tr>
                <td>cell is row 1, column 0</td>

                <td>cell is row 1, column 1</td>

                <td>cell is row 1, column 2</td>

                <td>cell is row 1, column 3</td>

                <td>cell is row 1, column 4</td>
            </tr>

            <tr>
                <td>cell is row 2, column 0</td>

                <td>cell is row 2, column 1</td>

                <td>cell is row 2, column 2</td>

                <td>cell is row 2, column 3</td>

                <td>cell is row 2, column 4</td>
            </tr>

            <tr>
                <td>cell is row 3, column 0</td>

                <td>cell is row 3, column 1</td>

                <td>cell is row 3, column 2</td>

                <td>cell is row 3, column 3</td>

                <td>cell is row 3, column 4</td>
            </tr>

            <tr>
                <td>cell is row 4, column 0</td>

                <td>cell is row 4, column 1</td>

                <td>cell is row 4, column 2</td>

                <td>cell is row 4, column 3</td>

                <td>cell is row 4, column 4</td>
            </tr>

            <tr>
                <td>cell is row 5, column 0</td>

                <td>cell is row 5, column 1</td>

                <td>cell is row 5, column 2</td>

                <td>cell is row 5, column 3</td>

                <td>cell is row 5, column 4</td>
            </tr>

            <tr>
                <td>cell is row 6, column 0</td>

                <td>cell is row 6, column 1</td>

                <td>cell is row 6, column 2</td>

                <td>cell is row 6, column 3</td>

                <td>cell is row 6, column 4</td>
            </tr>

            <tr>
                <td>cell is row 7, column 0</td>

                <td>cell is row 7, column 1</td>

                <td>cell is row 7, column 2</td>

                <td>cell is row 7, column 3</td>

                <td>cell is row 7, column 4</td>
            </tr>

            <tr>
                <td>cell is row 8, column 0</td>

                <td>cell is row 8, column 1</td>

                <td>cell is row 8, column 2</td>

                <td>cell is row 8, column 3</td>

                <td>cell is row 8, column 4</td>
            </tr>

            <tr>
                <td>cell is row 9, column 0</td>

                <td>cell is row 9, column 1</td>

                <td>cell is row 9, column 2</td>

                <td>cell is row 9, column 3</td>

                <td>cell is row 9, column 4</td>
            </tr>

            <tr>
                <td>cell is row 10, column 0</td>

                <td>cell is row 10, column 1</td>

                <td>cell is row 10, column 2</td>

                <td>cell is row 10, column 3</td>

                <td>cell is row 10, column 4</td>
            </tr>

            <tr>
                <td>cell is row 11, column 0</td>

                <td>cell is row 11, column 1</td>

                <td>cell is row 11, column 2</td>

                <td>cell is row 11, column 3</td>

                <td>cell is row 11, column 4</td>
            </tr>

            <tr>
                <td>cell is row 12, column 0</td>

                <td>cell is row 12, column 1</td>

                <td>cell is row 12, column 2</td>

                <td>cell is row 12, column 3</td>

                <td>cell is row 12, column 4</td>
            </tr>

            <tr>
                <td>cell is row 13, column 0</td>

                <td>cell is row 13, column 1</td>

                <td>cell is row 13, column 2</td>

                <td>cell is row 13, column 3</td>

                <td>cell is row 13, column 4</td>
            </tr>

            <tr>
                <td>cell is row 14, column 0</td>

                <td>cell is row 14, column 1</td>

                <td>cell is row 14, column 2</td>

                <td>cell is row 14, column 3</td>

                <td>cell is row 14, column 4</td>
            </tr>

            <tr>
                <td>cell is row 15, column 0</td>

                <td>cell is row 15, column 1</td>

                <td>cell is row 15, column 2</td>

                <td>cell is row 15, column 3</td>

                <td>cell is row 15, column 4</td>
            </tr>

            <tr>
                <td>cell is row 16, column 0</td>

                <td>cell is row 16, column 1</td>

                <td>cell is row 16, column 2</td>

                <td>cell is row 16, column 3</td>

                <td>cell is row 16, column 4</td>
            </tr>

            <tr>
                <td>cell is row 17, column 0</td>

                <td>cell is row 17, column 1</td>

                <td>cell is row 17, column 2</td>

                <td>cell is row 17, column 3</td>

                <td>cell is row 17, column 4</td>
            </tr>
        </tbody>
    </table>

                <div class="navbar navbar-default navbar-static-bottom">
                    <p class="navbar-text pull-left">
                        Built by <a href="http://mvnguyen.com" target="_blank">Michael V Nguyen
                    </p>
                </div>
            </div>

        </div>

    </div>
 		<script type="text/javascript">

  /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });

    /*Scroll Spy*/
    $('body').scrollspy({ target: '#spy', offset:80});

    /*Smooth link animation*/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });



    var table2_Props = {
    col_0: "select",
    col_4: "none",
    display_all_text: " [ Show all ] ",
    sort_select: true
};
var tf2 = setFilterGrid("table2", table2_Props);

    </script>			





</body>
</html>
