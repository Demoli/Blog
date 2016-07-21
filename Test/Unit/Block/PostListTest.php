<?php namespace Skywire\Blog\Test\Unit\Block;

class PostListTest
    extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Skywire\Blog\Block\PostList
     */
    protected $block;

    protected $postCollection;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     */
    protected function setUp()
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);

        $this->postCollection = $objectManager->getCollectionMock(
            'Skywire\Blog\Model\ResourceModel\Post\Collection',
            array(
                array(
                    'post_id' => 1,
                    'url_key' => 'test-1',
                    'title'   => 'test title 1',
                    'content' => 'test content 1'
                )
            )
        );
        $this->postCollection->expects($this->any())->method('addFilter')->will($this->returnSelf());
        $this->postCollection->expects($this->any())->method('addOrder')->will($this->returnSelf());

        $collectionFactory = $this->getMockBuilder('\Skywire\Blog\Model\ResourceModel\Post\CollectionFactory')
            ->disableOriginalConstructor()
            ->setMethods(array('create'))
            ->getMock();
        $collectionFactory->method('create')
            ->willReturn($this->postCollection);

        $this->block = $objectManager->getObject(
            'Skywire\Blog\Block\PostList',
            array('postCollectionFactory' => $collectionFactory)
        );
    }


    public function testGetPosts()
    {
        $this->assertSame($this->postCollection, $this->block->getPosts());
        $this->assertEquals(1, $this->block->getPosts()->getIterator()->count());
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        $this->block = null;
    }
}