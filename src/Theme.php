<?php

declare(strict_types=1);

namespace OneTwenty;

use OneCMS\Base\Infrastructure\Framework\Theme\Theme as BaseTheme;

/**
 * Undocumented class
 */
class Theme extends BaseTheme
{
    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->setBasePath(dirname(__DIR__));
        $this->setBaseUrl($this->publishAssets());

        $this->pathMap = [
            '@App/templates' => $this->getBasePath() . '/templates'
        ];

        parent::init();
    }

    /**
     * Publish assets of this theme.
     *
     * @return string
     */
    private function publishAssets(): string
    {
        $published = app()->assetManager->publish(dirname(__DIR__) . '/dist');

        return url($published[1]);
    }
}
