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

</head>

<body>
  <a href='full-screen-table showlern.php' class='btn btn-secondary btn-sm'> ย้อนกลับ </a>
  <div class="container">
    <?php
    include('../login_v16/connect.php');
    mysqli_set_charset($conn, "utf8");
    $mid = $_GET['id'];
    $query = "SELECT * FROM member where memid = $mid";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
    $ma='มา';
    $kad='ขาด';
    echo "<div class='wrapper'>";
    echo "<div class='fresh-table full-color-blue'>";
    echo "<table id='fresh-table' class='table'>";
    echo " <thead>";
    echo  "<th>ครั้งที่</th>";
    echo  "<th>วันที่เรียน</th>";
    echo  "<th>เช็คชื่อ</th>";
    echo "<th>นัดเรียน</th>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td> 1 <br></td>";
      if($row["day1"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day1"]),"d-m-Y H:i"). "<br></td>";}
      if($row["14"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
      }else if($row["14"]=='false'){
        echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
      }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
        if($row['check1']=='true')
        {
      echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
        }else{echo "<td><a href='../Login_v16/settime mem1.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
      echo "<tr>";
      echo "<td> 2 <br></td>";
      if($row["day2"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day2"]),"d-m-Y H:i"). "<br></td>";}
      if($row["15"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
    }else if($row["15"]=='false'){
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
    }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
    if($row['check2']=='true')
        {
      echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
        }else{echo "<td><a href='../Login_v16/settime mem2.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
      echo "<tr>";
      echo "<td> 3 <br></td>";
      if($row["day3"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day3"]),"d-m-Y H:i"). "<br></td>";}
      if($row["16"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
    }else if($row["16"]=='false'){
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
    }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
    if($row['check3']=='true')
      {
        echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
      }else{echo "<td><a href='../Login_v16/settime mem3.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
      echo "<tr>";
      echo "<td> 4 <br></td>";
      if($row["day4"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day4"]),"d-m-Y H:i"). "<br></td>";}
      if($row["17"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
    }else if($row["17"]=='false'){
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
    }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
    if($row['check4']=='true')
      {
        echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
      }else{echo "<td><a href='../Login_v16/settime mem4.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
      echo "<tr>";
      echo "<td> 5 <br></td>";
      if($row["day5"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day5"]),"d-m-Y H:i"). "<br></td>";}
      if($row["18"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
    }else if($row["18"]=='false'){
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
    }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
    if($row['check5']=='true')
      {
        echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
      }else{echo "<td><a href='../Login_v16/settime mem5.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
      echo "<tr>";
      echo "<td> 6 <br></td>";
      if($row["day6"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["day6"]),"d-m-Y H:i"). "<br></td>";}
      if($row["19"]=='true')
      {
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ma <br></td>";
    }else if($row["19"]=='false'){
      echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$kad <br></td>";
    }else{echo "<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- <br></td>";}
    if($row['check6']=='true')
      {
        echo "<td><a class='btn btn-secondary btn-sm' > เรียนแล้ว </a></td>";
      }else{echo "<td><a href='../Login_v16/settime mem6.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";}
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
    <script>
      var $table = $('#fresh-table')
      $(function() {
        $table.bootstrapTable({
          classes: 'table table-hover table-striped',
          toolbar: '.toolbar',
          search: true,
          showToggle: true,
          showColumns: true,
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
      })
    </script>
  </div>
  </container>
</body>

</html>