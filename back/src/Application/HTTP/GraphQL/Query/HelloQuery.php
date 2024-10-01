<?php

namespace App\Application\HTTP\GraphQL\Query;

use Overblog\GraphQLBundle\Annotation\Provider;
use Overblog\GraphQLBundle\Annotation\Query;

#[Provider]
class HelloQuery
{
    #[Query]
    public function hello(): string
    {
        return 'Hello world from query!';
    }
}
