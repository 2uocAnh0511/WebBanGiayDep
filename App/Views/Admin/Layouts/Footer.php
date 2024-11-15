<?php

namespace App\Views\Admin\Layouts;

use App\Views\BaseView;

class Footer extends BaseView
{
        public static function render($data = null)
        {

?>
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
  </div>
</footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
<script src="../../../../public/assets/dist/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../../public/assets/dist/assets/vendors/chart.js/chart.umd.js"></script>
    <script src="../../../../public/assets/dist/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="../../../../public/assets/dist/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="../../../../public/assets/dist/assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../../public/assets/dist/assets/js/off-canvas.js"></script>
    <script src="../../../../public/assets/dist/assets/js/template.js"></script>
    <script src="../../../../public/assets/dist/assets/js/settings.js"></script>
    <script src="../../../../public/assets/dist/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../../../public/assets/dist/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="../../../../public/assets/dist/assets/js/dashboard.js"></script>
<?php
        }
}

?>