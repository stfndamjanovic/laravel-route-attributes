<?php

namespace Spatie\RouteAttributes\Tests\AttributeTests;

use Spatie\RouteAttributes\Tests\TestCase;
use Spatie\RouteAttributes\Tests\TestClasses\Controllers\FallbackTestController;

class FallbackAttributeTest extends TestCase
{
    /** @test */
    public function it_can_register_a_route_as_fallback()
    {
        $this->routeRegistrar->registerClass(FallbackTestController::class);

        $this
            ->assertRegisteredRoutesCount(1)
            ->assertRouteRegistered(FallbackTestController::class, 'myFallbackMethod', 'get', 'my-fallback-method', [], null, null, [], true);
    }
}
