<?= $this->include('layout/header') ?>
<div class="update-box">

    <h2 class="update-heading">Edit User</h2>

    <form method="post" action="<?= base_url('user/update/'.$user['id']) ?>" class="update-form">

        <div class="update-field-wrap">
            <input
                type="text"
                name="name"
                value="<?= $user['name'] ?>"
                required
                class="update-field">
        </div>

        <div class="update-field-wrap">
            <input
                type="email"
                name="email"
                value="<?= $user['email'] ?>"
                required
                class="update-field">
        </div>

        <div class="update-action-wrap">
            <button type="submit" class="update-btn">
                Update User
            </button>
        </div>

    </form>

    <div class="return-link-wrap">
        <a href="<?= base_url('user') ?>" class="return-link">
            Back to User List
        </a>
    </div>

</div>
<?= $this->include('layout/footer') ?>