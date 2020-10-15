<?php include 'header.php';
include  'include/db.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
  var db = firebase.firestore();
  var job = 0;
  db.collection("jobs-posted").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
      job++;
      console.log("inside job" + job);
    });
  });
</script>
<!-----------------------------------Head Part--------------------------------------------------->

<div class="row" style="margin-bottom: 15px;">
  <div class="col-6 pull-left">

    <div class="col-sm-4 pull-left">
      <select name="select" id="select" class="form-control">
        <option value="0">State</option>
        <option value="1">Option #1</option>
        <option value="2">Option #2</option>
        <option value="3">Option #3</option>
      </select>
    </div>
  </div>
  <div class="col-6 pull-right">
    <label style="margin-left:30px;"><input type="checkbox" value="">All</label>
    <label style="margin-left:30px;"> <input type="checkbox" value="">MTD</label>
    <label style="margin-left:30px;"> <input type="checkbox" value="">YTD</label>
  </div>
</div>
<!--------------------------------------------------------------------------------------->

<div class="col-sm-12 mb-4">
  <div class="card-group">
    <div class="card col-md-6 no-padding ">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-users"></i>
        </div>
        <?php
        $workers = 0;
        $document = $database->collection('service_provider')->documents();
        foreach ($document as $doc) $workers++;
        ?>
        <div class="h4 mb-0">
          <span class="count"><?php echo $workers; ?></span>
        </div>

        <small class="text-muted text-uppercase font-weight-bold">Workers</small>
        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
      </div>
    </div>
    <div class="card col-md-6 no-padding ">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-id-badge"></i>
        </div>
        <?php
        $customer = 0;
        $document = $database->collection('service_seeker')->documents();
        foreach ($document as $doc) $customer++;
        ?>
        <div class="h4 mb-0">
          <span class="count"><?php echo $customer; ?></span>
        </div>
        <small class="text-muted text-uppercase font-weight-bold">Customers</small>
        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
      </div>
    </div>
    <div class="card col-md-6 no-padding ">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-user-plus"></i>
        </div>
        <?php
        $hired = 0;
        $document = $database->collection('booking_details')->documents();
        foreach ($document as $doc) $hired++;
        ?>
        <div class="h4 mb-0">
          <span class="count"><?php echo $hired; ?></span>
        </div>
        <small class="text-muted text-uppercase font-weight-bold">Workers Hired</small>
        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
      </div>
    </div>
    <div class="card col-md-6 no-padding ">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-building"></i>
        </div>
        <script>
          var job = 0;
          db.collection("email").get().then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
              job++;
              console.log("inside job" + job);
            });
          });
          document.getElementById('job').innerHTML = job;
        </script>
        <div class="h4 mb-0">
          <span class="count" id="job"></span>
        </div>
        <small class="text-muted text-uppercase font-weight-bold">Job Posted</small>
        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
      </div>
    </div>
    <div class="card col-md-6 no-padding ">
      <div class="card-body">
        <div class="h1 text-muted text-right mb-4">
          <i class="fa fa-money"></i>
        </div>
        <?php
        $earning = 0;
        $document = $database->collection('sp_money')->documents();
        foreach ($document as $doc) {
          $data = $doc->data();
          $earning = $earning + $data['balance'];
        }
        ?>
        <div class="h4 mb-0"><?php echo $earning; ?> Rs.</div>
        <small class="text-muted text-uppercase font-weight-bold">Total Earning</small>
        <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
      </div>
    </div>
  </div>
</div>

<!--------------------------------------------- chart 1------------------------------------------------>
<div class="row">
  <div class="col sm-6 ">
    <div class="card">
      <h3 align="center"><b>Workers by state</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart1" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>

  <!--------------------------------------------- chart 2------------------------------------------------>
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Customers by state</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart2" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------- chart 3------------------------------------------------>
<div class="row">
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Earning by state</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart3" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>
  <!--------------------------------------------- chart 4------------------------------------------------>
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Daily Jobs</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart4" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>

