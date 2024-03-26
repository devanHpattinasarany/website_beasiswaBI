<li class="sidebar-item">
    <a class="sidebar-link" href="/dashboard" aria-expanded="false">
        <span>
            <img src="<?= base_url() ?>/assets/images/icons/dashboard.svg" alt="">
        </span>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>
<?php if (in_groups('mahasiswa')) : ?>
    <li class="sidebar-item">
        <a class="sidebar-link" href="/pendaftar/hal-1" aria-expanded="false">
            <span>
                <img src="<?= base_url() ?>/assets/images/icons/pendaftaran.svg" alt="">
            </span>
            <span class="hide-menu">Pendaftaran</span>
        </a>
    </li>
<?php endif; ?>


<?php if (in_groups('reviewer')) : ?>
    <li class="sidebar-item">
        <a class="sidebar-link" href="/pendaftar" aria-expanded="false">
            <span>
                <img src="<?= base_url() ?>/assets/images/icons/pendaftaran.svg" alt="">
            </span>
            <span class="hide-menu">Pendaftar</span>
        </a>
    </li>
<?php endif; ?>

<?php if (in_groups('mahasiswa')) : ?>
    <li li class="sidebar-item">
        <a class="sidebar-link" href="/profile" aria-expanded="false">
            <span>
                <img src="<?= base_url() ?>/assets/images/icons/profile.svg" alt="">
            </span>
            <span class="hide-menu">Edit Profile</span>
        </a>
    </li>
<?php endif; ?>

<?php if (in_groups('reviewer')) : ?>
    <li class="sidebar-item">
        <a class="sidebar-link" href="/diterima" aria-expanded="false">
            <span>
                <img src="<?= base_url() ?>/assets/images/icons/diterima.svg" alt="">
            </span>
            <span class="hide-menu">Diterima</span>
        </a>
    </li>
<?php endif; ?>