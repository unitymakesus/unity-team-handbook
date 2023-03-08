<?php

use App\Listeners\GenerateSitemap;
use TightenCo\Jigsaw\Jigsaw;

$events->afterBuild(GenerateSitemap::class);
