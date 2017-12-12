<?php
//源码由旺旺:ecshop2012所有 未经允许禁止倒卖 一经发现停止任何服务
namespace OSS\Tests;

require_once __DIR__ . '/Common.php';
class ObjectAclTest extends \PHPUnit_Framework_TestCase
{
	public function testGetSet()
	{
		$client = Common::getOssClient();
		$bucket = Common::getBucketName();
		$object = 'test/object-acl';
		$client->deleteObject($bucket, $object);
		$client->putObject($bucket, $object, 'hello world');
		$acl = $client->getObjectAcl($bucket, $object);
		$this->assertEquals('default', $acl);
		$client->putObjectAcl($bucket, $object, 'public-read');
		$acl = $client->getObjectAcl($bucket, $object);
		$this->assertEquals('public-read', $acl);
		$content = $client->getObject($bucket, $object);
		$this->assertEquals('hello world', $content);
	}
}

?>
