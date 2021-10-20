<?php declare(strict_types=1);

namespace TheFrosty\WpUtilities\Plugin;

use Psr\Container\ContainerInterface;

/**
 * Container aware trait.
 *
 * Container implementation courtesy of Slim 3.
 *
 * @package TheFrosty\WpUtilities\Plugin
 * @link https://github.com/slimphp/Slim/blob/e80b0f8b4d23e165783e8bf241b31c35272b0e28/Slim/App.php
 */
trait ContainerAwareTrait
{

    /**
     * Container.
     * @var ContainerInterface
     */
    private ContainerInterface $container;

    /**
     * Proxy access to container services.
     *
     * @param string $name Service name.
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->container->get($name);
    }

    /**
     * Whether a container service exists.
     *
     * @param string $name Service name.
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return $this->container->has($name);
    }

    /**
     * Calling a non-existent method on the class checks to see if there's an
     * item in the container that is callable and if so, calls it.
     *
     * @param string $method Method name.
     * @param array $args Method arguments.
     * @return mixed
     */
    public function __call(string $method, array $args)
    {
        if ($this->container->has($method)) {
            $object = $this->container->get($method);
            if (\is_callable($object)) {
                return \call_user_func_array($object, $args);
            }
        }

        return false;
    }

    /**
     * Enable access to the DI container by plugin consumers.
     *
     * @return ContainerInterface
     */
    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    /**
     * Set the container.
     *
     * @param ContainerInterface $container Dependency injection container.
     * @return $this
     */
    public function setContainer(ContainerInterface $container): self
    {
        $this->container = $container;

        return $this;
    }
}
