<?php

return [

    /**
     * The JSON Client Secret File
     *
     * 1.
     * Go to: https://console.developers.google.com/apis/credentials
     * Create credentials
     * Service account key
     * New service account
     * Put the name, select JSON and Create!
     *
     * 2.
     * Open the downloaded file.
     * Copy the e-mail at "client_email".
     * Go to: https://analytics.google.com
     * Admin
     * Select your account and go to User Management
     * Paste the e-mail on the input and Add!
     * Now copy the JSON file at your project.
     */
    'file' => storage_path() . '/client_secret.json',

];
