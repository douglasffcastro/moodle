<?php
class block_sitenotification extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_sitenotification');
    }

    function has_config() { return true; }

    public function hide_header() {
        return true;
    }

    public function get_content() {
        if($this->has_config() && get_config('block_sitenotification', 'enabled')) {
            $message = get_config('block_sitenotification', 'notificationmessage');
            $color   = get_config('block_sitenotification', 'notificationalertcolor');

            $this->content       = new stdClass();
            $this->content->text = '<div class="alert alert-'.$color.'">'.
                                        $message.
                                    '</div>';

            return $this->content;
        }else {
            $this->content = NULL;
        }
    }

    public function instance_allow_multiple() {
        return true;
    }
}