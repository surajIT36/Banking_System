<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer History</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    .row {
      padding: 0px;
      text-align: center;
    }

    .btn {
      background-color: #686363;
      color: white;
    }

    .container-fuild {
      background-color: #e39393fa;
      height: 650px;
      margin-bottom: 0px;
    }

    .container {
      background-color: #f6e0c3ed;
    }

    h2 {
      color: #000;
    }
  </style>
</head>

<body>
  <?php
  include 'config.php';
  $sql = "SELECT * FROM users";
  $result = mysqli_query($conn, $sql);
  ?>
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fuild">
    <div class="container">
      <h2 class="text-center pt-4">All Customer List</h2>
      <br>
      <div class="row">
        <div class="col">
          <div class="table-responsive-sm">
            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
              <thead>
                <tr>
                  <th scope="col" class="text-center py-2">Id</th>
                  <th scope="col" class="text-center py-2">Name</th>
                  <th scope="col" class="text-center py-2">Operation</th>
                </tr>
              </thead>
              <tbody>

                <?php
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn">View Details</button></a></td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>