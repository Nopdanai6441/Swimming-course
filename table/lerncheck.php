<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Fresh Bootstrap Table by Creative Tim</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table" />

  <!--  Social tags    -->
  <meta name="keywords" content="creative tim, html table, html css table, web table, freebie, free bootstrap table, bootstrap, css3 table, bootstrap table, fresh bootstrap table, frontend, modern table, responsive bootstrap table, responsive bootstrap table">

  <meta name="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Fresh Bootstrap Table by Creative Tim">
  <meta itemprop="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <!-- Twitter Card data -->

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Fresh Bootstrap Table by Creative Tim">

  <meta name="twitter:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <meta name="twitter:data1" content="Fresh Bootstrap Table by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="Free">
  <meta name="twitter:label2" content="Price">

  <!-- Open Graph data -->
  <meta property="og:title" content="Fresh Bootstrap Table by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/full-screen-table.html" />
  <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg" />
  <meta property="og:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need." />
  <meta property="og:site_name" content="Creative Tim" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />

  <!--   Fonts and icons   -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="assets/js/demo/gsdk-switch.js"></script>
  <script src="assets/js/demo/jquery.sharrre.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <style type="text/css">
    .chk .th-inner  {
          border: 1px solid;
          text-align: center;
          cursor: pointer;
    }
    #popUp {
      position: fixed;
      z-index: 1000;
      width: 521px;
      height: 198px;
      background-color: white;
      transform: translate(-50%,-50%);
      border-radius: 4px;
      border-top: 3px solid dotted;
      left: 50%;
      padding: 9px;
      top: 50%;
      display: none;
    }
    .head {
          height: 50px;
          border-bottom: 1px solid #938982;
          padding-left: 11px;
          padding-top: 8px;
          font-size: 25px;
          background-color: darkorange;
          font-weight: bolder;
          color: white;
    }
    .body {
          height: 82px;
          padding-top: 9px;
          padding-left: 42px;
          font-size: 37px;
          font-weight: 700;
    }
    .button {
      height: 51px;
      display: flex;
    }
    .buttons {
          background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    line-height: 20px;
    position: absolute;
    }
    .kad {
      background-color: red;
      right: 110px;
      border-radius: 7px;
    }
    .bclose {
      background-color: red;
      right: 9px;
      border-radius: 7px;
    }
    .ma {
      background-color: green;
      right: 209px;
      border-radius: 7px;
    }
    .checkboxs {
        line-height: 40px;
        width: 100px;
        float: right;
    }
    .checkboxs input[type=checkbox] {
      position: relative;
    }
  </style>
</head>

<body>
  <div id = "popUp">
    <div class = "head">วันที่ : <?=date('d-m-Y')?></div>
    <div class = "body"></div>
    <div class = "button">
      <button class = "buttons kad" onclick="processChk(false)">ขาด</button>
      <button class = "buttons ma" onclick="processChk(true)">มา</button>
      <button class = "buttons bclose">ออก</button>
    </div>
  </div>
