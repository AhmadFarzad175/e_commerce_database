<?php include('../layouts/header.php');?>

<?php include('../layouts/top_header.php');?>

<?php include('../layouts/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>customer_name</th>
                    <th>phone</th>
                    <th>age </th>
                    <th>gender</th>
                    <th >option</th>
                 
                  </tr>
                  </thead>
                  <tbody>




<?php


// Step 1: Connect to the database
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "e_commerce"; // Change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Execute the SQL query
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

// Step 3: Fetch the results row by row
if (mysqli_num_rows($result) > 0) {
    // Step 4: Display each row
      
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>" . $row["customer_id"] . "</td>";
            echo "<td>" . $row["customer_name"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            //echo  $row['photo'];
            echo "<td>  
                        <a href='updatecustomer.php?id=".$row['customer_id'] . "' class='btn btn-info'><i class='fas fa-eye'></i></a>
                        <a href='deletecustomer.php?id=".$row['customer_id'] . "' class='btn btn-danger' style='margin-left:2px;'><i class='fas fa-trash'></i></a>
                  </td>";           

            echo "</tr>";
        }
        echo "</table>";
    
        // Display each field of the row
       // echo "ID: " . $row["id"]. " - Name: " . $row["customer_name"]. " - role: " . $row["role"]. "<br>";
        // You can access other fields similarly
    
} else {
    echo "0 results";
}

// Close connection

?>






            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<?php include('../layouts/footer.php');?>

