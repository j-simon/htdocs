<?php
session_start();
$status = $_SESSION['status'] ?? '';
unset($_SESSION['status']);
?>
<div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
        <h1 class="text-center">Give a feedback</h1>
    </div>
    <?php if ($status) { ?>
        <div class="text-center bg-green-500 border border-gray-400 p-2 mx-6 mt-3 rounded">
            <?= $status; ?>
        </div>
    <?php } ?>
    <form class="w-full p-6" action="saveFeedback.php" method="POST">
        <div class="grid grid-cols-12 gap-x-6">
            <div class="flex flex-wrap mb-6 sm:col-span-6">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                    Username
                </label>
                <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" required autofocus>

            </div>
            <div class="flex flex-wrap mb-6 sm:col-span-6">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                    Email
                </label>
                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                Rating
            </label>
            <div class="flex item-center space-x-6">
                <div class="flex flex-col">
                    <input class="self-center" type="radio" id="radio1" name="rating" value="Good" checked>
                    <label class="text-5xl" for="radio1">
                        😀
                    </label>
                </div>
                <div class="flex flex-col">
                    <input class="self-center" type="radio" id="radio2" name="rating" value="Neutral">
                    <label class="text-5xl" for="radio2">
                        😐
                    </label>
                </div>
                <div class="flex flex-col">
                    <input class="self-center" type="radio" id="radio3" name="rating" value="Bad">
                    <label class="text-5xl" for="radio3">
                        🙁
                    </label>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">
                Comment
            </label>
            <textarea id="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="comment" required></textarea>
        </div>

        <div class="flex flex-wrap">
            <button type="submit" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700">
                Save Feedback
            </button>
        </div>
    </form>
</div>