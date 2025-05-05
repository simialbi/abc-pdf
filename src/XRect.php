<?php

namespace ABCPdf;

/**
 * @property-read ComFactory $ComFactory The factory for creating objects in the same application domain.
 * @property float $Bottom The bottom coordinate.
 * @property float $Height The height of the rectangle.
 * @property float $Left The left coordinate.
 * @property int $Pin The corner of the rectangle to pin.
 * @property float $Right The right coordinate.
 * @property string $String The rect as a string.
 * @property float $Top The top coordinate.
 * @property float $Width The width of the rectangle.
 */

class XRect extends BaseObject
{
    /**
     * {@inheritDoc}
     */
    public function __construct(
        mixed $assembly_name = 'ABCpdf, Version=12.5.0.5, Culture=neutral, PublicKeyToken=a7a0b3f5184f2169',
        string $datatype_name = 'WebSupergoo.ABCpdf12.XRect',
        int $codepage = CP_UTF8
    )
    {
        parent::__construct($assembly_name, $datatype_name, $codepage);

        $this->registerWrappedObject('ComFactory', new ComFactory($this->getObject()->ComFactory));
    }
    /**
     * Insets the edges of the rectangle by specified horizontal and vertical amounts.                                   
     *
     * @param float $X The amount to inset the left and right edges.
     * @param float $Y The amount to inset the top and bottom edges.
     *
     * @return void
     */
    public function Inset(float $X, float $Y): void
    {
        $this->__call('Inset', func_get_args());
    }

    /**
     * Scales the rectangle width and height by specified horizontal and vertical factors. When you magnify a rectangle, 
     * one corner of the rectangle is pinned and the width and height of the rectangle adjusted. The corner which is pinned 
     * is indicated by the Pin property. The default pin corner is the bottom left.                                      
     *
     * @param float $X The horizontal scale factor.
     * @param float $Y The vertical scale factor.
     *
     * @return void
     */
    public function Magnify(float $X, float $Y): void
    {
        $this->__call('Magnify', func_get_args());
    }

    /**
     * Moves the rectangle maintaining the width and height.                                                             
     *
     * @param float $X The horizontal distance to move the rectangle.
     * @param float $Y The vertical distance to move the rectangle.
     *
     * @return void
     */
    public function Move(float $X, float $Y): void
    {
        $this->__call('Move', func_get_args());
    }

    /**
     * Moves the rectangle to the supplied position while maintaining the width and height. The corner moved to the location 
     * is indicated by the Pin property. The default pin corner is the bottom left.                                      
     *
     * @param float $X The new left position.
     * @param float $Y The new bottom position.
     *
     * @return void
     */
    public function Position(float $X, float $Y): void
    {
        $this->__call('Position', func_get_args());
    }

    /**
     * Changes the width and height of the rectangle while maintaining the position. When you change the width or height 
     * of a rectangle, one corner of the rectangle is pinned to maintain position. The corner which is pinned is indicated 
     * by the Pin property. The default pin corner is the bottom left.                                                   
     *
     * @param float $W The new width.
     * @param float $H The new height.
     *
     * @return void
     */
    public function Resize(float $W, float $H): void
    {
        $this->__call('Resize', func_get_args());
    }

    /**
     * Sets the location and size of the rectangle. The width and height of the rectangle are set to the new width and height. 
     * The rectangle is then moved to the supplied position while maintaining the width and height. The corner moved to the 
     * location is indicated by the Pin property. The default pin corner is the bottom left.                             
     *
     * @param  $X 
     * @param float $Y The new bottom position.
     * @param float $W The new width.
     * @param float $H The new height.
     *
     * @return void
     */
    public function SetRect( $X, float $Y, float $W, float $H): void
    {
        $this->__call('SetRect', func_get_args());
    }


}