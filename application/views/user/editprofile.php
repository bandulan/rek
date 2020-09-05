<br>
<div class="col-5 mx-auto">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Edit Profile</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="<?= $user['phone']; ?>">
                </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <button type="submit" class="btn btn-info mx-auto">Edit Profile</button></div>
            </div>
        </form>
    </div>
</div>