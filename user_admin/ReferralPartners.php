<!--incuding the header-->
<?php include_once"inc/header.php"; ?>
<?php
    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }else{
        
    }
?>    
    
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
  tinymce.init({selector:'.text'});
</script>


</head>
<body>
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- navigations -->
            <?php $thisPage = 'referralpartners'; ?>
            <?php include_once"inc/nav.php"; ?>
            
            
            <div class="dashboard-content">
              <div class="container" style="width: 100%; background-color: white;">
               <table id="myTable" class="table table-hover">
        <thead>
        <tr>
            <th>First Level Total</th>
            <th>Second Level Total</th>
            <th>Third Level Total</th>
                        <th>Final Total</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th scope="row">$0.00</th>
            <td>$0.00</td>
            <td>$0.00</td>
                        <td><strong>$0.00</strong></td>
        </tr><tr>
        </tr></tbody>
    </table> 
          <section class="info-box">
  <ul>
    <li><a href="#" class="active">1st Level Referrals(0)</a></li>
    <li><a href="#">2st Level Referrals(0)</a></li>
    <li><a href="#">3st Level Referrals(0)</a></li>
  </ul>
  <div class="panels">
    <article class="active-panel">
       <div class="table-reponsive box">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Portfolio#</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Transfer Fee</th>
                                        <th>Donation</th>
                                        <th>Withdrawal Mode</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>7/10/2020</td>
                                        <td>Admin</td>
                                        <td>WhatsApp status saver</td>
                                        <td>App story</td>
                                        <td>52</td>
                                        <td></td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
    </article>
    <article>
       <div class="table-reponsive box">
                            <table id="example1" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Portfolio#</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Transfer Fee</th>
                                        <th>Donation</th>
                                        <th>Withdrawal Mode</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>7/10/2020</td>
                                        <td>Admin</td>
                                        <td>WhatsApp status saver</td>
                                        <td>App story</td>
                                        <td>52</td>
                                        <td></td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
    </article>
    <article>
       <div class="table-reponsive box">
                            <table id="example2" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.#</th>
                                        <th>Portfolio#</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Transfer Fee</th>
                                        <th>Donation</th>
                                        <th>Withdrawal Mode</th>
                                        <th>Status</th>
                                        <th>Date created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>7/10/2020</td>
                                        <td>Admin</td>
                                        <td>WhatsApp status saver</td>
                                        <td>App story</td>
                                        <td>52</td>
                                        <td></td>
                                        <td>Active</td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
    </article>
  </div>
</section>
           </div>
            </div>

            <!-- Content / End -->
            
            <!-- Copyrights -->
            <?php include_once"inc/copyrights.php"; ?>
            
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.html"></script>
    <script src="js/preloader.html"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/dashboard-custom.js"></script>
    <script src="js/jpanelmenu.min.js"></script>
    <script src="js/counterup.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable();
        });

    </script>
    <script>var tabs = document.querySelectorAll('.info-box li a');
var panels = document.querySelectorAll('.info-box article');

for(i = 0; i < tabs.length; i++) {
  var tab = tabs[i];
  setTabHandler(tab, i);
}

function setTabHandler(tab, tabPos) {
  tab.onclick = function() {
    for(i = 0; i < tabs.length; i++) {
      tabs[i].className = '';
    }

    tab.className = 'active';

    for(i = 0; i < panels.length; i++) {
      panels[i].className = '';
    }

    panels[tabPos].className = 'active-panel';
  }
}</script>
</body>
</html>