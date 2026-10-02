<?= view('partials/header', ['pageTitle' => 'Home', 'activePage' => 'home']) ?>

<section class="page-heading">
    <p class="eyebrow">Welcome</p>
    <h1>Point-of-Sale System</h1>
    <p class="lead">
        Welcome to our basic POS system. Explore the account lists
        or learn more about the project using the navigation above.
    </p>
</section>

<section class="card-grid" aria-label="Explore the POS system">
    <article class="card">
        <h2>Customer accounts</h2>
        <p><a href="<?= site_url('customers') ?>">View customer contact details</a></p>
    </article>

    <article class="card">
        <h2>User accounts</h2>
        <p><a href="<?= site_url('users') ?>">View users and their roles</a></p>
    </article>
</section>

<?= view('partials/footer') ?>