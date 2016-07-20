<?php
namespace Skywire\Blog\Api\Data;

    /**
     *
     * NOTICE OF LICENSE
     *
     * This source file is subject to the Skywire License
     * that is available through the world-wide-web at this URL:
     * http://skywire.co.uk/skywire/license/
     * If you did not receive a copy of the license and are unable to
     * obtain it through the world-wide-web, please send an email
     * to interact@skywire.co.uk so we can send you a copy immediately.
     *
     */

/**
 * Description of class
 *
 * Further description is required
 *
 * @category  Skywire
 * @package   Skywire_ModuleName
 * @author    Skywire Tech Team <tech@skywire.co.uk>
 * @copyright 2014 Skywire Ltd (http://skywire.co.uk)
 * @license   Skywire Licence http://skywire.co.uk/skywire/license/
 * @link      http://skywire.co.uk
 */
interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const POST_ID = 'post_id';
    const URL_KEY = 'url_key';
    const TITLE = 'title';
    const CONTENT = 'content';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME = 'update_time';
    const IS_ACTIVE = 'is_active';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive();

    /**
     * Set ID
     *
     * @param int $id
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setId($id);

    /**
     * Set URL Key
     *
     * @param string $url_key
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setUrlKey($url_key);

    /**
     * Set title
     *
     * @param string $title
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setTitle($title);

    /**
     * Set content
     *
     * @param string $content
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setContent($content);

    /**
     * Set creation time
     *
     * @param string $creationTime
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);

    /**
     * Set is active
     *
     * @param int|bool $isActive
     *
     * @return \Skywire\Blog\Api\Data\PostInterface
     */
    public function setIsActive($isActive);
}