</div>
<!--------------------------------------------- chart 5------------------------------------------------>
<div class="row">

  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Monthly jobs</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart5" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>

    </div>
  </div>



  <!--------------------------------------------- chart 6------------------------------------------------>
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Total Jobs</b></h3>
      <div class="card-body">
        <canvas id="doughnut-chart6" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>

</div>
<!--------------------------------------------- chart 7------------------------------------------------>

<div class="row">
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Gender wise - Workers</b></h3>

      <div class="card-body">
        <canvas id="doughnut-chart7" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>

  <!--------------------------------------------- chart 8------------------------------------------------>
  <div class="col sm-6">
    <div class="card">
      <h3 align="center"><b>Gender wise - Customers</b></h3>
      <div class="card-body">
        <canvas id="doughnut-chart8" width="300" height="300"></canvas>
        <button class="border text-dark pull-right">Download report</button>
      </div>
    </div>
  </div>
</div>

<!-------------------------------------Table------------------------------------------->
<div class="row" style="margin-bottom: 20px;">
  <div class="col-6 pull-left">
    <div class="col-sm-4 pull-left" style="margin-left: 20px;">
      <div class="row">
        <h3>View Reports</h3>
        <select name="select" id="select" class="form-control">
          <option value="0">State</option>
          <option value="1">Option #1</option>
          <option value="2">Option #2</option>
          <option value="3">Option #3</option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-6 pull-right">
    <div class="col-sm-4 pull-left">
      <div class="row">
        <h3>View Reports</h3>
        <select name="select" id="select" class="form-control">
          <option value="0">Worker Details</option>
          <option value="1">Option #1</option>
          <option value="2">Option #2</option>
          <option value="3">Option #3</option>
        </select>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-12">

  <div class="row col-lg-4">
    <div class="header">
      <h2>Field to be displayed</h2>
    </div>
    <form style="margin-left:20px">

      <div class="checkbox">
        <label><input type="checkbox" value="">District</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Gender</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Age Group</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">KYC</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Membership</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Status</label>
      </div>


    </form>
  </div>

  <div class="row col-lg-8 pull-right">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-light">
          <thead class="bg-dark text-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
              <td>Jacob</td>
              <td>Thornton</td>

            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script>
  ///////////////////////////////////////////  Chart 1//////////////////////////////////////////////////////
  <?php
  $a1 = 0;
  $a2 = 0;
  $a3 = 0;
  $b = 0;
  $c = 0;
  $g1 = 0;
  $g2 = 0;
  $h1 = 0;
  $h2 = 0;
  $j1 = 0;
  $j2 = 0;
  $k1 = 0;
  $k2 = 0;
  $m1 = 0;
  $m2 = 0;
  $m3 = 0;
  $m4 = 0;
  $m5 = 0;
  $n = 0;
  $o = 0;
  $p = 0;
  $r = 0;
  $s = 0;
  $t1 = 0;
  $t2 = 0;
  $t3 = 0;
  $u1 = 0;
  $u2 = 0;
  $w = 0;
  $document = $database->collection("service_provider")->where("state", "=", "Andhra Pradesh")->documents();
  foreach ($document as $doc) $a1++;
  $document = $database->collection("service_provider")->where("state", "=", "Arunachal Pradesh")->documents();
  foreach ($document as $doc) $a2++;
  $document = $database->collection("service_provider")->where("state", "=", "Assam")->documents();
  foreach ($document as $doc) $a3++;
  $document = $database->collection("service_provider")->where("state", "=", "Bihar")->documents();
  foreach ($document as $doc) $b++;
  $document = $database->collection("service_provider")->where("state", "=", "Chhattisgarh")->documents();
  foreach ($document as $doc) $c++;
  $document = $database->collection("service_provider")->where("state", "=", "Goa")->documents();
  foreach ($document as $doc) $g1++;
  $document = $database->collection("service_provider")->where("state", "=", "Gujarat")->documents();
  foreach ($document as $doc) $g2++;
  $document = $database->collection("service_provider")->where("state", "=", "Haryana")->documents();
  foreach ($document as $doc) $h1++;
  $document = $database->collection("service_provider")->where("state", "=", "Himachal Pradesh")->documents();
  foreach ($document as $doc) $h2++;
  $document = $database->collection("service_provider")->where("state", "=", "Jammu and Kashmir")->documents();
  foreach ($document as $doc) $j1++;
  $document = $database->collection("service_provider")->where("state", "=", "Jharkhand")->documents();
  foreach ($document as $doc) $j2++;
  $document = $database->collection("service_provider")->where("state", "=", "Karnataka")->documents();
  foreach ($document as $doc) $k1++;
  $document = $database->collection("service_provider")->where("state", "=", "Kerala")->documents();
  foreach ($document as $doc) $k2++;
  $document = $database->collection("service_provider")->where("state", "=", "Madhya Pradesh")->documents();
  foreach ($document as $doc) $m1++;
  $document = $database->collection("service_provider")->where("state", "=", "Maharashtra")->documents();
  foreach ($document as $doc) $m2++;
  $document = $database->collection("service_provider")->where("state", "=", "Manipur")->documents();
  foreach ($document as $doc) $m3++;
  $document = $database->collection("service_provider")->where("state", "=", "Meghalaya")->documents();
  foreach ($document as $doc) $m4++;
  $document = $database->collection("service_provider")->where("state", "=", "Mizoram")->documents();
  foreach ($document as $doc) $m5++;
  $document = $database->collection("service_provider")->where("state", "=", "Nagaland")->documents();
  foreach ($document as $doc) $n++;
  $document = $database->collection("service_provider")->where("state", "=", "Odisha")->documents();
  foreach ($document as $doc) $o++;
  $document = $database->collection("service_provider")->where("state", "=", "Punjab")->documents();
  foreach ($document as $doc) $p++;
  $document = $database->collection("service_provider")->where("state", "=", "Rajasthan")->documents();
  foreach ($document as $doc) $r++;
  $document = $database->collection("service_provider")->where("state", "=", "Sikkim")->documents();
  foreach ($document as $doc) $s++;
  $document = $database->collection("service_provider")->where("state", "=", "Tamil Nadu")->documents();
  foreach ($document as $doc) $t1++;
  $document = $database->collection("service_provider")->where("state", "=", "Telangana")->documents();
  foreach ($document as $doc) $t2++;
  $document = $database->collection("service_provider")->where("state", "=", "Tripura")->documents();
  foreach ($document as $doc) $t3++;
  $document = $database->collection("service_provider")->where("state", "=", "Uttar Pradesh")->documents();
  foreach ($document as $doc) $u1++;
  $document = $database->collection("service_provider")->where("state", "=", "Uttarakhand")->documents();
  foreach ($document as $doc) $u2++;
  $document = $database->collection("service_provider")->where("state", "=", "West Bengal")->documents();
  foreach ($document as $doc) $w++;
  ?>
  var a1 = <?php echo $a1; ?>;
  var a2 = <?php echo $a2; ?>;
  var a3 = <?php echo $a3; ?>;
  var b = <?php echo $b; ?>;
  var c = <?php echo $c; ?>;
  var g1 = <?php echo $g1; ?>;
  var g2 = <?php echo $g2; ?>;
  var h1 = <?php echo $h1; ?>;
  var h2 = <?php echo $h2; ?>;
  var j1 = <?php echo $j1; ?>;
  var j2 = <?php echo $j2; ?>;
  var k1 = <?php echo $k1; ?>;
  var k2 = <?php echo $k2; ?>;
  var m1 = <?php echo $m1; ?>;
  var m2 = <?php echo $m2; ?>;
  var m3 = <?php echo $m3; ?>;
  var m4 = <?php echo $m4; ?>;
  var m5 = <?php echo $m5; ?>;
  var n = <?php echo $n; ?>;
  var o = <?php echo $o; ?>;
  var p = <?php echo $p; ?>;
  var r = <?php echo $r; ?>;
  var s = <?php echo $s; ?>;
  var t1 = <?php echo $t1; ?>;
  var t2 = <?php echo $t2; ?>;
  var t3 = <?php echo $t3; ?>;
  var u1 = <?php echo $u1; ?>;
  var u2 = <?php echo $u2; ?>;
  var w = <?php echo $w; ?>;

  new Chart(document.getElementById("doughnut-chart1"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh",
        "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
        "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
        "Uttar Pradesh", "Uttarakhand", "West Bengal"
      ],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7", "#EF9A9A", "#B71C1C", "#F06292", "#880E4F", "#BA68C8",
          "#EA80FC", "#B39DDB", "#9FA8DA", "#536DFE", "#283593", "#4FC3F7", "#0091EA", "#00BCD4", "#84FFFF", "#81C784", "#388E3C",
          "#69F0AE", "#00C853", "#AFB42B", "#827717", "#AEEA00", "#FBC02D", "#9feb34", "#8e5ea2"
        ],
        data: [a1, a2, a3, b, c, g1, g2, h1, h2, j1, j2, k1, k2, m1, m2, m3, m4, m5, n, o, p, r, s, t1, t2, t3, u1, u2, w]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      }

    }
  });


  ///////////////////////////////////////////  Chart 2//////////////////////////////////////////////////////

  <?php
  $a1 = 0;
  $a2 = 0;
  $a3 = 0;
  $b = 0;
  $c = 0;
  $g1 = 0;
  $g2 = 0;
  $h1 = 0;
  $h2 = 0;
  $j1 = 0;
  $j2 = 0;
  $k1 = 0;
  $k2 = 0;
  $m1 = 0;
  $m2 = 0;
  $m3 = 0;
  $m4 = 0;
  $m5 = 0;
  $n = 0;
  $o = 0;
  $p = 0;
  $r = 0;
  $s = 0;
  $t1 = 0;
  $t2 = 0;
  $t3 = 0;
  $u1 = 0;
  $u2 = 0;
  $w = 0;
  $document = $database->collection("service_seeker")->where("state", "=", "Andhra Pradesh")->documents();
  foreach ($document as $doc) $a1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Arunachal Pradesh")->documents();
  foreach ($document as $doc) $a2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Assam")->documents();
  foreach ($document as $doc) $a3++;
  $document = $database->collection("service_seeker")->where("state", "=", "Bihar")->documents();
  foreach ($document as $doc) $b++;
  $document = $database->collection("service_seeker")->where("state", "=", "Chhattisgarh")->documents();
  foreach ($document as $doc) $c++;
  $document = $database->collection("service_seeker")->where("state", "=", "Goa")->documents();
  foreach ($document as $doc) $g1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Gujarat")->documents();
  foreach ($document as $doc) $g2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Haryana")->documents();
  foreach ($document as $doc) $h1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Himachal Pradesh")->documents();
  foreach ($document as $doc) $h2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Jammu and Kashmir")->documents();
  foreach ($document as $doc) $j1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Jharkhand")->documents();
  foreach ($document as $doc) $j2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Karnataka")->documents();
  foreach ($document as $doc) $k1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Kerala")->documents();
  foreach ($document as $doc) $k2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Madhya Pradesh")->documents();
  foreach ($document as $doc) $m1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Maharashtra")->documents();
  foreach ($document as $doc) $m2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Manipur")->documents();
  foreach ($document as $doc) $m3++;
  $document = $database->collection("service_seeker")->where("state", "=", "Meghalaya")->documents();
  foreach ($document as $doc) $m4++;
  $document = $database->collection("service_seeker")->where("state", "=", "Mizoram")->documents();
  foreach ($document as $doc) $m5++;
  $document = $database->collection("service_seeker")->where("state", "=", "Nagaland")->documents();
  foreach ($document as $doc) $n++;
  $document = $database->collection("service_seeker")->where("state", "=", "Odisha")->documents();
  foreach ($document as $doc) $o++;
  $document = $database->collection("service_seeker")->where("state", "=", "Punjab")->documents();
  foreach ($document as $doc) $p++;
  $document = $database->collection("service_seeker")->where("state", "=", "Rajasthan")->documents();
  foreach ($document as $doc) $r++;
  $document = $database->collection("service_seeker")->where("state", "=", "Sikkim")->documents();
  foreach ($document as $doc) $s++;
  $document = $database->collection("service_seeker")->where("state", "=", "Tamil Nadu")->documents();
  foreach ($document as $doc) $t1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Telangana")->documents();
  foreach ($document as $doc) $t2++;
  $document = $database->collection("service_seeker")->where("state", "=", "Tripura")->documents();
  foreach ($document as $doc) $t3++;
  $document = $database->collection("service_seeker")->where("state", "=", "Uttar Pradesh")->documents();
  foreach ($document as $doc) $u1++;
  $document = $database->collection("service_seeker")->where("state", "=", "Uttarakhand")->documents();
  foreach ($document as $doc) $u2++;
  $document = $database->collection("service_seeker")->where("state", "=", "West Bengal")->documents();
  foreach ($document as $doc) $w++;
  ?>
  var a1 = <?php echo $a1; ?>;
  var a2 = <?php echo $a2; ?>;
  var a3 = <?php echo $a3; ?>;
  var b = <?php echo $b; ?>;
  var c = <?php echo $c; ?>;
  var g1 = <?php echo $g1; ?>;
  var g2 = <?php echo $g2; ?>;
  var h1 = <?php echo $h1; ?>;
  var h2 = <?php echo $h2; ?>;
  var j1 = <?php echo $j1; ?>;
  var j2 = <?php echo $j2; ?>;
  var k1 = <?php echo $k1; ?>;
  var k2 = <?php echo $k2; ?>;
  var m1 = <?php echo $m1; ?>;
  var m2 = <?php echo $m2; ?>;
  var m3 = <?php echo $m3; ?>;
  var m4 = <?php echo $m4; ?>;
  var m5 = <?php echo $m5; ?>;
  var n = <?php echo $n; ?>;
  var o = <?php echo $o; ?>;
  var p = <?php echo $p; ?>;
  var r = <?php echo $r; ?>;
  var s = <?php echo $s; ?>;
  var t1 = <?php echo $t1; ?>;
  var t2 = <?php echo $t2; ?>;
  var t3 = <?php echo $t3; ?>;
  var u1 = <?php echo $u1; ?>;
  var u2 = <?php echo $u2; ?>;
  var w = <?php echo $w; ?>;
  new Chart(document.getElementById("doughnut-chart2"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh",
        "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
        "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
        "Uttar Pradesh", "Uttarakhand", "West Bengal"
      ],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7", "#EF9A9A", "#B71C1C", "#F06292", "#880E4F", "#BA68C8",
          "#EA80FC", "#B39DDB", "#9FA8DA", "#536DFE", "#283593", "#4FC3F7", "#0091EA", "#00BCD4", "#84FFFF", "#81C784", "#388E3C",
          "#69F0AE", "#00C853", "#AFB42B", "#827717", "#AEEA00", "#FBC02D", "#9feb34", "#8e5ea2"
        ],
        data: [a1, a2, a3, b, c, g1, g2, h1, h2, j1, j2, k1, k2, m1, m2, m3, m4, m5, n, o, p, r, s, t1, t2, t3, u1, u2, w]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      }

    }
  });

  ///////////////////////////////////////////  Chart 3//////////////////////////////////////////////////////

  <?php
  $a1 = 0;
  $a2 = 0;
  $a3 = 0;
  $b = 0;
  $c = 0;
  $g1 = 0;
  $g2 = 0;
  $h1 = 0;
  $h2 = 0;
  $j1 = 0;
  $j2 = 0;
  $k1 = 0;
  $k2 = 0;
  $m1 = 0;
  $m2 = 0;
  $m3 = 0;
  $m4 = 0;
  $m5 = 0;
  $n = 0;
  $o = 0;
  $p = 0;
  $r = 0;
  $s = 0;
  $t1 = 0;
  $t2 = 0;
  $t3 = 0;
  $u1 = 0;
  $u2 = 0;
  $w = 0;
  $document = $database->collection("service_provider")->where("state", "=", "Andhra Pradesh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $a1 = $a1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Arunachal Pradesh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $a2 = $a2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Assam")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $a3 = $a3 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Bihar")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $b = $b + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Chhattisgarh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $c = $c + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Goa")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $g1 = $g1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Gujarat")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $g2 = $g2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Haryana")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $h1 = $h1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Himachal Pradesh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $h2 = $h2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Jammu and Kashmir")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $j1 = $j1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Jharkhand")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $j2 = $j2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Karnataka")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $k1 = $k1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Kerala")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $k2 = $k2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Madhya Pradesh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $m1 = $m1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Maharashtra")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $m2 = $m2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Manipur")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $m3 = $m3 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Meghalaya")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $m4 = $m4 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Mizoram")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $m5 = $m5 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Nagaland")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $n = $n + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Odisha")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $o = $o + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Punjab")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $p = $p + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Rajasthan")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $r = $r + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Sikkim")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $s = $s + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Tamil Nadu")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $t1 = $t1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Telangana")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $t2 = $t2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Tripura")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $t3 = $t3 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Uttar Pradesh")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $u1 = $u1 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "Uttarakhand")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $u2 = $u2 + $bal['balance'];
  }
  $document = $database->collection("service_provider")->where("state", "=", "West Bengal")->documents();
  foreach ($document as $doc) {
    $bal = $database->collection('sp_money')->document($doc->id())->snapshot()->data();
    $w = $w + $bal['balance'];
  }
  ?>
  var a1 = <?php echo $a1; ?>;
  var a2 = <?php echo $a2; ?>;
  var a3 = <?php echo $a3; ?>;
  var b = <?php echo $b; ?>;
  var c = <?php echo $c; ?>;
  var g1 = <?php echo $g1; ?>;
  var g2 = <?php echo $g2; ?>;
  var h1 = <?php echo $h1; ?>;
  var h2 = <?php echo $h2; ?>;
  var j1 = <?php echo $j1; ?>;
  var j2 = <?php echo $j2; ?>;
  var k1 = <?php echo $k1; ?>;
  var k2 = <?php echo $k2; ?>;
  var m1 = <?php echo $m1; ?>;
  var m2 = <?php echo $m2; ?>;
  var m3 = <?php echo $m3; ?>;
  var m4 = <?php echo $m4; ?>;
  var m5 = <?php echo $m5; ?>;
  var n = <?php echo $n; ?>;
  var o = <?php echo $o; ?>;
  var p = <?php echo $p; ?>;
  var r = <?php echo $r; ?>;
  var s = <?php echo $s; ?>;
  var t1 = <?php echo $t1; ?>;
  var t2 = <?php echo $t2; ?>;
  var t3 = <?php echo $t3; ?>;
  var u1 = <?php echo $u1; ?>;
  var u2 = <?php echo $u2; ?>;
  var w = <?php echo $w; ?>;
  new Chart(document.getElementById("doughnut-chart3"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh",
        "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
        "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
        "Uttar Pradesh", "Uttarakhand", "West Bengal"
      ],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7", "#EF9A9A", "#B71C1C", "#F06292", "#880E4F", "#BA68C8",
          "#EA80FC", "#B39DDB", "#9FA8DA", "#536DFE", "#283593", "#4FC3F7", "#0091EA", "#00BCD4", "#84FFFF", "#81C784", "#388E3C",
          "#69F0AE", "#00C853", "#AFB42B", "#827717", "#AEEA00", "#FBC02D", "#9feb34", "#8e5ea2"
        ],
        data: [a1, a2, a3, b, c, g1, g2, h1, h2, j1, j2, k1, k2, m1, m2, m3, m4, m5, n, o, p, r, s, t1, t2, t3, u1, u2, w]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      }

    }
  });

  ///////////////////////////////////////////  Chart 4//////////////////////////////////////////////////////
  <?php
  $ac = 0;
  $on = 0;
  $co = 0;
  $ca = 0;

  $city = $database->collection("booking_details");
  $documents = $city->documents();
  foreach ($documents as $document) {
    $doc = $document->id();

    $city1 = $database->collection("booking_details")->document("$doc")->snapshot()->data();
    $ac = $ac + count($city1['accepted']);
    $on = $on + count($city1['onGoing']);
    $co = $co + count($city1['completed']);
    $ca = $ca + count($city1['is_cancelled']);
  }

  ?>
  var ac = <?php echo $ac; ?>;
  var on = <?php echo $on; ?>;
  var co = <?php echo $co; ?>;
  var ca = <?php echo $ca; ?>;
  new Chart(document.getElementById("doughnut-chart4"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Accepted", "Completed", "Ongoing", "Cancelled"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7"],
        data: [ac, on, co, ca]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      },

    }
  });

  ///////////////////////////////////////////  Chart 5//////////////////////////////////////////////////////
  new Chart(document.getElementById("doughnut-chart5"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7"],
        data: [2478, 5267, 734, 784]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      },

    }
  });

  ///////////////////////////////////////////  Chart 6//////////////////////////////////////////////////////
  new Chart(document.getElementById("doughnut-chart6"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7"],
        data: [2478, 5267, 734, 784]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      },

    }
  });

  ///////////////////////////////////////////  Gender wise- Workers//////////////////////////////////////////////////////
  <?php
  $male1 = 0;
  $female1 = 0;
  $other1 = 0;
  $document = $database->collection('service_provider')->where("gender", "=", "Male")->documents();
  foreach ($document as $doc) $male1++;

  $document = $database->collection('service_provider')->where("gender", "=", "Female")->documents();
  foreach ($document as $doc) $female1++;

  $document = $database->collection('service_provider')->where("gender", "=", "Other")->documents();
  foreach ($document as $doc) $other1++;
  ?>
  var male1 = <?php echo $male1; ?>;
  var female1 = <?php echo $female1; ?>;
  var other1 = <?php echo $other1; ?>;
  new Chart(document.getElementById("doughnut-chart7"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Male-" + male1, "Female-" + female1, "Other-" + other1],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7"],
        data: [male1, female1, other1]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      },

    }
  });

  /////////////////////////////////////////// gender-wise customers//////////////////////////////////////////////////////
  <?php
  $male = 0;
  $female = 0;
  $other = 0;
  $document = $database->collection('service_seeker')->where("gender", "=", "Male")->documents();
  foreach ($document as $doc) $male++;

  $document = $database->collection('service_seeker')->where("gender", "=", "Female")->documents();
  foreach ($document as $doc) $female++;

  $document = $database->collection('service_seeker')->where("gender", "=", "Other")->documents();
  foreach ($document as $doc) $other++;
  ?>
  var male = <?php echo $male; ?>;
  var female = <?php echo $female; ?>;
  var other = <?php echo $other; ?>;
  new Chart(document.getElementById("doughnut-chart8"), {
    type: 'doughnut',
    align: 'right',
    data: {
      labels: ["Male-" + male, "Female-" + female, "Other-" + other],
      datasets: [{
        label: "Gender wise Customers",
        backgroundColor: ["#9feb34", "#8e5ea2", "#eb3471", "#34ebb7"],
        data: [male, female, other]
      }]
    },
    options: {
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center",
        position: "right"
      },

    }
  });
</script>

<?php include 'footer.php'; ?>