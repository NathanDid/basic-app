<?php

namespace App\Application\HTTP\GraphQL\Mutation;

use Overblog\GraphQLBundle\Annotation\Provider;
use Overblog\GraphQLBundle\Annotation\Mutation;

#[Provider]
class HelloMutation
{
    #[Mutation]
    public function hello(): string
    {
        return 'Hello world from mutation!';
    }
}
