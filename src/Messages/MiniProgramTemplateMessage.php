<?php
namespace Rooy\LaravelNotification\Messages;

class MiniProgramTemplateMessage extends WechatTemplateMessage
{
    public function formId($formId)
    {
        $this->message['form_id'] = $formId;
        return $this;
    }
}

