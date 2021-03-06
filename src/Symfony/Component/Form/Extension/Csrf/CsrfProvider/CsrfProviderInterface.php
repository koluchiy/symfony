<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form\Extension\Csrf\CsrfProvider;

use Symfony\Component\Security\Csrf\CsrfTokenGeneratorInterface;

/**
 * Alias interface of {@link CsrfTokenGeneratorInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @deprecated Deprecated since version 2.4, to be removed in Symfony 3.0. Use
 *             {@link CsrfTokenGeneratorInterface} instead.
 */
interface CsrfProviderInterface extends CsrfTokenGeneratorInterface
{
}
