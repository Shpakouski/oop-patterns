<?php

namespace Strategy;


class ImagesSave extends BaseSave
{
    public function save()
    {
        if (file_exists('classes/Strategy/tmp/' . $this->filePath)) {
            copy('classes/Strategy/tmp/' . $this->filePath, 'classes/Strategy/images/' . $this->filePath);
        }
    }
}