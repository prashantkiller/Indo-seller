<?php



$servername = "localhost";
$username = "id21337811_fake";
$password = "Deepu@123";
$database = "id21337811_fake";
$conn = new mysqli($servername , $username , $password , $database);
if(!$conn){
    echo " CONNECTION TO DATABSE FAILED";
    
}




function sendMessageH($chat_id, $text) {
    $token = '6715759787:AAH6zO0Ibs-OeNBNIC84UKVxnLRKCqaDyTE'; // Replace with your bot token
    $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
    $data = array(
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => 'HTML' // Add parse_mode parameter with value 'HTML'
    );
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}


function sendMessage($chat_id, $text) {
    $token = '6715759787:AAH6zO0Ibs-OeNBNIC84UKVxnLRKCqaDyTE'; // Replace with your bot token
    $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
    $data = array('chat_id' => $chat_id, 'text' => $text);
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}


$botToken = "6715759787:AAH6zO0Ibs-OeNBNIC84UKVxnLRKCqaDyTE";


function sendImageToTelegramBot($botToken, $chatID, $imagePath, $caption = '') {
    $url = "https://api.telegram.org/bot{$botToken}/sendPhoto";
        $postFields = array(
            'chat_id' => $chatID,
            'photo' => new CURLFile($imagePath),
            'caption' => $caption,
            'parse_mode' => 'HTML'
        );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}




