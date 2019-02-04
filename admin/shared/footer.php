
          </div>
        </div>
      </section>

    </main>

    <footer id="footer" class="container-fluid">
      <div class="container">
        <p class="text-center">Copyright &copy; Boots Admin || 2018</p>
      </div>
    </footer>



          <!-- Modal -->

         <?php
            require 'modal/addpost.php';
            require 'modal/addpages.php';
            require 'modal/adduser.php';
         ?>
         
          <!-- Load All Script File -->
          <script src="../admin/assets/js/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
          <script src="../admin/assets/js/bootstrap.min.js"></script>

          <!-- Custom Js File -->
          <script src="../admin/scripts/main.js"></script>
          
  </body>
</html>
<?php

if(!empty($_SESSION['FeedBackSuccess']) || !empty($_SESSION['FeedBackError'])){
  if(!empty($_SESSION['FeedBackSuccess'])){
      unset($_SESSION['FeedBackSuccess']);
    }else{
      unset($_SESSION['FeedBackError']);
  }
}

?>
