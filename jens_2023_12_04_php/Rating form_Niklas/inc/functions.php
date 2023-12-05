<?php

function getFeedback(): array
{
    $entries = [];
   
    if (file_exists(ENTRY_PATH)) {
        $unserialized = unserialize(file_get_contents(ENTRY_PATH));
    }
    if ($unserialized) {
        $entries = $unserialized;
    }
    return $entries;
}

function saveFeedback(array $entries): void
{
    file_put_contents(ENTRY_PATH, serialize($entries));
}

function escape(string $userInput, string $encoding = 'UTF-8'): string
{
    return htmlspecialchars(
        strip_tags($userInput),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function getRating(string $rating): string
{
    switch ($rating) {
        case 'Bad':
            return '🙁';
            break;

        case 'Neutral':
            return '😐';
            break;

        case 'Good':
            return '😀';
            break;

        default:
            return '';
            break;
    }
}

function calculateRating(string $rating): int|float
{
    $allFeedbacks = count(getFeedback());

    $getRating = array_filter(getFeedback(), function ($entry) use ($rating) {
        return $entry['rating'] === $rating;
    });

    return round(count($getRating) / $allFeedbacks * 100,2);
}

function redirect(string $url): never
{
    header('Location: ' . $url);
    exit;
}