$input = file_get_contents('php://input');
$update = json_decode($input);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$username = $message->chat->username;
$user_n = $message->chat->username;
$token = "6715759787:AAH6zO0Ibs-OeNBNIC84UKVxnLRKCqaDyTE";
$bot_token = $token;
$botToken = '6715759787:AAH6zO0Ibs-OeNBNIC84UKVxnLRKCqaDyTE';
$admin = "6515903309";
$xnx = true;
$stop = false;
$admin2 = "6515903309";
// $txt = urlencode("here is my text.\n and this is a new line \n another new line");
// file_get_contents("https://api.telegram.org/bot$token/sendmessage?chat_id=$chat_id&text=$text")
$channel = "@ROYAL_NAWAZISH_GAMING";
    
    
if($chat_id == ""){
    sendMessage($chat_id , "YOU ARE BANNED");
}
else{
    if($chat_id > 0){
    
    
    
    
  
    
      if($text == "/start"){

              // Set the keyboard array


                  // Create the keyboard markup
                  $keyboard = array(
                      array('Buy Indo Ig' , 'Buy Old Ig'),
                      array('Buy Fresh'),
                      array('My Balance','Add Funds'),
                      array('Update Bot', 'Contact','Stock')
                  );
                  $markup = array(
                      'keyboard' => $keyboard,
                      'resize_keyboard' => true,
                  );
                  $encodedMarkup = json_encode($markup);

                  // Set the message text and parameters
                  $messageText = "Hey $user_n";
                  $params = array(
                      'chat_id' => $chat_id,
                      'text' => $messageText,
                      'reply_markup' => $encodedMarkup,
                  );

                  // Send the message with the keyboard
                  $ch = curl_init('https://api.telegram.org/bot'.$botToken.'/sendMessage');
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_exec($ch);
                  curl_close($ch);







          $sql = "SELECT * FROM `id` WHERE `chat_id` = '$chat_id'";
          $result = mysqli_query($conn, $sql);


          if (mysqli_num_rows($result) > 0) {
              // data is already in the database
$txt = "<b>@$username You Are Already a Bot User</b>";
        sendMessageH($chat_id , $txt);

          } else {
              // data is not in the database
              sendMessageH($chat_id , "<b>@$username You New Bot User</b>");
              $sql = "INSERT INTO `id` (`username`, `chat_id` , `funds`) VALUES ('$username', '$chat_id' , '0')";
                $file_path = 'admin/users.txt';
                $current_count = intval(file_get_contents($file_path)); // Convert string to integer
                $new_count = $current_count + 1;
                file_put_contents($file_path, strval($new_count)); // Write the new count back to the file


              $result = mysqli_query($conn , $sql);
              if($result){
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$txt");
              }else{
                  // file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=mysqli_error($conn)");
                  $x =   mysqli_error($conn);
                              file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$x AN ERROR OCCURED PLEASE SEND THIS MESSAGE TO THE ADMIN");

              }
          }


      }


      if($text == "Update Bot"){
          // Create the keyboard markup
 // Create the keyboard markup
                  $keyboard = array(
                      array('Buy Indo Ig' , 'Buy Old Ig'),
                      array('Buy Fresh'),
                      array('My Balance','Add Funds'),
                      array('Update Bot', 'Contact','Stock')
                  );
                  $markup = array(
                      'keyboard' => $keyboard,
                      'resize_keyboard' => true,
                  );
                  $encodedMarkup = json_encode($markup);

                  // Set the message text and parameters
                  $messageText = 'Updating.....';
                  $params = array(
                      'chat_id' => $chat_id,
                      'text' => $messageText,
                      'reply_markup' => $encodedMarkup,
                  );

                  // Send the message with the keyboard
                  $ch = curl_init('https://api.telegram.org/bot'.$botToken.'/sendMessage');
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_exec($ch);
                  curl_close($ch);




                  sendMessage($chat_id,"Bot Updates Success");
      }

      
      elseif($text == "/id"){
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=CHAT ID IS :   $chat_id");

      }


     if($text == "Contact"){
         sendMessage($chat_id , "FOR HELP DM @ITS_DEVIL1234");
     }



      


      elseif($text == "/funds" || $text == "My Balance"){
          $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
              $result = mysqli_query($conn, $sql);

              while($row = mysqli_fetch_row($result)) {
              $funds = $row[0];
            sendMessageH($chat_id , "<b>BALANCE FETCHED @$username
            
YOUR BALANCE IS:- : Rs$funds

CONTACT  @ROYAL_NAWAZISH_GAMING TO ADD FUNDS MANUALLY</b>");
      }
      }
if($text == "/buy" || $text == "Buy Indo Ig"){
            $api_url = "https://api.telegram.org/bot$token/";
            $price = file_get_contents('admin/indo.txt');;
            sendMessageH($chat_id, "<b>PRICE PER INDO IG IS : $price

HOW MUCH YOU WANT TO BUY?</b>");
              $keyboard = [
                ['1','2','3','4','5'],
                ['6','7','8','9','10'],
                ['11','12','13','14','15'],
                ['16','17','18','19','20'],
                ['Close']
            ];
            $reply_markup = json_encode([
                'keyboard' => $keyboard,
                'resize_keyboard' => true,
                'one_time_keyboard' => false
            ]);
            $response = [
                'chat_id' => $chat_id,
                'text' => 'Select a number:',
                'reply_markup' => $reply_markup
            ];
            $response_json = json_encode($response);
            file_get_contents($api_url . "sendMessage?chat_id=$chat_id&text=" . urlencode($response['text']) . "&reply_markup=" . urlencode($response['reply_markup']));
            
        }
         if (is_numeric($text) && $text <3000) {
            $price = file_get_contents('admin/indo.txt');;
            $selectedValue = (int)$text;
            $total = $price * $selectedValue;
            $totalox = $price * $selectedValue;
            sendMessage($chat_id ,"Total Price is : " . $total . "Rs");
            $sql = "SELECT COUNT(*)  FROM stock WHERE status = 'available'";
            $result = mysqli_query($conn , $sql);
            $rowx = $result->fetch_row();
            $available = $rowx[0];
            
            
            $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
              $result = mysqli_query($conn, $sql);

             $row = mysqli_fetch_row($result);
              $funds = $row[0];
              if($funds >= $total){
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=Checking Availablity of Accounts");
                  
                  
                  
                         if ($available < $selectedValue) {
                            sendMessage($chat_id, "oops! We are out of stock. Come back soon\n\nAvailable Stock is: " . $available);
                        } else {
                            mysqli_autocommit($conn, FALSE); // disable auto-commit mode
                            
                            try {
                                $num_rows = $selectedValue; // Number of rows to send
                                $query = "SELECT * FROM stock WHERE status = 'available' LIMIT $num_rows FOR UPDATE"; // SQL query to select first $num_rows available rows with locking
                                $result = mysqli_query($conn, $query); // Execute the query
                                
                                // Check if the query was successful
                                if ($result && mysqli_num_rows($result) > 0) {
                                    $total = 0;
                                    // Loop through the rows and calculate the total cost
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $total += $row['price'];
                                    }
                                    
                                    // Check if the user has enough funds to make the purchase
                                    if ($funds >= $total) {
                                        // Deduct the cost from the user's funds
                                        $funds -= $total;
                                        
                                        // Loop through the rows and send them as messages
                                        mysqli_data_seek($result, 0); // reset result pointer
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $message = "Username: {$row['username']}\nPassword : {$row['password']}";
                                            sendMessage($chat_id, $message);
                                            // Update the row status to "sold"
                                            $update_query = "UPDATE stock SET status = 'sold' WHERE Sno = {$row['Sno']}";
                                            mysqli_query($conn, $update_query);
                                        }
                                        
                                         $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
                                          $result = mysqli_query($conn, $sql);
                            
                                          while($row = mysqli_fetch_row($result)) {
                                          $funds = $row[0];
                                              
                                          }
                                          $fund = $funds - $totalox;
                                    
                                        $fund_qry = "UPDATE id SET funds = $fund WHERE chat_id = $chat_id";
                                        mysqli_query($conn , $fund_qry);
                                        
                                        mysqli_commit($conn); // commit the transaction
                                        
                                        sendMessage($admin , "Hey! $user_n : Purchased $selectedValue IG");
                                    } else {
                                        sendMessage($chat_id, "Sorry, you don't have enough funds to make the purchase.");
                                    }
                                    
                                    mysqli_free_result($result); // free the result set
                                } else {
                                    sendMessage($chat_id, "Sorry, there are not enough available Instagram accounts to fulfill your request.");
                                }
                            } catch (Exception $e) {
                                mysqli_rollback($conn); // rollback the transaction on error
                                sendMessage($chat_id, "Oops! Something went wrong. Please try again later.");
                            }
                            
                            mysqli_autocommit($conn, TRUE); // re-enable auto-commit mode
                        }

                  
              }
              else{
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=INSUFFICIENT FUNDS To Add Funds Contact @devillsamar or Type /funds To Check Your Current Balance");

              }
                  
            }
            
            

        
        
        
        
        
        if($text == "Close" || $text == "✅Closed Successfuly"){
            $keyboard = array(
                      array('Buy Indo Ig' , 'Buy Old Ig'),
                      array('Buy Fresh'),
                      array('My Balance','Add Funds'),
                      array('Update Bot', 'Contact','Stock')
                  );
                  $markup = array(
                      'keyboard' => $keyboard,
                      'resize_keyboard' => true,
                  );
                  $encodedMarkup = json_encode($markup);

                  // Set the message text and parameters
                  $messageText = 'Purchase Canceled!';
                  $params = array(
                      'chat_id' => $chat_id,
                      'text' => $messageText,
                      'reply_markup' => $encodedMarkup,
                  );

                  // Send the message with the keyboard
                  $ch = curl_init('https://api.telegram.org/bot'.$botToken.'/sendMessage');
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_exec($ch);
                  curl_close($ch);

            

    
    }
    if($text == "Stock" || $text == "Stock"){
        $sql = "SELECT COUNT(*)  FROM stock WHERE status = 'available'";
        $result = mysqli_query($conn , $sql);
        $row = $result->fetch_row();
        $available = $row[0];
        
        $sql = "SELECT COUNT(*)  FROM fresh WHERE status = 'available'";
        $result = mysqli_query($conn , $sql);
        $row = $result->fetch_row();
        $available_fresh = $row[0];
        
        $sql = "SELECT COUNT(*)  FROM pp WHERE status = 'available'";
        $result = mysqli_query($conn , $sql);
        $row = $result->fetch_row();
        $available_pp = $row[0];
        sendMessageH($chat_id , "<b>► AVAILABLE STOCK</b> : 
        
<b>INDO : $available_fresh</b>

<b>FRESH IG : $available</b>

<b>OLD IG : $available_pp</b>
");
        

    }
}
elseif($chat_id <= 0){ 
	sendMessage($chat_id , "Bot is Not Allowed in Groups");
}







if ($chat_id == $admin && strpos($text, "/code") === 0) {
    $parts = explode(' ', $text);
    $amount = $parts[1];
    $code = rand(1000000000, 2000000000);
    $sql = "INSERT INTO `coupons` (`codes`, `value`) VALUES ('$code', '$amount')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        sendMessage($admin, "New Redeem Code Generated \n\nCODE : " . $code . "\n\n VALUE : " . $amount . "\n\nTYPE /redeem CODE TO REDEEM THE CODE");
    } else {
        sendMessage($admin, "Error generating coupon code. Please try again.");
    }
}

if(strpos($text , '/redeem') === 0){
    $parts = explode(' ' , $text);
    $message = $parts[1];
    $sql = "SELECT * FROM coupons WHERE codes = $message";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_fetch_assoc($result);
    
    if($row['codes'] > 0){
        $sql = "DELETE  FROM coupons WHERE codes = $message";
        $result = mysqli_query($conn , $sql);
        $value = $row['value'];
        sendMessage($chat_id , "Congratulations You Have Successfuly Received " . $row['value'] . "Rs");
        sendMessage($admin , '@'.$username . " Successfuly Redeemed Code");
        
        $sqlx = "SELECT funds FROM id WHERE chat_id = $chat_id";
        $resultx = mysqli_query($conn , $sqlx);
        $row = mysqli_fetch_assoc($resultx);
        $funds = $row['funds'];
        $newfunds = $funds + $value;
        $sql_2 = "UPDATE `id` SET `funds` = '$newfunds' WHERE `id`.`chat_id` = $chat_id";
        $result2 = mysqli_query($conn , $sql_2);
        
    }
    else{
        sendMessage($chat_id , "Code is Already Redeemed or Invalid");
    }

}

if($text == "Buy Fresh"){
            $api_url = "https://api.telegram.org/bot$token/";
            $price = file_get_contents('admin/fresh.txt');;
            sendMessageH($chat_id , "<b>PRICE PER FRESH IG :- $price

HOW MANY DO YOU WANT?</b>");
            
              $keyboard = [
                ['FRESH 1 ', 'FRESH 2' ,'FRESH 3' , 'FRESH 4' , 'FRESH 5'],
                ['FRESH 6', 'FRESH 7' ,'FRESH 8' , 'FRESH 9' , 'FRESH 10'],
                ['FRESH 11', 'FRESH 12' ,'FRESH 13' , 'FRESH 14' , 'FRESH 15'],
                ['FRESH 16', 'FRESH 17' ,'FRESH 18' , 'FRESH 19' , 'FRESH 20'],
                ['Close']
            ];
            $reply_markup = json_encode([
                'keyboard' => $keyboard,
                'resize_keyboard' => true,
                'one_time_keyboard' => false
            ]);
            $response = [
                'chat_id' => $chat_id,
                'text' => 'Select a number:',
                'reply_markup' => $reply_markup
            ];
            $response_json = json_encode($response);
            file_get_contents($api_url . "sendMessage?chat_id=$chat_id&text=" . urlencode($response['text']) . "&reply_markup=" . urlencode($response['reply_markup']));
            
        }
         
       

        

        
if(strpos($text , 'FRESH') === 0) {
        $part =  explode(' ' , $text);
        $quant = $part[1];
            $parts = explode(' ' , $text);
            $price = file_get_contents('admin/fresh.txt');;
            $selectedValue = $quant;
            $total = $price * $selectedValue;
            $totalox = $price * $selectedValue;
            sendMessage($chat_id ,"Total Price is : " . $total . "Rs");
            $sql = "SELECT COUNT(*)  FROM fresh WHERE status = 'available'";
            $result = mysqli_query($conn , $sql);
            $rowx = $result->fetch_row();
            $available = $rowx[0];
            
            
            $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
              $result = mysqli_query($conn, $sql);

              $row = mysqli_fetch_row($result);
              $funds = $row[0];
              if($funds >= $total){
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=Checking Availablity of Accounts");
                  
                  
                  
                         if ($available < $selectedValue) {
                            sendMessage($chat_id, "oops! We are out of stock. Come back soon\n\nAvailable Stock is: " . $available);
                        } else {
                            mysqli_autocommit($conn, FALSE); // disable auto-commit mode
                            
                            try {
                                $num_rows = $selectedValue; // Number of rows to send
                                $query = "SELECT * FROM fresh WHERE status = 'available' LIMIT $num_rows FOR UPDATE"; // SQL query to select first $num_rows available rows with locking
                                $result = mysqli_query($conn, $query); // Execute the query
                                
                                // Check if the query was successful
                                if ($result && mysqli_num_rows($result) > 0) {
                                    $total = 0;
                                    // Loop through the rows and calculate the total cost
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $total += $row['price'];
                                    }
                                    
                                    // Check if the user has enough funds to make the purchase
                                    if ($funds >= $total) {
                                        // Deduct the cost from the user's funds
                                        $funds -= $total;
                                        
                                        // Loop through the rows and send them as messages
                                        mysqli_data_seek($result, 0); // reset result pointer
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $message = "Username: {$row['username']}\nPassword : {$row['password']}";
                                            sendMessage($chat_id, $message);
                                            // Update the row status to "sold"
                                            $update_query = "UPDATE fresh SET status = 'sold' WHERE Sno = {$row['Sno']}";
                                            mysqli_query($conn, $update_query);
                                        }
                                        
                                         $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
                                          $result = mysqli_query($conn, $sql);
                            
                                          while($row = mysqli_fetch_row($result)) {
                                          $funds = $row[0];
                                              
                                          }
                                          $fund = $funds - $totalox;
                                    
                                        $fund_qry = "UPDATE id SET funds = $fund WHERE chat_id = $chat_id";
                                        mysqli_query($conn , $fund_qry);
                                        
                                        mysqli_commit($conn); // commit the transaction
                                        
                                        sendMessage($admin , "Hey! $user_n : Purchased $selectedValue IG");
                                    } else {
                                        sendMessage($chat_id, "Sorry, you don't have enough funds to make the purchase.");
                                    }
                                    
                                    mysqli_free_result($result); // free the result set
                                } else {
                                    sendMessage($chat_id, "Sorry, there are not enough available Instagram accounts to fulfill your request.");
                                }
                            } catch (Exception $e) {
                                mysqli_rollback($conn); // rollback the transaction on error
                                sendMessage($chat_id, "Oops! Something went wrong. Please try again later.");
                            }
                            
                            mysqli_autocommit($conn, TRUE); // re-enable auto-commit mode
                        }

                  
              }
              else{
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=INSUFFICIENT FUNDS To Add Funds Contact @devillsamar or Type /funds To Check Your Current Balance");

              }
                  
            }
    

}

