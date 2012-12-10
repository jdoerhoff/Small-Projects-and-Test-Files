<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * write out a file to disk
 *
 * @param string $filename
 * @param string $contents
 * @param boolean $create_dirs
 * @return boolean
 */
function smarty_core_write_file($params, &$smarty)
{
    $_dirname = dirname($params['filename']);

    if ($params['create_dirs']) {
        $_params = array('dir' => $_dirname);
        require_once(SMARTY_CORE_DIR . 'core.create_dir_structure.php');
        smarty_core_create_dir_structure($_params, $smarty);
    }

    // write to tmp file, then rename it to avoid file locking race condition
    $_tmp_file = newtempnam($_dirname, 'wrt');

    if (!($fd = @fopen($_tmp_file, 'wb'))) {
        $_tmp_file = $_dirname . DIRECTORY_SEPARATOR . uniqid('wrt');
        if (!($fd = @fopen($_tmp_file, 'wb'))) {
            $smarty->trigger_error("problem writing temporary file '$_tmp_file'");
            return false;
        }
    }

    fwrite($fd, $params['contents']);
    fclose($fd);

    if (DIRECTORY_SEPARATOR == '\\' || !@rename($_tmp_file, $params['filename'])) {
        // On platforms and filesystems that cannot overwrite with rename() 
        // delete the file before renaming it -- because windows always suffers
        // this, it is short-circuited to avoid the initial rename() attempt
        @unlink($params['filename']);
        @rename($_tmp_file, $params['filename']);
    }
    @chmod($params['filename'], $smarty->_file_perms);

    return true;
}

/* vim: set expandtab: */
function newtempnam($dir, $prefix, $postfix=''){
    /* Creates a new non-existant file with the specified post and pre fixes */
    
    if ($dir[strlen($dir) - 1] == '/') {
        $trailing_slash = "";
    } else {
        $trailing_slash = "/";
    }
    /*The PHP function is_dir returns true on files that have no extension.
    The filetype function will tell you correctly what the file is */
    if (!is_dir(realpath($dir)) || filetype(realpath($dir)) != "dir") {
        // The specified dir is not actualy a dir
        return false;
    }
    if (!is_writable($dir)){
        // The directory will not let us create a file there
        return false;
    }
    
    do{
        $seed = substr(md5(microtime().posix_getpid()), 0, 8);
        $filename = $dir . $trailing_slash . $prefix . $seed . $postfix;
    } while (file_exists($filename));
    $fp = fopen($filename, "w");
    fclose($fp);
    return $filename;
}
?>