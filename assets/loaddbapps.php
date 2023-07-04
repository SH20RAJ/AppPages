<hr hint="popular-apps">
<div class="page">
  <div class="wrp">
    <h1><?php echo $user; ?></h1>
    <div class="content">
      <div class="app_list">
        <?php
        // Retrieve the latest 20 uploaded apps data from the "apps" table
        $sql = "SELECT * FROM apps where uploader_id = " . $user . " ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through the result and fetch app data
            foreach ($result as $row) {
                echo $row['app_name'].'<br/>';
            }
        } else {
            echo "No apps found.";
        }
        ?>
      </div>
    </div>
  </div>
</div>