if(strpos($text , '/addig') === 0  && $chat_id == $admin){
    $usernames = explode(' ', trim(substr($text, 7))); // changed 8 to 7 to remove the extra 'd'
    foreach($usernames as $username){
            $sql2 = "SELECT * FROM fresh WHERE username = '$username'"; // enclosed username in single quotes
            $result2 = mysqli_query($conn , $sql2);
            $row = mysqli_fetch_assoc($result2);
            $user = $row['username'];
            if(mysqli_num_rows($result2) > 0){ // checking the number of rows returned by the query
            }
            else{
                if($username == ""){
                }else{
                                    $sql = "INSERT INTO `fresh` (`Sno`, `username`, `password`, `status`) VALUES (NULL, '$username', '808080', 'available')";
                                    $result = mysqli_query($conn , $sql);
                                    if($result){
                                        sendMessage($chat_id , $username . " SUCCESSFULLY ADDED"); // corrected the spelling of 'successfully'
                                    }
                                    else{
                                            $error_message = "Error: " . $sql . "<br>" . $conn->error;
                                            sendMessage($chat_id, $error_message);
                                    }
                }

            }

    }
}

if(strpos($text , '/addindo') === 0 && $chat_id == $admin){
    $usernames = explode(' ', trim(substr($text, 8))); // changed 8 to 7 to remove the extra 'd'
    foreach($usernames as $username){
            $sql2 = "SELECT * FROM stock WHERE username = '$username'"; // enclosed username in single quotes
            $result2 = mysqli_query($conn , $sql2);
            $row = mysqli_fetch_assoc($result2);
            $user = $row['username'];
            if(mysqli_num_rows($result2) > 0){ // checking the number of rows returned by the query
            }
            else{
                if($username == ""){
                }else{
                                    $sql = "INSERT INTO `stock` (`Sno`, `username`, `password`, `status`) VALUES (NULL, '$username', '808080', 'available')";
                                    $result = mysqli_query($conn , $sql);
                                    if($result){
                                        sendMessage($chat_id , $username . " SUCCESSFULLY ADDED"); // corrected the spelling of 'successfully'
                                    }
                                    else{
                                        $error_message = "Error: " . $sql . "<br>" . $conn->error;
                                            sendMessage($chat_id, $error_message);
                                    }
                }

            }

    }
}

