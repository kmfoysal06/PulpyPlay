<?php

return [
    "vidnest" => [
        "source" => [
            "url" => "https://vidnest.fun/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 80,
        "name" => "VidNest 4k",
        "quality" => "1080p (HD)",
        "id" => "vidnest"
    ],
    "vidcore" => [
        "source" => [
            "url" => "https://vidcore.net/",
            "movie" => "movie/{tmdb}?autoPlay=true",
            "tv" => "tv/{tmdb}/{season}/{episode}?autoPlay=true"
        ],
        "priority" => 80,
        "name" => "VidCore HD",
        "quality" => "1080p (HD)",
        "id" => "vidcore"
    ],
    "videasy" => [
        "source" => [
            "url" => "https://player.videasy.net/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 80,
        "name" => "VidEasy HD",
        "quality" => "1080p (HD)",
        "id" => "videasy"
    ],
    "embedflix" => [
        "source" => [
            "url" => "https://www.embedflix.win/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 70,
        "name" => "VidPro HD",
        "quality" => "1080p (HD)",
        "id" => "embedflix"
    ],
    "vidsrc" => [
        "source" => [
            "url" => "https://vidsrc-embed.su/embed/", // source: https://vidsrc.io/
            "movie" => "movie?tmdb={tmdb}&imdb={imdb}",
            "tv" => "tv?tmdb={tmdb}&imdb={imdb}&season={season}&episode={episode}"
        ],
        "priority" => 65,
        "name" => "VidSrc",
        "quality" => "720p (SD)",
        "id" => "vidsrc"
    ],
    "vidsrgl" => [
        "source" => [
            "url" => "https://vidsrc.sbs/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 65,
        "name" => "VidSrc (Global)",
        "quality" => "720p (HD)",
        "id" => "vidsrgl"
    ],
    "vidscralt" => [
        "source" => [
            "url" => "https://vidsrc.to/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 65,
        "name" => "VidSrc Alt",
        "quality" => "720p (SD)",
        "id" => "vidscralt"
    ],
    "vidyt" => [
        "source" => [
            "url" => "https://ythd.org/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 60, // seems not working
        "name" => "VidYT SD",
        "quality" => "720p",
        "id" => "vidyt"
    ],
    "vidfy" => [
        "source" => [
            "url" => "https://player.vidify.top/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 60, // seems not working
        "name" => "VidFY SD",
        "quality" => "720p",
        "id" => "vidfy"
    ],
    "mirror" => [
        "source" => [
            "url" => "https://multiembed.mov/",
            "movie" => "?video_id={tmdb}&tmdb=1",
            "tv" => "?video_id={tmdb}&tmdb=1&s={season}&e={episode}"
        ],
        "priority" => 55,
        "name" => "Mirror",
        "quality" => "720p",
        "id" => "mirror"
    ],
    "mirroralt" => [
        "source" => [
            "url" => "https://getsuperembed.link/{callback()}",
            "movie" => "?video_id={tmdb}&tmdb=1",
            "tv" => "?video_id={tmdb}&tmdb=1&season={season}&episode={episode}"
        ],
        "callback" => '$url = $config->replaceEmbedUrlSegments($embedSource); $resp = http(url: $url); $resp->ok() && redirect($resp->body());',
        "priority" => 55,
        "name" => "Mirror Alt",
        "quality" => "720p",
        "id" => "mirroralt"
    ],
    "vidproalt" => [
        "source" => [
            "url" => "https://2embed.stream/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 45,
        "name" => "VidPro Alt",
        "quality" => "720p",
        "id" => "vidproalt"
    ],
    "playxpaas" => [
        "source" => [
            "url" => "https://play.xpass.top/e/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "Play Xpaas",
        "quality" => "720p (SD)",
        "id" => "playxpaas"
    ],
    "zxcstream" => [
        "source" => [
            "url" => "https://zxcstream.xyz/player/",
            "movie" => "movie/{tmdb}?autoplay=true",
            "tv" => "tv/{tmdb}/{season}/{episode}?autoplay=true"
        ],
        "priority" => 40,
        "name" => "Z Stream",
        "quality" => "720p (HD)",
        "id" => "zxcstream"
    ],
    "peachify" => [
        "source" => [
            "url" => "https://peachify.top/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "Peachify",
        "quality" => "720p (HD)",
        "id" => "peachify"
    ],
    "cinesrc" => [
        "source" => [
            "url" => "https://cinesrc.st/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}?s={season}&e={episode}"
        ],
        "priority" => 40,
        "name" => "CineSrc",
        "quality" => "720p (HD)",
        "id" => "cinesrc"
    ],
    "vidup" => [
        "source" => [
            "url" => "https://vidup.to/",
            "movie" => "movie/{tmdb}?autoPlay=true",
            "tv" => "tv/{tmdb}/{season}/{episode}?autoPlay=true"
        ],
        "priority" => 40,
        "name" => "VidUp",
        "quality" => "720p (HD)",
        "id" => "vidup"
    ],
    "vixscr" => [
        "source" => [
            "url" => "https://vixsrc.to/",
            "movie" => "movie/{tmdb}?autoplay=true",
            "tv" => "tv/{tmdb}/{season}/{episode}?autoplay=true"
        ],
        "priority" => 40,
        "name" => "VixSrc",
        "quality" => "720p (HD)",
        "id" => "vixscr"
    ],
    "vidrock" => [
        "source" => [
            "url" => "https://vidrock.ru/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "VidRock",
        "quality" => "720p (SD)",
        "id" => "vidrock"
    ],
    "vidking" => [
        "source" => [
            "url" => "https://www.vidking.net/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "VidKing",
        "quality" => "720p (SD)",
        "id" => "vidking"
    ],
    "vidzee" => [
        "source" => [
            "url" => "https://player.vidzee.wtf/embed/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "VidZee",
        "quality" => "720p (SD)",
        "id" => "vidzee"
    ],
    "vidlink" => [
        "source" => [
            "url" => "https://vidlink.pro/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 40,
        "name" => "VidLink",
        "quality" => "720p (SD)",
        "id" => "vidlink"
    ],
    "vidgod" => [
        "source" => [
            "url" => "https://vidgod.net/",
            "movie" => "movie/{tmdb}",
            "tv" => "tv/{tmdb}/{season}/{episode}"
        ],
        "priority" => 35, // seems not working
        "name" => "VidGod HD",
        "quality" => "1080p (HD)",
        "id" => "vidgod"
    ],
    "embed2" => [
        "source" => [
            "url" => "https://www.2embed.cc/",
            "movie" => "embed/{tmdb}",
            "tv" => "embedtv/{tmdb}&s={season}&e={episode}"
        ],
        "priority" => 35,
        "name" => "Embed2",
        "quality" => "720p",
        "id" => "embed2"
    ],
    // more list: https://vidsrc.win/
];