<?php
    include('../login_v16/connect.php');
    mysqli_set_charset($conn, "utf8");
    function querySet($query) {
      global $conn;
      $data = [];
      $result = mysqli_query($conn, $query) or die($mysqli->error);
      while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row; 
      }
     return $data;
    }

    function setFrmDateTime($d) {
     return date('Y-m-d H', strtotime($d));
    }


    $mid = $_SESSION['memid'];
    $data = [];
    $results = [];
    $query = "SELECT * FROM member where status = 'm' order by name ASC";
    foreach (querySet($query) as $key => $value) {
      for($i=1;$i<=6;$i++){
        $days = date('Y-m-d H', strtotime($value['day'.$i]));
        if($days == date('Y-m-d H') && $value['check'.$i] == ''){
          $results[$key] = $value;
        }
      }
    }
  echo"<a href='../indexadmin.php' class='btn btn-secondary btn-sm'> ย้อนกลับ </a>";
  echo"<div class='container'>";
    echo "<div class='wrapper'>";
    echo "<div class='fresh-table full-color-blue'>";
    echo "<table id='fresh-table' class='table'>";
    echo " <thead>";
    echo  "<th>ID</th>";
    echo  "<th>ชื่อ</th>";
    echo  "<th>นามสกุล</th>";
    echo  "<th>วันที่</th>";
    echo  "<th>ครั้ง 1</th>";
    echo  "<th>ครั้ง 2</th>";
    echo  "<th>ครั้ง 3</th>";
    echo  "<th>ครั้ง 4</th>";
    echo  "<th>ครั้ง 5</th>";
    echo  "<th>ครั้ง 6</th>";
    echo  "<th class = \"chk\"><div id='checkName'>เช็คชื่อ</div></th>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($results as $row) {
      $data[] = $row;
      echo "<tr>";
      echo "<td>" . $row["memid"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["lastname"] . "</td>";
      echo "<td>" . date('d-m-Y') . "<br></td>";
      echo " <td>";
      echo  $row['check1'] == 'true' ? 'มา' : (!$row['check1'] && setFrmDateTime($row['day1']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo " <td>";
      echo  $row['check2'] == 'true' ? 'มา' : (!$row['check2'] && setFrmDateTime($row['day2']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo " <td>";
      echo  $row['check3'] == 'true' ? 'มา' : (!$row['check3'] && setFrmDateTime($row['day3']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo " <td>";
      echo  $row['check4'] == 'true' ? 'มา' : (!$row['check4'] && setFrmDateTime($row['day4']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo " <td>";
      echo $row['check5'] == 'true' ? 'มา' : (!$row['check5'] && setFrmDateTime($row['day5']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo " <td>";
      echo $row['check6'] == 'true' ? 'มา' : (!$row['check6'] && setFrmDateTime($row['day6']) >= date('Y-m-d H') ? '-' : 'ขาด');
      echo "</td> ";
      echo "<td></td>";
      echo "</tr>";  
    }
    echo "</tbody>";
    echo "</table>";
    
    ?>
    <script type="text/javascript">
      var $table = $('#fresh-table')
      $(function() {
        $table.bootstrapTable({
          classes: 'table table-hover table-striped',
          toolbar: '.toolbar',
          search: false,
          showToggle: false,
          showColumns: false,
          pagination: true,
          striped: true,
          sortable: true,
          pageSize: 25,
          pageList: [10, 20, 30, 50, 100],

          formatShowingRows: function(pageFrom, pageTo, totalRows) {
            return ''
          },
          formatRecordsPerPage: function(pageNumber) {
            return pageNumber + ' rows visible'
          }
        })
        $('th.chk').on('click',function(){
          $.data = [];
          setData();
          

       })

        processChk = function($data = []) {
            console.log($.data)
          param = {
            id: $.data['id'],
            no: $.data['no'],
            status: $data,
            mode: 'update'
          }
          console.log(param);
         $.post( "../query/query.php", param, function( data ) {
            $.data=[];
            setData();
         });
        }

        $('.buttons.bclose').on('click', function(){
          $('div#popUp').hide();
          window.location.href='lerncheck.php';
        })

        setData = function() {
          $('div.body').html();
          $.post( "../query/query.php", {mode: "checkName"}, function( data ) {
            if(data[0]){
                data.forEach(function(el) {
                    for (var i = 1; i <= 6; i++) {
                      d = el['day'+i].split(" ");
                      t = d[1].split(":");
                      dt = d[0]+" "+t[0];
                        if(dt == <?php echo "'".date('Y-m-d H')."'"?> && el['check'+i] == '') {
                            name = el['name']+" "+el['lastname'];
                            $('div#popUp').show();
                            $('div.body').html(name);
                            $.data = {
                                id: el['memid'],
                                no: i
                            };
                          break; 
                        }  
                    }
                });
                if(!$.data['id']){
                // console.log("test : ", $.data);
                    $('div#popUp').hide();
                    window.location.href='lerncheck.php';
                }
            }else {
                $('div#popUp').hide();
                window.location.href='lerncheck.php';
            }

          }, 'json');
        }

      })
    </script>
  </div>
  </container>
</body>

</html>