               
               <!-- Begin Page Content -->
               <div class="container-fluid">

                   <!-- Page Heading -->
                   <h1 class="h3 mb-4 text-gray-800"></h1>

                   <!-- Begin Page Content -->
                   <div class="container-fluid">

                       <!-- Page Heading -->
                       <div class="d-sm-flex align-items-center justify-content-between mb-4">
                           <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       </div>

                       <!-- Content Row -->
                       <div class="row">

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                   Anggota</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $total_anggota?> </div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-list fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                   Buku</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_buku?></div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-book fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                   Peminjaman</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_peminjaman?></div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-flag fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- Earnings (Monthly) Card Example -->
                           <div class="col-xl-3 col-md-6 mb-4">
                               <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                       <div class="row no-gutters align-items-center">
                                           <div class="col mr-2">
                                               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                   Pengembalian</div>
                                               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_pengembalian?></div>
                                           </div>
                                           <div class="col-auto">
                                               <i class="fas fa-flag fa-2x text-gray-300"></i>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           

                       </div>
                       <!-- /.container-fluid -->

                   </div>
                   <!-- End of Main Content -->



                   