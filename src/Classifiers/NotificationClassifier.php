<?php

namespace Wnx\LaravelStats\Classifiers;

use Wnx\LaravelStats\ReflectionClass;
use Illuminate\Notifications\Notification;

class NotificationClassifier extends Classifier
{
    public function getName()
    {
        return 'Notifications';
    }

    public function satisfies(ReflectionClass $class)
    {
        return $class->isSubclassOf(Notification::class);
    }
}
