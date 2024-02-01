<?php
class file{
    public $filename;
    public $size;
    public function fileExtentions(){
        $extention = explode(".", $this->filename);
        return end($extention);
    }
    public function fileInfo(){
        echo "Filename : $this->filename <br> Filesize : $this->size KB;";
    }
}
$file = new file();
$file->filename = "hello.php";
$file->size = 2056;

echo "File extention : ". $file->fileExtentions() . "<br>";
$file->fileInfo();
?>