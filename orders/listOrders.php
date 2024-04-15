<?php include('../layouts/header.php'); ?>

<?php include('../layouts/top_header.php'); ?>

<?php include('../layouts/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Orders</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
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
                    <th>Customer</th>
                    <th>date</th>
                    <th>Product</th>
                    <th>Total</th>
                    <th>Quantity</th>
                    <th>State</th>
                    <th>Action</th>

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
                  $sql = "SELECT o.id, c.customer_name AS customer_name, o.date, p.product_name AS product_name, o.total, o.quantity, o.state 
                  FROM `orders` o
                  JOIN customer c ON o.customer_id = c.customer_id
                  JOIN product p ON o.product_id = p.product_id
                  order by o.id desc";

                  $result = mysqli_query($conn, $sql);

                  // Step 3: Fetch the results row by row
                  if (mysqli_num_rows($result) > 0) {
                    // Step 4: Display each row

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";

                      echo "<td>" . $row["id"] . "</td>";
                      echo "<td>" . $row["customer_name"] . "</td>";
                      echo "<td>" . $row["date"] . "</td>";
                      echo "<td>" . $row["product_name"] . "</td>";
                      echo "<td>" . $row["total"] . "</td>";
                      echo "<td>" . $row["quantity"] . "</td>";
                      echo "<td>" . $row["state"] . "</td>";

                      echo "<td>  
                        <a href='updateOrder.php?id=" . $row['id'] . "' class='btn btn-info'><i class='fas fa-eye'></i></a>
                        <a href='deleteOrder.php?id=" . $row['id'] . "' class='btn btn-danger' style='margin-left:2px;'><i class='fas fa-trash'></i></a>
                  </td>";

                      echo "</tr>";
                    }
                    echo "</table>";

                    // Display each field of the row
                    // echo "ID: " . $row["id"]. " - Name: " . $row["user_name"]. " - role: " . $row["role"]. "<br>";
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


<?php include('../layouts/footer.php'); ?>