 HI
 <?php
     $servername = "127.0.0.1";
     $username = "root";
     $password = "Thankful&Blessed8";

     // Create connection
     $conn = new mysqli($servername, $username, $password);

     // Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
     }
     if (isset($_POST["query"])) {
          $output = '';
          $query = "SELECT * FROM tbl_country WHERE country_name LIKE '%" . $_POST["query"] . "%'";
          $result = mysqli_query($connect, $query);
          $output = '<ul class="list-unstyled">';
          if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_array($result)) {
                    $output .= '<li>' . $row["country_name"] . '</li>';
               }
          } else {
               $output .= '<li>Country Not Found</li>';
          }
          $output .= '</ul>';
          echo $output;
     }


     ?>
