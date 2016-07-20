<?php namespace Skywire\Blog\Test\Integration\Model;

use Zend\Form\Element\DateTime;

/**
 * @magentoDataFixture loadFixture
 */
class PostTest
    extends \PHPUnit_Framework_TestCase
{

    /** @var \Skywire\Blog\Model\Post */
    protected $post;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     */
    protected function setUp()
    {
        $this->post = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(
            '\Skywire\Blog\Model\Post'
        );

        $this->post->setData(
            array(
                'url_key'   => 'test-url',
                'title'     => 'test-title',
                'content'   => 'test-content',
                'is_active' => true,
            )
        );
    }

    public function testCRUD()
    {
        $this->assertTrue(false);
        $crud = new \Magento\TestFramework\Entity($this->post, ['url_key' => uniqid()]);
        $crud->testCrud();
    }

    public function testTimestamps()
    {
        $this->post->save();

        $creationTimestamp = new \DateTime($this->post->getCreationTime());
        $this->assertGreaterThan(1, $creationTimestamp->getTImestamp());

        $updateTimestamp   = new \DateTime($this->post->getUpdateTime());
        $this->assertGreaterThan(1, $updateTimestamp->getTImestamp());
    }

    public static function loadFixture()
    {
        return;
    }
}