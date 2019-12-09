<?php

namespace DH\DoctrineAuditBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Required;

/**
 * @Annotation
 * @Target("CLASS")
 * @Attributes({
 *     @Attribute("view", required=true, type="array<string>"),
 * })
 */
final class Security extends Annotation
{
    const VIEW_SCOPE = 'view';

    /**
     * @Required
     */
    public $view;
}
