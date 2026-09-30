<?= view('partials/header', ['pageTitle' => 'About', 'activePage' => 'about']) ?>

<section class="page-heading">
    <p class="eyebrow">About the project</p>
    <h1>A simple POS system</h1>
    <p class="lead">This college project is a basic point-of-sale website built with CodeIgniter 4. It introduces the pages and account lists that could support a larger POS application.</p>
</section>

<section class="card-grid" aria-label="Project overview">
    <article class="card">
        <h2>What it includes</h2>
        <p>The project has a home page, an about page, a customer list, and a user list. The lists currently display sample information.</p>
    </article>
    <article class="card">
        <h2>How it works</h2>
        <p>CodeIgniter routes connect each page to a controller. The controller sends data to a view, which displays it in the browser.</p>
    </article>
</section>

<?= view('partials/footer') ?>
