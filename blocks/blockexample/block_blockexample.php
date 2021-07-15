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
        $this->content->text   = 'Tudo que estiver aqui está no body do bloco';
        $this->content->footer = 'E aqui tudo que for o footer do bloco.';
     
        return $this->content;
    }

    public function specialization() {
        if (isset($this->config)) {
            if (empty($this->config->title)) {
                $this->title = get_string('defaulttitle', 'block_blockexample');            
            } else {
                $this->title = $this->config->title;
            }
    
            if (empty($this->config->text)) {
                $this->config->text = get_string('defaulttext', 'block_blockexample');
            }    
        }
    }

    function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return true;
    }
}
