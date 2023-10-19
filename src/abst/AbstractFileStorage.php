<?php

namespace FileStorage\abst;
use FileStorage\interfaces\FileStorageInterface;
/**
 * Description of AbstractFileStorage
 *
 * @author 42195
 */
abstract class AbstractFileStorage implements FileStorageInterface {
    
    protected string $root_dir;
    protected string $current_dir;
    protected string $remote_dir;
    
    public function getRootDir() : string {
        return $this->root_dir;
    }
    public function setRootDir(string $root_dir) : void {
        $this->root_dir = $root_dir;
    }
    public function getCurrentDir() : string {
        return $this->current_dir;
    }
    public function setCurrentDir(string $current_dir) : void {
        $this->current_dir = $current_dir;
    }
    public function getRemoteDir() : string {
        return $this->remote_dir;
    }
    public function setRemoteDir($remote_dir) {
        $this->remote_dir = $remote_dir;
    }
}
