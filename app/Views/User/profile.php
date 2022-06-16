<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

<br />
<br />
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                </div>
                                <h6 class="f-w-600">Hembo Tingor</h6>
                                <p>Web Designer</p>
                                <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <br />
                                <br />
                                <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi User</h4>
                               
                                <div>
                                
                                    <div class="col-sm-6">
                                        <class="m-b-10 f-w-600">Nama :
                                        <class="text-muted f-w-400"><?= session()->get('nama_user') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <class="m-b-10 f-w-600">Id :
                                        <class="text-muted f-w-400"><?= session()->get('id_user') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <class="m-b-10 f-w-600">No. HP : 
                                        <class="text-muted f-w-400"><?= session()->get('telepon_user') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <class="m-b-10 f-w-600">Alamat : 
                                        <class="text-muted f-w-400"><?= session()->get('alamat_user') ?>
                                    </div>
                                
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>