<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{!!  isset($metadata['title']) ? $metadata['title'] : config('laraveluk.site.name') !!}</title>
<meta name="description" content="{!!  isset($metadata['description']) ? $metadata['description'] : config('laraveluk.site.description') !!}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta http-equiv="cleartype" content="on" />
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="distribution" content="GLOBAL" />
<meta name="revisit-after" content="1 day" />
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="language" content="en-GB" />
<meta http-equiv="Pragma" content="no-cache" />
<meta name="keywords" content="{!!  isset($metadata['keywords']) ? $metadata['keywords'] : config('laraveluk.site.keywords') !!}">
<meta name="google-site-verification" content="" />
<meta name="msvalidate.01" content="" />
<link rel="icon" type="image/png" href="{!!config('laraveluk.site.url')!!}/images/icons/favicon.png">
<link rel="canonical" href="{{ URL::current() }}">
<!-- Mobile icons -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no" />

<meta itemprop="name" content="{!!  isset($metadata['title']) ? $metadata['title'] : config('laraveluk.site.name') !!}">
<meta itemprop="description" content="{!!  isset($metadata['description']) ? $metadata['description'] : config('laraveluk.site.description') !!}">
<meta itemprop="image" content="https://laravelphp.uk/images/social/google-share.jpg">

<meta property="og:type" content="website">
<meta property="og:url" content="{{ URL::current() }}">
<meta property="og:title" content="{!!  isset($metadata['title']) ? $metadata['title'] : config('laraveluk.site.name') !!}">
<meta property="og:image" content="https://laravelphp.uk/images/social/facebook-share.jpg">
<meta property="og:description" content="{!!  isset($metadata['description']) ? $metadata['description'] : config('laraveluk.site.description') !!}">
<meta property="og:site_name" content="{!!config('laraveluk.site.name')!!}">
<meta property="og:locale" content="en_GB" />
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{!!config('laraveluk.social.twitter_handle')!!}">
<meta name="twitter:creator" content="{!!config('laraveluk.social.twitter_handle')!!}">
<meta name="twitter:url" content="{{ URL::current() }}">
<meta name="twitter:title" content="{!!  isset($metadata['title']) ? $metadata['title'] : config('laraveluk.site.name') !!}">
<meta name="twitter:description" content="{!!  isset($metadata['description']) ? $metadata['description'] : config('laraveluk.site.description') !!}">
<meta name="twitter:image" content="https://laravelphp.uk/images/social/twitter-share.jpg">
<!-- eo: google analytics -->
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
