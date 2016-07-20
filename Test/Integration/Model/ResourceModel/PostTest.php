<?php

namespace Skywire\Blog\Test\Integration\Model\ResourceModel;

use Zend\Form\Element\DateTime;

/**
 * @magentoDataFixture loadFixture
 */
class PostTest
    extends \PHPUnit_Framework_TestCase
{

    /** @var  \Skywire\Blog\Model\Post */
    protected $post;

    /** @var  int */
    protected static $fixturePostId;

    /** @var \Skywire\Blog\Model\ResourceModel\Post */
    protected $resource;

    /** @var  \Magento\Framework\ObjectManagerInterface */
    protected $objectManager;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     */
    protected function setUp()
    {
        $this->objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $this->post          = $this->objectManager->create(
            '\Skywire\Blog\Model\Post'
        );
        $this->resource      = $this->post->getResource();
    }

    public function testLoadByKey()
    {
        $post = $this->post->load('test-url');
        $this->assertNotEmpty($post->getId());
    }

    public function testLoadById()
    {
        $post = $this->post->load(self::$fixturePostId);
        $this->assertEquals(self::$fixturePostId, $post->getId());
    }

    public static function loadFixture()
    {
        $objectManager = \Magento\TestFramework\Helper\Bootstrap::getObjectManager();
        $post          = $objectManager->create('\Skywire\Blog\Model\Post');

        $post->setData(
            array(
                'url_key'   => 'test-url',
                'title'     => 'test-title',
                'content'   => 'test-content',
                'is_active' => true,
            )
        )->save();
        self::$fixturePostId = $post->getId();
    }
}