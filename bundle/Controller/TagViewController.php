<?php

declare(strict_types=1);

namespace Netgen\TagsBundle\Controller;

use eZ\Bundle\EzPublishCoreBundle\Controller;
use Netgen\TagsBundle\View\TagView;

class TagViewController extends Controller
{
    /**
     * Action for rendering a tag view.
     */
    public function viewAction(TagView $view): TagView
    {
        return $view;
    }
}
