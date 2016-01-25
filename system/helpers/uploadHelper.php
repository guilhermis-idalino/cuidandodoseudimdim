<?php

class uploadHelper {

    protected $path = 'uploads/', $file, $fileName, $fileTmpName;

    public function setPath($path) {
        $this->path = $path;
        return $this;
    }

    public function setFile($file) {
        $this->file = $file;
        $this->setFileName();
        $this->setFileTmpName();
        return $this;
    }

    public function setFileName() {
        $this->fileName = $this->file['name'];
    }

    public function setFileTmpName() {
        $this->fileTmpName = $this->file['tmp_name'];
    }

    public function upload() {
        if (move_uploaded_file($this->fileTmpName, $_SERVER['DOCUMENT_ROOT'] . $this->path . $this->fileName)) {
            return true;
        } else {
            return false;
        }
    }

}
