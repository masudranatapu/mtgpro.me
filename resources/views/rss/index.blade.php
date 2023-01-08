<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<?php
$settings = getSetting();
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ DevDojo ]]></title>
        <link><![CDATA[ {{ URL::to('/') }}/feed ]]></link>
        <description><![CDATA[ {{ $settings->seo_meta_description }} ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>
    </channel>
</rss>
