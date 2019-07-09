<?php
// to fetch data from remote site
$handle = curl_init();
$url = "https://www.ladygaga.com";
curl_setopt_array($handle,
        array(
            CURLOPT_URL => $url, //remote url
            CURLOPT_RETURNTRANSFER => true //Enables the assignment of the data that we download from the remote site to a variable. In this example, we assign the data into the variable $output.
            
        ));
$output = curl_exec($handle);
curl_close($handle);
echo "<pre>";
print_r($output);

//to download file from server
$url = "https://www.gutenberg.org/files/46852/46852-h/46852-h.htm";
$file = __DIR__ . DIRECTORY_SEPARATOR . "the_divine_comedy.html";

$file_handle = fopen($file,"w+");
$handle = curl_init();
curl_setopt_array($handle, array(
    CURLOPT_URL => $url,
    CURLOPT_FILE => $file_handle //use this parameter to download file
));

$data = curl_exec($handle);
curl_close($handle);
fclose($file_handle);

// handling the response
$url = "https://www.gutenberg.org/files/46852/46852-h/46852-h.htm";
 
$file = __DIR__ . DIRECTORY_SEPARATOR . "the_divine_comedy.html";
 
$handle = curl_init();
 
$fileHandle = fopen($file, "w");
 
curl_setopt_array($handle,
  array(
    CURLOPT_URL    => $url,
    CURLOPT_FILE   => $fileHandle,
    CURLOPT_HEADER => true // get response data
  )
);
 
$data = curl_exec($handle);
 
$responseCode   = curl_getinfo($handle, CURLINFO_HTTP_CODE); //get response code
 
$downloadLength = curl_getinfo($handle, CURLINFO_CONTENT_LENGTH_DOWNLOAD); //get file download length in bytes
 
if(curl_errno($handle)) //display error if any
{
  print curl_error($handle);
}
else
{
  if($responseCode == "200") echo "successful request";
    
  echo " # download length : " . $downloadLength;
 
  curl_close($handle);
 
  fclose($fileHandle);
}

//send form data
$handle = curl_init();
 
$url = "https://localhost/curl/theForm.php";
 
// Array with the fields names and values.
// The field names should match the field names in the form.
 
$postData = array(
  'firstName' => 'Lady',
  'lastName'  => 'Gaga',
  'submit'    => 'ok'
);
 
curl_setopt_array($handle,
  array(
     CURLOPT_URL => $url,
     // Enable the post response.
    CURLOPT_POST       => true,
    // The data to transfer with the response.
    CURLOPT_POSTFIELDS => $postData,
    CURLOPT_RETURNTRANSFER     => true,
  )
);
 
$data = curl_exec($handle);
 
curl_close($handle);
 
echo $data;

//authentication
curl_setopt_array($handle,
  array(
    CURLOPT_URL => $url,
   CURLOPT_HTTPAUTH => CURLAUTH_ANY,
   CURLOPT_USERPWD  => "$username:$password",
   CURLOPT_RETURNTRANSFER   => true,
  )
);

//cookies
$handle = curl_init();
 
$url = "https://www.ladygaga.com/artrave-the-artpop-ball";
 
$file = __DIR__ . DIRECTORY_SEPARATOR . "cookie.txt";
 
curl_setopt_array($handle,
  array(
    CURLOPT_URL => $url,
     // The file to which the cookies need to be written.
    CURLOPT_COOKIEFILE => $file,
    // The file freom which the cookies need to be read.
    CURLOPT_COOKIEJAR  => $file,
    CURLOPT_RETURNTRANSFER     => true,
  )
);
 
$data = curl_exec($handle);
 
curl_close($handle);


