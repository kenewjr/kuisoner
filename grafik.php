<?php
session_start();
if (!isset($_SESSION["id"])) {
	echo "Anda harus login dulu <br><a href='login_admin.php'>Klik disini</a>";
	exit;
}
$id=$_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5.0.2/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="bootstrap-5.0.2/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="bootstrap-5.0.2/css/style.css" />
    <link rel="stylesheet" type="text/css" href="Chartjs/dist/Chart.min.css">
    <script type="text/javascript" src="jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="Chartjs/dist/Chart.min.js"> </script>
    <title>Admin Page</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="admin.php"
          ><?php echo $id; ?></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="logout.php">Exit</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                Fitur
              </div>
            </li>
            <li>
              <a href="grafik.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Grafik</span>
              </a>
            </li>
            <li>
              <a href="table.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Table</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card h-100">
              <div class="card-header">
                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                Grafik
              </div>
              <div class="card-body">
              <canvas id="myChart" width="1500" height="800"></canvas>
              </div>
            </div>
          </div>
      </div>
    </main>
    <script>
$.getJSON( "data-produk.php", function( data ) {

    var isi_labels = [];
    var isi_dataK=[];
    var isi_dataB=[];
    var isi_dataSB=[];
    var TotalJmlK = 0;
    var TotalJmlB = 0;
    var TotalJmlSB = 0;

    data.forEach(function (obj) {
        TotalJmlK += Number(obj["kurang"]);
    });
    data.forEach(function (obj) {
        TotalJmlB += Number(obj["baik"]);
    });
    data.forEach(function (obj) {
        TotalJmlSB += Number(obj["sangat_baik"]);
    });


   var kurang = 0;
    var baik = 0;
    var sangat_baik = 0;
    $(data).each(function(i){         
        isi_labels.push(data[i].pertanyaan); 
    
        isi_dataK.push(((data[i].kurang/TotalJmlK) * 100).toFixed(2));
        isi_dataB.push(((data[i].baik/TotalJmlB) * 100).toFixed(2));
        isi_dataSB.push(((data[i].sangat_baik/TotalJmlSB) * 100).toFixed(2));
    });

    var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: isi_labels,
            datasets: [{ 
                data: isi_dataK,
                label: "Kurang",
                borderColor: "rgb(62,149,205)",
                backgroundColor: "rgb(62,149,205,0.1)",
                borderWidth:2
              }, { 
                data:  isi_dataB,
                label: "Baik",
                borderColor: "rgb(60,186,159)",
                backgroundColor: "rgb(60,186,159,0.1)",
                borderWidth:2
              }, { 
                data: isi_dataSB,
                label: "Sangat Baik",
                borderColor: "rgb(255,165,0)",
                backgroundColor:"rgb(255,165,0,0.1)",
                borderWidth:2
              } 
            ]
          },
        options: {

            //konfigurasi tooltip
            tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var labels =  data.labels[tooltipItem.index];
                        var currentValue = dataset.data[tooltipItem.index];
                        return data.datasets[tooltipItem.datasetIndex].label+": "+currentValue+" %";
                    }
                }
            }
          }
    });
});
</script>
    <script src="./bootstrap-5.0.2/js/bootstrap.bundle.min.js"></script>
    <script src="./Chartjs/dist/Chart.min.css"></script>
    <script src="./jquery/dist/jquery.js"></script>
    <script src="./jquery/dist/jquery.dataTables.min.js"></script>
    <script src="./bootstrap-5.0.2/js/dataTables.bootstrap5.min.js"></script>
  </body>
</html>
