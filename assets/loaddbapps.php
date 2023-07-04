<hr hint="popular-apps">
<div class="page">
  <div class="wrp">
    <h1><?php $user = 2; echo $user; ?></h1>
    <div class="content">
      <div class="app_list">
        <?php
        // Retrieve the latest 20 uploaded apps data from the "apps" table
        $sql = "SELECT * FROM apps where uploader_id = " . $user . " ORDER BY upload_time DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through the result and fetch app data
            while ($row = $result->fetch_assoc()) {
                ehco $appName = $row['app_name'];
            }
        } 
        ?>
      </div>
    </div>
  </div>
</div>
