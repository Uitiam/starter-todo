<?php
class Helpme extends Application
{

    public function index()
    {
        $this->data['pagetitle'] = 'Help Wanted!';
        $this->data['pagebody'] = 'helpme';
        $stuff = file_get_contents('../data/jobs.md');
        $this->data['content'] = $this->parsedown->parse($stuff);
        $this->render();
    }

}
