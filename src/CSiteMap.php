<?php declare(strict_types=1);

namespace yehchge\gsitemap;

class GSiteMap {

    private $xml;

    public function __construct() {
    }

    public function initXml(){
        // init a sitemap file
        $this->xml = new \DOMDocument('1.0', 'UTF-8');

        // true: xml will break line, false: xml one line.
        $this->xml->formatOutput = true;
    }

    public function createUrlSet(){
        $this->initXml();

        // root
        $xml_urlset = $this->xml->createElement('urlset');
        $this->xml->appendChild($xml_urlset);

        $urlset_attr = $this->xml->createAttribute('xmlns');
        $urlset_attr->value = 'http://www.sitemaps.org/schemas/sitemap/0.9';

        $xml_urlset->appendChild($urlset_attr);
        $this->xml->appendChild($xml_urlset);

        return $xml_urlset;
    }

    public function setUrl($node){
        // new node
        $xml_url = $this->xml->createElement('url');
        $node->appendChild($xml_url);
        return $xml_url;
    }

    public function createIndex(){
        $this->initXml();

        $xml_index = $this->xml->createElement('sitemapindex');
        $this->xml->appendChild($xml_index);

        $index_attr = $this->xml->createAttribute('xmlns');
        $index_attr->value = 'http://www.sitemaps.org/schemas/sitemap/0.9';

        $xml_index->appendChild($index_attr);
        $this->xml->appendChild($xml_index);

        return $xml_index;
    }

    public function setSiteMap($node){
        $xml_sitemap = $this->xml->createElement('sitemap');
        $node->appendChild($xml_sitemap);

        return $xml_sitemap;
    }

    public function setLoc($node, $url){
        $xml_loc = $this->xml->createElement('loc', $url);
        $node->appendChild($xml_loc);
    }

    public function setLastMod($node, $lastmod){
        $xml_lastmod = $this->xml->createElement('lastmod', $lastmod);
        $node->appendChild($xml_lastmod);
    }

    public function setPriority($node, $priority){
        $xml_priority = $this->xml->createElement('priority', $priority);
        $node->appendChild($xml_priority);
    }

    public function setChangeFreq($node, $changefreq){
        $xml_changefreq = $this->xml->createElement('changefreq', $changefreq);
        $node->appendChild($xml_changefreq);
    }

    public function saveFile($sFullFileName){
        $this->xml->save($sFullFileName);
        unset($this->xml);
    }

}
