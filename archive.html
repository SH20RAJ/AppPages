<!DOCTYPE html>
<html>
<head>
  <title>Archive.org Video Upload</title>
</head>
<body>
  <h1>Archive.org Video Upload</h1>
  <input type="file" id="fileInput">
  <button id="uploadButton">Upload</button>

  <script>
    // Set your Archive.org S3 access key and secret key
    const accessKey = 'kUhoWWIWXkSQrEre';
    const secretKey = 'YdZSn3wwE2EDVsTC';

    // Set the desired collection for the uploaded file
    const collection = 'your_collection'; // Replace with your desired collection name

    // Set additional metadata for the uploaded file (optional)
    const metadata = {
      title: 'My Uploaded Video',
      description: 'This is a test upload of a video',
      // Add more metadata fields as needed
    };

    // Get references to the file input and upload button elements
    const fileInput = document.getElementById('fileInput');
    const uploadButton = document.getElementById('uploadButton');

    // Listen for button click event
    uploadButton.addEventListener('click', handleUpload);

    // Handle upload button click
    function handleUpload() {
      const file = fileInput.files[0];

      // Create FormData object and append the necessary fields
      const formData = new FormData();
      formData.append('accesskey', accessKey);
      formData.append('secretkey', secretKey);
      formData.append('collection', collection);
      formData.append('metadata', JSON.stringify(metadata));
      formData.append('file', file);

      // Send the POST request to Archive.org
      fetch('https://s3.us.archive.org', {
        method: 'POST',
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          // Handle the response
          if (data.error) {
            // There was an error
            console.error('Error uploading the file to Archive.org.', data.error);
          } else {
            // The upload was successful
            console.log('File uploaded successfully!');
            console.log('Identifier:', data.metadata.identifier);
          }
        })
        .catch((error) => {
          console.error('Error uploading the file to Archive.org.', error);
        });
    }
  </script>
</body>
</html>