if(strpos($text , '/addpp') === 0 && $chat_id == $admin){
    $usernames = explode(' ', trim(substr($text, 9))); // changed 8 to 7 to remove the extra 'd'
    foreach($usernames as $username){
            $sql2 = "SELECT * FROM pp WHERE username = '$username'"; // enclosed username in single quotes
            $result2 = mysqli_query($conn , $sql2);
            $row = mysqli_fetch_assoc($result2);
            $user = $row['username'];
            if(mysqli_num_rows($result2) > 0){ // checking the number of rows returned by the query
            }
            else{
                if($username == ""){
                }else{
                                    $sql = "INSERT INTO `pp` (`Sno`, `username`, `password`, `status`) VALUES (NULL, '$username', '808080', 'available')";
                                    $result = mysqli_query($conn , $sql);
                                    if($result){
                                        sendMessage($chat_id , $username . " SUCCESSFULLY ADDED"); // corrected the spelling of 'successfully'
                                    }
                                    else{
                                        $error_message = "Error: " . $sql . "<br>" . $conn->error;
                                            sendMessage($chat_id, $error_message);
                                    }
                }

            }

    }
}


if($text == "Buy Old Ig"){
            $api_url = "https://api.telegram.org/bot$token/";
            $price = file_get_contents('admin/pp.txt');;
            sendMessageH($chat_id , "<b>PRICE PER OLD INDO IG IS : $price

HOW MUCH YOU WANT TO BUY?</b>");
              $keyboard = [
                ['OLD 1 ', 'OLD 2' ,'OLD 3' , 'OLD 4' , 'OLD 5'],
                ['OLD 6', 'OLD 7' , 'OLD 8' , 'OLD 9' , 'OLD 10'],
                ['OLD 11', 'OLD 12' ,'OLD 13' , 'OLD 14' , 'OLD 15'],
                ['OLD 16', 'OLD 17' ,'OLD 18' , 'OLD 19' , 'OLD 20'],
                ['Close']
            ];
            $reply_markup = json_encode([
                'keyboard' => $keyboard,
                'resize_keyboard' => true,
                'one_time_keyboard' => false
            ]);
            $response = [
                'chat_id' => $chat_id,
                'text' => 'Select a number:',
                'reply_markup' => $reply_markup
            ];
            $response_json = json_encode($response);
            file_get_contents($api_url . "sendMessage?chat_id=$chat_id&text=" . urlencode($response['text']) . "&reply_markup=" . urlencode($response['reply_markup']));
            
        }
         

        
if(strpos($text , 'OLD') === 0) {
        $part =  explode(' ' , $text);
        $quant = $part[1];
            $parts = explode(' ' , $text);
            $price = file_get_contents('admin/pp.txt');;
            $selectedValue = $quant;
            $total = $price * $selectedValue;
            $totalox = $price * $selectedValue;
            sendMessage($chat_id ,"Total Price is : " . $total . "Rs");
            $sql = "SELECT COUNT(*)  FROM pp WHERE status = 'available'";
            $result = mysqli_query($conn , $sql);
            $rowx = $result->fetch_row();
            $available = $rowx[0];
            
            
            $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
              $result = mysqli_query($conn, $sql);

              $row = mysqli_fetch_row($result);
              $funds = $row[0];
              if($funds >= $total){
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=Checking Availablity of Accounts");
                  
                  
                  
                         if ($available < $selectedValue) {
                            sendMessage($chat_id, "oops! We are out of stock. Come back soon\n\nAvailable Stock is: " . $available);
                        } else {
                            mysqli_autocommit($conn, FALSE); // disable auto-commit mode
                            
                            try {
                                $num_rows = $selectedValue; // Number of rows to send
                                $query = "SELECT * FROM pp WHERE status = 'available' LIMIT $num_rows FOR UPDATE"; // SQL query to select first $num_rows available rows with locking
                                $result = mysqli_query($conn, $query); // Execute the query
                                
                                // Check if the query was successful
                                if ($result && mysqli_num_rows($result) > 0) {
                                    $total = 0;
                                    // Loop through the rows and calculate the total cost
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $total += $row['price'];
                                    }
                                    
                                    // Check if the user has enough funds to make the purchase
                                    if ($funds >= $total) {
                                        // Deduct the cost from the user's funds
                                        $funds -= $total;
                                        
                                        // Loop through the rows and send them as messages
                                        mysqli_data_seek($result, 0); // reset result pointer
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $message = "Username: {$row['username']}\nPassword : {$row['password']}";
                                            sendMessage($chat_id, $message);
                                            // Update the row status to "sold"
                                            $update_query = "UPDATE pp SET status = 'sold' WHERE Sno = {$row['Sno']}";
                                            mysqli_query($conn, $update_query);
                                        }
                                        
                                         $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = '$chat_id'";
                                          $result = mysqli_query($conn, $sql);
                            
                                          while($row = mysqli_fetch_row($result)) {
                                          $funds = $row[0];
                                              
                                          }
                                          $fund = $funds - $totalox;
                                    
                                        $fund_qry = "UPDATE id SET funds = $fund WHERE chat_id = $chat_id";
                                        mysqli_query($conn , $fund_qry);
                                        
                                        mysqli_commit($conn); // commit the transaction
                                        
                                        sendMessage($admin , "Hey! $user_n : Purchased $selectedValue IG");
                                    } else {
                                        sendMessage($chat_id, "Sorry, you don't have enough funds to make the purchase.");
                                    }
                                    
                                    mysqli_free_result($result); // free the result set
                                } else {
                                    sendMessage($chat_id, "Sorry, there are not enough available Instagram accounts to fulfill your request.");
                                }
                            } catch (Exception $e) {
                                mysqli_rollback($conn); // rollback the transaction on error
                                sendMessage($chat_id, "Oops! Something went wrong. Please try again later.");
                            }
                            
                            mysqli_autocommit($conn, TRUE); // re-enable auto-commit mode
                        }

                  
              }
              else{
                  file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=INSUFFICIENT FUNDS To Add Funds Contact @ROYAL_NAWAZISH_GAMING or Type /funds To Check Your Current Balance");

              }
                  
            }
    



