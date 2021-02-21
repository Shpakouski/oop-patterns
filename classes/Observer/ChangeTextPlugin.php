<?php

namespace Observer;


use SplSubject;

class ChangeTextPlugin implements \SplObserver
{


    public function update(SplSubject $subject, string $event = null, $data = null)
    {
        if (isset($subject->text)) {
            $subject->text .= ' Create Event ';
        }
    }
}