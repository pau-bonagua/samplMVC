<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//required
require_once '../../config/setup.php';
//end required

require_once APPPATH . 'view/template/header.php';
?>


<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Page Content -->
        <h1>SAMPLE MVC</h1>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Table Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tbl_user" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Birthday</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-3">
                        <div class="form-label-group">
                            <input type="text" id="txt_name" class="form-control" placeholder="Name">
                            <label for="txt_name">Name</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-label-group">
                            <input type="text" id="txt_age" class="form-control" placeholder="Age">
                            <label for="txt_age">Age</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-label-group">
                            <input type="text" id="txt_birthdate" class="form-control" placeholder="Birthday">
                            <label for="txt_birthdate">Birthday</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-label-group">
                            <span id="span_for_change">
                                <button class="btn btn-success btn-lg" onclick="User.insert_user();">SAVE</button>
                            </span>
                            <button class="btn btn-warning btn-lg" onclick="User.clear_form()">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


    <?php
    require_once APPPATH . 'view/template/footer.php';
    ?>


    <script src="<?php echo base_url; ?>assets/scripts/admin/index.js"></script>

</body>

</html>
