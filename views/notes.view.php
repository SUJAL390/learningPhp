<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <?php include 'views/partials/nav.view.php'; ?>
    <?php include 'views/partials/banner.view.php'; ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-6">Notes</h1>
            
            <!-- Check if notes exist -->
            <?php if (!empty($notes)) : ?>
                <ul class="space-y-4">
                    <?php foreach ($notes as $note) : ?>
                        <li class="p-4 border rounded shadow">
                            <p class="text-gray-700">
                                <?= htmlspecialchars($note['body']); ?>
                            </p>
                            <small class="text-gray-500">
                                Note ID: <?= htmlspecialchars($note['id']); ?>
                            </small>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p class="text-gray-500">No notes available.</p>
            <?php endif; ?>
        </div>
    </main>

    <?php include 'views/partials/footer.view.php'; ?>

</body>
</html>
