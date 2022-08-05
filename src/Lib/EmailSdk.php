<?php

if (! function_exists('check_email')) {
    /**
     * @throws Exception
     */
    function check_email(
        string $email
    ): int
    {
        // Emulate of work
        sleep(
            random_int(0, 60)
        );

        return random_int(0, 1);
    }
}

if (! function_exists('send_email')) {
    /**
     * @throws Exception
     */
    function send_email(
        string $email,
        string $from,
        string $to,
        string $subj,
        string $body
    ): void {
        // Emulate of work
        sleep(
            random_int(0, 10)
        );
    }
}
