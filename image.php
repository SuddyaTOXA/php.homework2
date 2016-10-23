<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 10/23/2016
 * Time: 11:06 PM
 */
namespace vendor\intervention\image\src\Intervention\Image\Filters;

class DemoFilter implements FilterInterface
{
    /**
     * Default size of filter effects
     */
    const DEFAULT_SIZE = 10;

    /**
     * Size of filter effects
     *
     * @var integer
     */
    private $size;

    /**
     * Creates new instance of filter
     *
     * @param integer $size
     */
    public function __construct($size = null)
    {
        $this->size = is_numeric($size) ? intval($size) : self::DEFAULT_SIZE;
    }

    /**
     * Applies filter effects to given image
     *
     * @param  vendor\intervention\image\src\Intervention\Image\Image $image
     * @return vendor\intervention\image\src\Intervention\Image\Image
     */
    public function applyFilter(vendor\intervention\image\src\Intervention\Image\Image $image)
    {
        $image->pixelate($this->size);
        $image->greyscale();

        return $image;
    }
}