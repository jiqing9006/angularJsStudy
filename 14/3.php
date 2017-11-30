<?php
/**
 * @author jim
 * @date 2017/11/30/030
 *
 */

$data = json_decode($_POST['data'],true);

$title = $data['title'];

echo $title;

