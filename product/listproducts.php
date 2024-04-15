<?php include('../layouts/header.php');?>

<?php include('../layouts/top_header.php');?>

<?php include('../layouts/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product List</li>
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
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Manufacture Date</th>
                    <th>Expire Date</th>
                    <th>Quantity</th>
                    <th style="width:120px;">Options</th>
                 
                  </tr>
                  </thead>
                  <tbody>
<?php
// Include database connection file
include('../config/connect.php');

// Fetch products from the database
$sql = "SELECT * FROM `product`";
$result = $conn->query($sql);

// Check if there are any products
if ($result && $result->num_rows > 0) {
    // Loop through each product and display it in a table row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["product_id"] . "</td>
                <td>" . $row["product_name"] . "</td>
                <td>" . $row["price"] . "</td>
                <td>" . $row["category"] . "</td>
                <td>" . $row["mf_date"] . "</td>
                <td>" . $row["expire_date"] . "</td>
                <td>" . $row["quantity"] . "</td>
                <td>  
                    <a href='updateproduct.php?product_id=".$row['product_id'] . "' class='btn btn-info'><i class='fas fa-eye'></i></a>
                    <a href='deleteproduct.php?id=".$row['product_id'] . "' class='btn btn-danger' style='margin-left:2px;'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
    }
} else {
    // If no products found, display a message
    echo "<tr><td colspan='8'>No products found</td></tr>";
}
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<?php include('../layouts/footer.php');?>
