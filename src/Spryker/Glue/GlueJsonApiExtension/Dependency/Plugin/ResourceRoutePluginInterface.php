<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiExtension\Dependency\Plugin;

use Spryker\Glue\GlueApplication\Resource\ResourceInterface;

interface ResourceRoutePluginInterface extends ResourceInterface
{
    /**
     * @return string
     */
    public function getControllerClass(): string;

    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getPath(): string;
}
