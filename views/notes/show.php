<?php require_once base_path('views/partials/layout.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="notes" class="text-blue-500 underline">go back...</a>
        </p>
        <p>
            <?= htmlspecialchars($note['body']) ?> 
        </p>

    </div>
</main>
<?php require_once base_path('views/partials/footer.php') ?>