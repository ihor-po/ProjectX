<form method="POST" enctype="multipart/form-data">
	<input type="file" name="myFile">
	<button type="submit">Upload</button>
</form>

<?php

error_reporting(E_ALL); 
ini_set('display_errors', 1);

// Проверяем файл на ошибки
if (
    isset($_FILES['myFile']['error']) &&
    0 !== $_FILES['myFile']['error']
) {
    die("Файл содержит ошибки! Загрузите другой файл.");
}

// Проверяем размер файла
if ($_FILES['myFile']['size'] > 1000000) {
    die('Файл больше допустимого размера.');
}

// Проверяем тип файла
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $finfo->file($_FILES['myFile']['tmp_name']);
$validTypes = [
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
    ];

$ext = array_search( $mimeType, $validTypes, true);

if (false === $ext) {
    die('Данный формат запрещен. Загрузите jpg, png или gif.');
}

//You should name it uniquely.
//DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
//On this example, obtain safe unique name from its binary data.
$newFile = sha1_file($_FILES['myFile']['tmp_name']);

$newFile = sprintf('uploads/img/%s.%s', $newFile, $ext);

if (!move_uploaded_file($_FILES['myFile']['tmp_name'], $newFile)) {
    throw new RuntimeException('Failed to move uploaded file.');
}

echo 'File is uploaded successfully.';