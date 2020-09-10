<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_STYLES_EXPLAIN'						=> 'Di sini anda dapat mengatur semua gaya-gaya yang tersedia pada halaman anda.<br>Please note you cannot uninstall the “<strong>prosilver</strong>” style as it is phpBB’s default and primary parent style.',

	'CANNOT_BE_INSTALLED'						=> 'Tidak dapat diinstall',
	'CONFIRM_UNINSTALL_STYLES'					=> 'Anda yakin ingin mencopot gaya yang dipilih?',
	'COPYRIGHT'									=> 'Hak cipta',

	'DEACTIVATE_DEFAULT'						=> 'Anda tidak dapat menon-aktifkan gaya bawaan.',
	'DELETE_FROM_FS'							=> 'Hapus dari berkas system',
	'DELETE_STYLE_FILES_FAILED'					=> 'Eror ketika menghapus berkas "%s".',
	'DELETE_STYLE_FILES_SUCCESS'				=> 'Berkas untuk gaya "%s" have sudah dihapus.',
	'DETAILS'									=> 'Informasi',

	'INHERITING_FROM'							=> 'Termasuk dalam',
	'INSTALL_STYLE'								=> 'Pasang gaya',
	'INSTALL_STYLES'							=> 'Pasang gaya',
	'INSTALL_STYLES_EXPLAIN'					=> 'Di sini anda dapat menginstal gaya baru dan gaya jika sesuai dengan elemen gaya. Jika anda sudah memiliki elemen gaya yang diinstal, maka tidak akan ditulis ulang lagi. Beberapa gaya membutukan elmemen yang sudah ada sebelumnya diinstal. Jika anda mencoba menginstall sebuah gaya namun tidak memiliki elemen yang dibutuhkan, maka anda akan diberitahukan.',
	'INVALID_STYLE_ID'							=> 'ID gaya tidak ada.',

	'NO_MATCHING_STYLES_FOUND'					=> 'Tidak ada gaya yang Anda cari.',
	'NO_UNINSTALLED_STYLE'						=> 'Tidak ada gaya yang dicopot.',

	'PURGED_CACHE'								=> 'Cache telah disegarkan.',

	'REQUIRES_STYLE'							=> 'Gaya ini membutuhkan tema %s untuk diinstal.',

	'STYLE_ACTIVATE'							=> 'Aktifkan',
	'STYLE_ACTIVE'								=> 'Aktif',
	'STYLE_DEACTIVATE'							=> 'Non-aktifkan',
	'STYLE_DEFAULT'								=> 'Buat gaya menjadi bawaan',
	'STYLE_DEFAULT_CHANGE_INACTIVE'				=> 'Anda haus mengaktifkan gaya, sebelum Anda menjadikan bawaan.',
	'STYLE_ERR_INVALID_PARENT'					=> 'Inang gaya tidak tersedia.',
	'STYLE_ERR_NAME_EXIST'						=> 'Gaya dengan nama tersebut sudah ada.',
	'STYLE_ERR_STYLE_NAME'						=> 'Anda harus memberikan sebuah nama untuk gaya ini.'
	'STYLE_INSTALLED'							=> 'Gaya "%s" berhasil dipasang.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Kembali ke daftar gaya yang dipasang',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Pasang banyak gaya',
	'STYLE_NAME'								=> 'Nama gaya',
	'STYLE_NAME_RESERVED'						=> 'Gaya "%s" tidak dapat dipasang, karena namanya terkait atau serupa.',
	'STYLE_NOT_INSTALLED'						=> 'Gaya "%s" tidak dapat dipasang.',
	'STYLE_PATH'								=> 'Akar gaya',
	'STYLE_UNINSTALL'							=> 'Copot',
	'STYLE_UNINSTALL_DEPENDENT'					=> 'Gaya "%s" tidak dapat dicopot karena memiliki cabang.',
	'STYLE_UNINSTALLED'							=> 'Gaya "%s" berhasil dicopot.',
	'STYLE_PHPBB_VERSION'						=> 'Versi phpBB',
	'STYLE_USED_BY'								=> 'Digunakan oleh (termasuk robots)',
	'STYLE_VERSION'								=> 'Versi gaya',

	'UNINSTALL_PROSILVER'						=> 'Anda tidak dapat mencopot tema “prosilver”.',
	'UNINSTALL_DEFAULT'							=> 'Anda tidak dapat mencopot tema bawaan.',

	'BROWSE_STYLES_DATABASE'					=> 'Browse styles database',
]);
