<?php header("Content-Type: application/xml; charset=utf-8");
$domain = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
$domain .= "://".$_SERVER["HTTP_HOST"];
echo str_replace("##SITE_DOMAIN##", $domain, '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>##SITE_DOMAIN##/24-7-customer-support.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/advanced-tracking-technology.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/future-of-overnight-deliveries.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/how-ontime-ensures-timely-deliveries.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/blog/tips-for-choosing-courier-service.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/eco-friendly-delivery-options.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/fast-delivery-service.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
<url>
<loc>/</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>1.00</priority>
</url>
<url>
<loc>##SITE_DOMAIN##/privacy-policy.html</loc>
<lastmod>2024-12-17T17:26:27+00:00</lastmod>
<priority>0.90</priority>
</url>
</urlset>');
