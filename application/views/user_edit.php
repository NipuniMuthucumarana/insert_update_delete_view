<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
	<title>user</title>

	<!-- Icons font CSS-->
    <link href="<?php echo base_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper2 wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                	 <h2 class="title">Update Form</h2>



					<!--form insert-->

					<form action="<?= base_url()?>user/update" method="post">
						<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
										<label class="label">Item Id</label>									
										<input class="input--style-4" type="text" name="id" hidden value="<?php echo $index['i_id']?>">	
								</div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
									<label class="label">Item Name</label>
									<input class="input--style-4" type="text" name="name" value="<?php echo $index['i_name']?>">
								</div>
                            </div>
							<div class="col-2">
                                <div class="input-group">
									<label class="label">Quantity</label>
									<input class="input--style-4" type="text" name="quantity" value="<?php echo $index['quantity']?>">		
								</div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Purchased Date</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="date" value="<?php echo $index['date']?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                            <div class="input-group">
                                	<label class="label">Category</label>
									<div class="rs-select2 js-select-simple select--no-search">
							  			<select class="input--style-4" name="category">
											<option selected="selected"><?php echo $index['category']?></option>
											<option>Frozen Food</option>
								  			<option>Sanitory Items</option>
								  			<option>Grocery</option>
								  			<option>Baby Items</option>
								  			<option>Stationary</option>
										</select>
									<div class="select-dropdown"></div>				
								</div>
                            </div>
                        </div>
							<div class="col-2">
                            <div class="input-group">
								<label class="label">Brand</label>
								<div class="rs-select2 js-select-simple select--no-search">									
										<select class="input--style-4" name="brand">
											<option selected="selected"><?php echo $index['brand']?></option>
								  			<option>Munchee</option>
									  		<option>Maliban</option>
									  		<option>Uniliver</option>
									  		<option>Hemas</option>
									  		<option>Freeland</option>
									  		<option>Vijaya</option>
										</select>
									<div class="select-dropdown"></div>
								</div>
                            </div>
                        </div>
                            
							<div class="p-t-15">										
								<button class="btn btn--radius-2 btn--blue" type="submit">Update Data</button>								
							</div>
						
					</form>
				</div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url() ?>assets/js/global.js"></script>


</body>
</html>
