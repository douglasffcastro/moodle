<?php
class block_blockexample extends block_base {
    public function init() {
        $this->title = get_string('blockexample', 'block_blockexample');
    }
    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }
    
        $this->content         =  new stdClass;
        $this->content->text   = 'Here is the content of block!';
        $this->content->footer = 'The footer is here.';
     
        return $this->content;
    }   
}