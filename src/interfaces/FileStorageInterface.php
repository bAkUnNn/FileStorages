<?php

namespace FileStorage\interfaces;
/**
 *
 * @author 42195
 */
interface FileStorageInterface {
    
    function getData(string $remote_path) : string|false;
    function get(string $remote_path, string $local_path = null) : bool;
    
    function putData(string $data, string $remote_path) : bool;
    function put(string $local_path, string $remote_path) : bool;
    
    function share(string $remote_path) : string;
    function ls(string $remote_path = ".") : array;
    function mkdir(string $remote_path) : bool;
    function mv(string $from, string $to) : bool;
    function cp(string $from, string $to) : bool;
    function rm(string $remote_path) : bool;
}
