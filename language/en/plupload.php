<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'PLUPLOAD_ADD_FILES'		=> 'Tambahkan berkas',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Tambahkan berkas ke dalam antrian kemudian klik unggah.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s sudah ada di antrian.',
	'PLUPLOAD_CLOSE'			=> 'Tutup',
	'PLUPLOAD_DRAG'				=> 'Seret berkas ke sini.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Eror duplikasi berkas.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Anda dapat menambahkan berkas dengan menyeret atau menaruh di bok pesan.',
	'PLUPLOAD_ERR_INPUT'		=> 'Gagal untuk memasukan.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Gagal untuk memindahkan berkas terunggah.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Gagal untuk mengeluarkan.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'Berkas terlalu besar:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Eror menghitung berkas.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Extensi berkas tidak valid:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Runtime ran out of available memory.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'Unggah dengan url yang salah atau tidak tersedia.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Extensi berkas error.',
	'PLUPLOAD_FILE'				=> 'Berkas: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'Berkas: %s, ukuran: %d, mak ukuran berkas: %d',
	'PLUPLOAD_FILENAME'			=> 'Nama berkas',
	'PLUPLOAD_FILES_QUEUED'		=> '%d berkas diantrian',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Generic error.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP error.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Format gambar yang salah.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init error.',
	'PLUPLOAD_IO_ERROR'			=> 'IO error.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Keamanan error.',
	'PLUPLOAD_SELECT_FILES'		=> 'Pilih berkas',
	'PLUPLOAD_SIZE'				=> 'Ukuran',
	'PLUPLOAD_SIZE_ERROR'		=> 'Ukuran berkas error.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Mulai mengunggah',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Mulai mengunggah ke antrian',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Berhenti mengunggah',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Berhenti mengunggah sekarang',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Terunggah %d/%d berkas',
));