if(strpos($text , '/price_fresh') === 0 && $chat_id == $admin){
    $path = "admin/fresh.txt";
    $old = file_get_contents('admin/fresh.txt');
    $part = explode(' ' , $text);
    $new = $part[1];
    file_put_contents($path , $new);
    sendMessage($chat_id , "PRICE UPDATED TO $new");
}

if(strpos($text , '/priceindo') === 0 && $chat_id == $admin){
    $path = "admin/indo.txt";
    $old = file_get_contents('admin/indo.txt');
    $part = explode(' ' , $text);
    $new = $part[1];
    file_put_contents($path , $new);
    sendMessage($chat_id , "PRICE UPDATED TO $new");
}

if(strpos($text , '/price_pp') === 0 && $chat_id == $admin){
    $path = "admin/pp.txt";
    $old = file_get_contents('admin/pp.txt');
    $part = explode(' ' , $text);
    $new = $part[1];
    file_put_contents($path , $new);
    sendMessage($chat_id , "PRICE UPDATED TO $new");
}




if($text == "Add Funds" || $text == "/addfunds"){
    sendImageToTelegramBot($token ,$chat_id , 'img/payment.jpg', "<b><i>PAY HERE AND SEND ORDER ID/TRANSACTION ID
    
SUPPORTED PAYMENT METHODS

PAYTM
PHONE PAY

FAMPAY NOT SUPPORTED

FAMPAY USERS PAY AND SEND SCREEN SHOT IN DM @ROYAL_NAWAZISH_GAMING</i></b>");
}

if ((strlen($text) < 36) && (preg_match('/^(T|C|\d)/', $text)) && (is_numeric(str_replace(array('T', 'C'), '', $text))) && (strlen($text) > 5)) {

        $transaction_id = $text;
        $merchant_id = "MERCHANT ID";
        $merchant_key = "MERCHANT ID";

        $url = "https://securegw.paytm.in/merchant-status/getTxnStatus?JsonData=";
        
        $data = array(
            'MID' => $merchant_id,
            'ORDERID' => $transaction_id,
        );
        

        $json_data = json_encode($data);
        

        $url .= $json_data;
        

        $checksum = hash_hmac('sha256', $json_data, $merchant_key);
        

        $url .= "&CHECKSUMHASH=" . $checksum;
        
        $response = file_get_contents($url);
        
        $response_data = json_decode($response, true);
        
        if ($response_data['STATUS'] == 'TXN_SUCCESS' && $response_data['ORDERID'] == $transaction_id && $response_data['MID'] == $merchant_id && $response_data['TXNAMOUNT']) {
            $sql = "SELECT * FROM trx WHERE transaction = '$transaction_id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                sendMessageH($chat_id , "<b>TRANSACTION ID ALREADY CLAIMED</b>");
            }
            else{
            $amount = $response_data['TXNAMOUNT'];
            $sql = "INSERT INTO `trx` (`transaction`) VALUES ('$transaction_id')";
            $result = mysqli_query($conn ,$sql);
            $sql = "SELECT `funds` FROM `id` WHERE `chat_id` = $chat_id";
            $result = mysqli_query($conn , $sql);
            $row = mysqli_fetch_assoc($result);
            $oldfunds = $row['funds'];
            $newfunds = $oldfunds + $amount;
            $sql = "UPDATE id SET funds = $newfunds WHERE chat_id = $chat_id";
            $resultx = mysqli_query($conn , $sql);
            if($resultx){
                sendImageToTelegramBot($token , $chat_id ,'https://t4.ftcdn.net/jpg/04/03/69/21/360_F_403692114_9zwo6pIVvFgy18KRJ4M796qJgi4xpf1o.jpg',"<b>Payment Successful of Rs</b> " . $response_data['TXNAMOUNT'] . "
<b>YOUR CURRENT BALANCE IS $newfunds</b>");
                sendMessage($admin, "@$user_n Paid $amount");            
          }
            else{
                sendMessage($chat_id , "ERROR UPDATIND FUNDS REPORT SENT TO ADMIN");
                sendMessage($admin , "ERROR UPDATIND FUNDS OF $user_n");

            }

            }
        } else {
            sendMessageH($chat_id , "<b>PAYMENT FAILED DUE TO INCORRECT TRANSACTION ID</b>");
        }

        
        
    }

if(strpos($text , '/balance') === 0 && $chat_id == $admin){
    $parts = explode(' ', $text);
    $username = $parts[1];
    $funds = $parts[2];
    
    $sql = "UPDATE id SET funds = $funds WHERE username = '$username'";
    $result = mysqli_query($conn , $sql);
    
    if($result){
        sendMessage($chat_id , "BALANCE UPDATED SUCCESSFULY");
    }
    else{
        sendMessage($chat_id , "OOPS! ERROR OCCURED");
    }
}

if(strpos($text , '/format') === 0){
$parts = explode(' ' , $text);

$user1 = $parts[1];
$user2 = $parts[2];
$user3 = $parts[3];
$user4 = $parts[4];
$user5 = $parts[5];
$user6 = $parts[6];
$user7 = $parts[7];
$user8 = $parts[8];
$user9 = $parts[9];
$user10 = $parts[10];
$user11 = $parts[11];
$user12 = $parts[12];
$user13 = $parts[13];
$user14 = $parts[14];
$user15 = $parts[15];
$user16 = $parts[16];
$user17 = $parts[17];
$user18 = $parts[18];
$user19 = $parts[19];
$user20 = $parts[20];

$text = "$user1
$user2
$user3
$user4
$user5
$user6
$user7
$user8
$user9
$user10
$user11
$user12
$user13
$user14
$user15
$user16
$user17
$user18
$user19
$user20";

// Replace line breaks with spaces
$text = str_replace(PHP_EOL, ' ', $text);

// Remove leading and trailing spaces
$text = trim($text);

sendMessage($chat_id , $text);

}




?>

