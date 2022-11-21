<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class NumController
{
    public function number(): Response
    {
        $number = random_int(0, 10000);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}