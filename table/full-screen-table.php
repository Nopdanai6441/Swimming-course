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
  <a href='../indexadmin.php' class='btn btn-secondary btn-sm'> ย้อนกลับ </a>
  <div class="container">
    <?php
    include('../login_v16/connect.php');
    mysqli_set_charset($conn, "utf8");
    $query = "SELECT * FROM member";
    $result = mysqli_query($conn, $query) or die($mysqli->error);
    $add=0;
    echo "<div class='wrapper'>";
    echo "<div class='fresh-table full-color-blue'>";
    echo "<table id='fresh-table' class='table'>";
    echo " <thead>";
    echo  "<th>ID</th>";
    echo  "<th>ชื่อ</th>";
    echo  "<th>นามสกุล</th>";
    echo  "<th>เบอร์โทร</th>";
    echo  "<th>วันที่สมัคร</th>";
    echo  "<th>แก้ไข</th>";
    echo  "<th>ลบข้อมูล</th>  ";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row["memid"] . "</td>";
      echo "<td>" . $row["name"] . "</td>";
      echo "<td>" . $row["lastname"] . "</td>";
      echo "<td>" . $row["phone"] . "</td>";
      if($row["time_regis"]=='0000-00-00 00:00:00'){echo "<td> 00-00-0000 00:00 <br></td>";}else{echo "<td>" .date_format(new datetime ($row["time_regis"]),"d-m-Y H:i"). "<br></td>";}
      echo "<td><a href='../Login_v16/memedit.php?id=$row[memid]' class='btn btn-secondary btn-sm' > แก้ไข </a></td>";
      echo "<td><a href='del.php?id=$row[memid]' class='btn btn-secondary btn-sm' > ลบทิ้ง </a></td>";
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