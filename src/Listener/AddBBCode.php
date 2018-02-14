<?php
/*
 * (c) Sajjad Hashemian <wolaws@gmail.com>
 */
namespace GaNuongLaChanh\MarkdownEditor\Listener;

use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;

class AddBBCode
{
    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    /**
     * @param ConfigureFormatter $event
     */
    public function addBBCode(ConfigureFormatter $event)
    {
        // $event->configurator->BBCodes->addFromRepository('RIGHT');
        $event->configurator->BBCodes->addCustom(
            '[RIGHT]{TEXT}[/RIGHT]',
            '<div style="text-align:right">{TEXT}</div>'
        );
    }
}
