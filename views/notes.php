<?php require_once 'partials/layout.php' ?>
<div class="mb-6">
    <a href="notes/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">+ Create</a>
</div>
<ul role="list" class="divide-y divide-gray-100">
    <?php foreach($notes as $note): ?> 
    <li class="flex justify-between gap-x-6 py-5 ">
        <div class="flex min-w-0 gap-x-4">
            <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="">
            <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                <a href="note?id=<?= htmlspecialchars($note['id']) ?>" class="text-blue-600 underline">
                    <?= $note['body'] ?>
                </a>    
                </p>
            </div>
        </div>
        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
            <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
            <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time>
            </p>
        </div>
    </li>
    <?php endforeach; ?>
</ul>

<?php require_once 'partials/footer.php' ?>