<?php include '../includes/navbar.php'; ?> 
<?php include '../includes/header.php'; ?> 
<?php include '../includes/ajadcmsDB.php'; ?> 


<body>

<form method="post" action="#">
            <div class="row">
              
              <div class="col">
                <input type="text" name="email" placeholder="E-mail" />
              </div>
              <div class="col">
                <input type="text" name="name" placeholder="Subject" />
              </div>
              <div class="col-12">
                <textarea name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-12">
                <input type="submit" value="Send Message" />
              </div>
            </div>
          </form>

          <?php include '../includes/footer.php'; ?> 

    </body>