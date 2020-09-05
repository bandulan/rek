<br>
<div class="col-lg-6 col-12 mx-auto">

    <div class="card card-info card-outline">
        <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('img/user/') . $user['foto']; ?>" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"><?= $user['email']; ?></h3>

            <p class="text-muted text-center"><?= $user['phone']; ?></p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Nama</b> <a class="float-right"><?= $user['nama']; ?></a>
                </li>
                <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?= $user['alamat']; ?></a>
                </li>

            </ul>

            <a href="#" class="btn btn-info btn-block">
                Edit Profile
            </a>
        </div>
    </div>
</div>