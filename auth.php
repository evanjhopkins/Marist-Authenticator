<?php
include("PHPCrawl_083/libs/PHPCrawler.class.php");
class MyCrawler extends PHPCrawler{
	function handleDocumentInfo(PHPCrawlerDocumentInfo $PageInfo){
		echo $PageInfo->url."\n";
	}
}

$crawler = new MyCrawler();
$crawler->setURL("https://login.marist.edu/cas/login");
$crawler->addContentTypeReceiveRule("#test/html#");

$crawler->go();
?>
