<?= $this->include('layout/header') ?>

<div class="form-wrapper">

    <h2 class="form-title">Add User</h2>

    <form method="post" class="user-form" action="<?= base_url('user/store') ?>">

        <div class="form-group">

            <input
                type="text"
                class="form-input"
                name="name"
                placeholder="Enter Name"
                value="<?= old('name') ?>"
            >

            <?php if(isset($validation) && $validation->hasError('name')) : ?>
                <span class="error-message">
                    <?= $validation->getError('name') ?>
                </span>
            <?php endif; ?>

        </div>

        <div class="form-group">

            <input
                type="email"
                class="form-input"
                name="email"
                placeholder="Enter Email"
                value="<?= old('email') ?>"
            >

            <?php if(isset($validation) && $validation->hasError('email')) : ?>
                <span class="error-message">
                    <?= $validation->getError('email') ?>
                </span>
            <?php endif; ?>

        </div>

        <div class="form-group">
            <button type="submit" class="submit-btn">
                Save User
            </button>
        </div>

    </form>

    <div class="back-btn-wrapper">
        <a href="<?= base_url('user') ?>" class="back-btn">
            Back to User List
        </a>
    </div>

</div>

<?= $this->include('layout/footer') ?>