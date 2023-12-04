<table class="min-w-full">
    <thead class="border-b">
        <tr>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Username</th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Email</th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Feedback</th>
            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Comment</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($feedbacks) { ?>
            <?php foreach ($feedbacks as $feedback) : ?>
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-600"><?= escape($feedback['username']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-600"><?= escape($feedback['email']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-3xl font-normal text-gray-600">
                        <p><?= getRating(escape($feedback['rating'])) ?></p>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-600"><?= nl2br(escape($feedback['comment'])) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php } else { ?>
            <tr class="border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-600">There is no feedback</td>
            </tr>
        <?php } ?>
    </tbody>
</table>