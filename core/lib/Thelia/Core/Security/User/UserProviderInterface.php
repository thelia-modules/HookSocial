<?php

namespace Thelia\Core\Security\User;

interface UserProviderInterface {
    /**
     * Returns a UserInterface instance
     *
     * @param $key the unique user key (username, email address, etc.)
     * @return a UserInterface instance, or null if none was found.
     */
    public function getUser($key);
}
?>