<?php declare(strict_types=1);

namespace yehchge\gsitemap;

include "../src/CSiteMap.php";

// sample sitemap.xml
$GSiteMap = new GSiteMap();

$NodeRoot = $GSiteMap->createUrlSet();

$NodeUrl = $GSiteMap->setUrl($NodeRoot);

$GSiteMap->setLoc($NodeUrl, "https://www.example.com/");
$GSiteMap->setLastMod($NodeUrl, date('Y-m-d\TH:i:s') . '+00:00');
$GSiteMap->setPriority($NodeUrl, '1');

$NodeUrl = $GSiteMap->setUrl($NodeRoot);

$GSiteMap->setLoc($NodeUrl, "https://www.example.com/404.html");
$GSiteMap->setLastMod($NodeUrl, date('Y-m-d\TH:i:s') . '+00:00');
$GSiteMap->setPriority($NodeUrl, '0.8');

// set full path and filename
$GSiteMap->saveFile("sitemap_1.xml");


// generate sitemap.xml (index)
$NodeRoot = $GSiteMap->createIndex();

$NodeSiteMap = $GSiteMap->setSiteMap($NodeRoot);

$GSiteMap->setLoc($NodeSiteMap, "https://www.example.com/sitemap_1.xml");
$GSiteMap->setLastMod($NodeSiteMap, date('Y-m-d\TH:i:s') . '+00:00');

// set full path and filename
$GSiteMap->saveFile('sitemap.xml');
