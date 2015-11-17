<?php

namespace Intervention\Image\Gd\Commands;

class GammaCommand extends \Intervention\Image\Commands\AbstractCommand
{
    /**
     * Applies gamma correction to a given image
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $gamma = $this->argument(0)->type('numeric')->required()->value();

        foreach ($image as $frame) {
            imagegammacorrect($frame->getCore(), 1, $gamma);
        }

        return true;
    }
}
