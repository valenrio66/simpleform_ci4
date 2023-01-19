<div class="container p-5">
    <a href="<?= base_url(''); ?>" class="btn btn-secondary mb-2"><i class="fas fa-home"></i></a>
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title">Edit Data User</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('user/update'); ?>">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="<?= $user->name; ?>" name="name" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" value="<?= $user->email; ?>" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" value="<?= $user->title; ?>" name="title" required class="form-control">
                </div>

                <input type="hidden" value="<?= $user->id; ?>" name="id">
                <div class="text-right">
                    <button class="btn btn-success">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>