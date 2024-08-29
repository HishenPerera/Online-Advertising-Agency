<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="'X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Schibsted+Grotesk:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>FAq</title>
</head>
<body>
    <div class="header">
        <h1 class="header-title">FAQ</h1>
        <p class="header-desc"> frequenty ask questions</p>
    </div>

  <div class="faq">
    <div class="faq-name">
        <h1 class="faq-header">Have questions?</h1>
        <form action="faqlist.php" method="post">
        <textarea name="Question" placeholder="Enter your question here..." id="txtarea"></textarea>
        <div class="Qbtn">
        <button type="submit" name="submit" value="submit" >Submit</button></form>
        </div>
    </div>

    <div class="faq-box">
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-1">
        <label class="faq-title"for="faq-trigger-1">Genaral questions about our website</label>
        <div class="faq-detail">
          <p>General inquiries concerning our website comprise a range of queries concerning its functions, offerings, and data supplied for user support and comprehension.</p>
        </div>
      </div>

      <div class="faq-box">
        <div class="faq-wrapper">
          <input type="checkbox" class="faq-trigger" id="faq-trigger-2">
          <label class="faq-title"for="faq-trigger-2">Are you seeking assistance with advertising</label>
          <div class="faq-detail">
            <p>Seeking assistance with advertising? Get help with marketing tactics for promoting goods, services, or content effectively</p>
          </div>
        </div>
      </div>
      
    <div class="faq-box">
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-3">
        <label class="faq-title"for="faq-trigger-3">Payments</label>
        <div class="faq-detail">
          <p>Need payment assistance? Get guidance on transaction processing, payment methods, and resolving related issues efficiently for seamless transactions.</p>
        </div>
      </div>
    </div>
    <div class="faq-box">
      <div class="faq-wrapper">
        <input type="checkbox" class="faq-trigger" id="faq-trigger-4">
        <label class="faq-title"for="faq-trigger-4">Other</label>
        <div class="faq-detail">
          <p>Other assistance includes campaign management, creative design, audience targeting, and analytics for comprehensive online advertising support.</p>
        </div>
      </div>
    
    

    </div>

    
      

  </div> 
    
</body>
</html>