<?php

namespace Molovo\ModelTraits;

trait EncryptsAttributes
{
    /**
     * Encrypts an attribute before storing it in the database.
     *
     * @method  setAttribute
     *
     * @param string $key   The key being set
     * @param mixed  $value The value to set
     */
    public function setAttribute($key, $value)
    {
        // Check whether the key is in the $encrypted array
        if (array_key_exists($key, array_flip($this->encrypted))) {
            // Encrypt the value, and store it
            parent::setAttribute($key, \Crypt::encrypt($value));

            return;
        }

        return parent::setAttribute($key, $value);
    }

    /**
     * Decrypts an attribute after retrieving it from the database.
     *
     * @method  getAttribute
     *
     * @param string $key The key to retrieve
     *
     * @return mixed The decrypted value
     */
    public function getAttribute($key)
    {
        // Check whether the key is in the $encrypted array
        if (array_key_exists($key, array_flip($this->encrypted))) {
            // Decrypt the value, and return it
            return \Crypt::decrypt(parent::getAttribute($key));
        }

        return parent::getAttribute($key);
    }
}
