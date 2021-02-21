<?php

namespace Observer;


use SplObserver;

class Blog implements \SplSubject
{

    public $title;
    public $text;
    private $_observers = [];

    public function __construct()
    {
        $this->_observers['all'] = [];
    }

    public function attach(SplObserver $observer, string $event = 'all')
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }
        $this->_observers[$event][] = $observer;
    }

    public function detach(SplObserver $observer, string $event = 'all')
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }
        $observers = array_merge($this->_observers[$event], $this->_observers['all']);
        foreach ($observers as $key => $item) {
            if ($observer === $item) {
                unset($observers[$event][$key]);
            }
        }
    }

    public function notify(string $event = 'all', $data = null)
    {
        if (!isset($this->_observers[$event])) {
            $this->_observers[$event] = [];
        }
        $observers = array_merge($this->_observers[$event], $this->_observers['all']);
        foreach ($observers as $key => $item) {
            $item->update($this, $event, $data);
        }
    }

    public function create()
    {
        echo 'Create';
        $this->notify('Blog:Create');
    }

    public function update()
    {
        echo 'Update';
        $this->notify('Blog:Update');
    }

    public function delete()
    {
        echo 'Delete';
        $this->notify('Blog:Delete');
    }
}