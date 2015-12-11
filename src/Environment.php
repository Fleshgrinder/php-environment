<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2015 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Environment;

/**
 * Provides read-only access to the environment.
 *
 * @link https://en.wikipedia.org/wiki/Environment_%28systems%29
 */
class Environment {

    /**
     * Get environment variable.
     *
     * @param string $name
     *     Name of the variable to get.
     * @param string $default [optional]
     *     Default value to return if the environment variable is not set.
     * @return string
     *     The environment variable’s value or the default value if not environment variable is set.
     */
    public function get(string $name, string $default = ''): string {
        $value = getenv($name);

        if ($value === false) {
            return $default;
        }

        return $value;
    }

    /**
     * Check if environment variable exists.
     *
     * @param string $name
     *     Name of the environment variable to check.
     * @return bool
     *     `TRUE` if it exists, `FALSE` otherwise.
     */
    public function isset(string $name): bool {
        return getenv($name) !== false;
    }

}
