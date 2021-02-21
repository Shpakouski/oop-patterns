<?php

namespace Observer;


use SplSubject;

class ChangeTitlePlugin implements \SplObserver
{


    public function update(SplSubject $subject, string $event = null, $data = null)
    {
        if (isset($subject->title)) {
            $subject->title .= ' Create Event ';
        }
    }
}