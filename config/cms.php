<?php

return [
    'title' => env('APP_NAME', 'CoPlay'), // Site title
    'tagline' => 'Stream Free Movies & TV Series Online', // Site tagline
    'intro' => 'Welcome to CoPlay, Free Streaming Platform', // Site intro
    'description' => 'Stream Free Movies, TV Series, Anime, and Drama Online with HD Quality. Watch Anywhere Anytime in CoPlay.', // Site description
    'disclaimer' => 'We does not host any files, it merely links to 3rd party services. CoPlay is not responsible for any media files shown by the video providers', // Site disclaimer notice
    'copyright' => '&copy; 2025 all right reserved.', // Site copyright text

    // Color settings
    'color' => [
        // available colors: https://tailwindcss.com/docs/colors
        'primary' => 'gray', // Primary color (Background and Text)
        'accent' => 'amber', // Accent/Brand color
    ],

    // Site Features
    'features' => [
        'auto_embed' => true, // Enable Auto Embeds support
        'auto_embed_update' => true, // Enable Auto Embeds Update
        'api' => true, // Enable Public API support
    ],
];