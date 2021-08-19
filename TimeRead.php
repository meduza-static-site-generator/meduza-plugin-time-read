<?php

//este arquivo deve ser chamado por require (não require_once) pelo plugin processor

namespace Meduza\Plugin;

use Meduza\Build\Build;

class TimeRead extends \Meduza\Plugin\PluginBase
{
    protected Build $build;

    public function __construct(Build $build)
    {
        $this->build = $build;
    }

    public function run(): void
    {
        // print_r($this->build->getContent());
        foreach($this->build->getContent()->getIterator() as $contentKey => $contentItem){
            // print_r($content);exit();
            $frontmatter = $contentItem->frontmatter()->getFrontmatter();
            $markdown = $contentItem->getMarkdown();
            
            $words = explode(' ', $markdown);
            $timeRead = ceil(sizeof($words) / $this->build->config()->getConfig()['plugins']['TimeRead']['wordsPerMinute']);

            $frontmatter['timeRead'] = $timeRead;
            // print_r($frontmatter);exit();
            $contentItem->frontmatter()->setFrontmatter($frontmatter);
        }
    }
}