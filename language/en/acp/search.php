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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Here you can manage the search backend’s indexes. Since you normally use only one backend you should delete all indexes that you do not make use of. After altering some of the search settings (e.g. the number of minimum/maximum chars) it might be worth recreating the index so it reflects those changes.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Here you can define what search backend will be used for indexing posts and performing searches. You can set various options that can influence how much processing these actions require. Some of these settings are the same for all search engine backends.',

	'COMMON_WORD_THRESHOLD'					=> 'Common word threshold',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Words which are contained in a greater percentage of all posts will be regarded as common. Common words are ignored in search queries. Set to zero to disable. Only takes effect if there are more than 100 posts. If you want words that are currently regarded as common to be reconsidered you have to recreate the index.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Are you sure you wish to switch to a different search backend? After changing the search backend you will have to create an index for the new search backend. If you don’t plan on switching back to the old search backend you can also delete the old backend’s index in order to free system resources.',
	'CONTINUE_DELETING_INDEX'				=> 'Continue previous index removal process',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'An index removal process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CONTINUE_INDEXING'						=> 'Continue previous indexing process',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'An indexing process has been started. In order to access the search index page you will have to complete it or cancel it.',
	'CREATE_INDEX'							=> 'Create index',

	'DEFAULT_SEARCH_RETURN_CHARS'			=> 'Default number of returned characters',
	'DEFAULT_SEARCH_RETURN_CHARS_EXPLAIN'	=> 'The default number of characters that will be returned while searching. A value of 0 will return the entire post.',
	'DELETE_INDEX'							=> 'Delete index',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Deleting the index in progress',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'The search backend is currently cleaning its index. This can take a few minutes.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'The MySQL fulltext backend can only be used with MySQL4 and above.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'MySQL fulltext indexes can only be used with MyISAM or InnoDB tables. MySQL 5.6.8 or later is required for fulltext indexes on InnoDB tables.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Jumlah total post indeks',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'   => 'Kata-kata dengan jumlah paling tidak sebanyak karakter ini akan diindeks untuk pencarian. Anda ataupun host anda hanya bisa mengubah pengaturan ini dengan mengubah konfigurasi mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Kata kata dengan jumlah yang tidak lebih banyak dari karakter ini akan diindeks untuk pencarian. Anda ataupun host anda hanya bisa mengubah pengaturan ini dengan mengubah konfigurasi mysql.',
	
	// INDEX LANGUANGES
	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'The PostgreSQL fulltext backend can only be used with PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Total number of indexed posts',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL version',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Text search Configuration Profile:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum word length for keywords',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum word length for keywords',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'This search backend requires PostgreSQL version 8.3 and above.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'The Text search configuration profile used to determine the parser and dictionary.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Words with at least this many characters will be included in the query to the database.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Words with no more than this many characters will be included in the query to the database.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configure the following settings to generate sphinx config file',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Path to data directory',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Number of posts in frequently updated delta index',
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Number of posts in main index',
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config file',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon. Replace the [dbuser] and [dbpassword] placeholders with your database credentials.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data directory path is not defined. Please define the path and submit to generate the config file.',
	// INDEX LANGUANGES

	'GENERAL_SEARCH_SETTINGS'				=> 'Pengaturan pencarian general',
	'GO_TO_SEARCH_INDEX'					=> 'Pergi ke halaman pencarian indeks',

	'INDEX_STATS'							=> 'Statistik indeks',
	'INDEXING_IN_PROGRESS'					=> 'Proses indeks sedang dalam progres',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Backend pencarian sedang melalukan indeks terhadap semua post halaman. Ini bisa memakan waktu dari beberapa menit sampai beberapa jam tergantung pada ukuran halaman anda.',

	'LIMIT_SEARCH_LOAD'						=> 'Sistem pencarian halaman batas load',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Jika load sistem melebihi waktu 1 menit maka halaman pencarian akan menjadi offline, 1.0 sama dengan ~100% utilisasi dari satu prosesor. Ini merupakan fungsi dari server-server UNIX saja.',

	'MAX_SEARCH_CHARS'						=> 'Karakter maksimum yang diindeks oleh pencarian',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Kata dengan jumlah karakter yang tidak melebihi jumlah ini akan diindeks untuk pencarian.',
    'MAX_NUM_SEARCH_KEYWORDS'				=> 'Kata kunci maksimum yang diijinkan',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Jumlah maksimum kata yang diijinkan untuk dicari oleh pengguna. Nilai 0 mengijinkan untuk tidak membatasi jumlah kata.',
	'MIN_SEARCH_CHARS'						=> 'Karakter minimum yang diindeks oleh pencarian',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Kata dengan jumlah karakter yang lebih kecil dari jumlah ini akan diindeks untuk pencarian.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Karakter minimal nama pengarang',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Paling sedikitnya pengguna harus memasukkan karakter sejumlah ini untuk nama pada saat menggunakan wildcard pencarian nama pengarang. Jika nama pengguna pengarang lebih pendek dari jumlah ini, anda masih bisa mencari pengarang post dengan memasukkan nama lengkap.',

	'PROGRESS_BAR'							=> 'Bar progres',

	'SEARCH_GUEST_INTERVAL'					=> 'Interval flood pencarian tamu',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Jumlah tamu kedua yang harus menunggu antar pencarian. Jika satu tamu sedang melakukan pencarian, maka semua tamu yang lain harus menunggu sampai batas interval waktu ditempuh.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Semua post sampai ke id post %2$d telah diindeks sekarang, dan id post %1$d masih dalam tahap ini.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'Kecepatan indeks saat ini adalah kira-kira %1$.1f post per detik.<br />Indeks sedang dalam progres…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Semua post sampai ke id post %2$d telah disingkirkan dari indeks pencarian., salah satunya %1$d pos dengan langkah ini.<br />',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'Kecepatan hapus saat ini adalah kira-kira %1$.1f post per detik.<br />Penghapusan sedang dalam progres…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Berhasil melakukan indeks semua post pada database halaman.',
	'SEARCH_INDEX_REMOVED'					=> 'Berhasil menghapus indeks pencarian dari backend ini.',
	'SEARCH_INTERVAL'						=> 'Interval flood pencarian pengguna',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Jumlah detik yang harus ditunggu pengguna antar pencarian. Interval ini dicek dengan bebas untuk semua pengguna.',
	'SEARCH_STORE_RESULTS'					=> 'Panjang cache hasil pencarian',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Cache hasil pencarian akan berakhir setelah waktu ini, dalam detik. Buat menjadi 0 jika anda ingin menonaktifkan cache pencarian.',
	'SEARCH_TYPE'							=> 'Backend pencarian',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB mengijinkan anda untuk memilih backend yang digunakan untuk mencari teks di dalam isi post. Secara defaultnya pencarian akan menggunakan pencarian fulltext phpBB sendiri.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Anda mengganti backend pencarian. Untuk menggunakan backend pencarian yang baru anda seharusnya yakin ada sebuah indeks untuk backend yang anda pilih.',

	'TOTAL_WORDS'							=> 'Jumlah total kata-kata indeks',
	'TOTAL_MATCHES'							=> 'Jumlah total dari kata ke indeks post yang berhubungan',

	'YES_SEARCH'							=> 'Aktifkan fasilitas pencarian',
	'YES_SEARCH_EXPLAIN'					=> 'Aktifkan pengguna untuk bisa menggunakan fungsi pencarian termasuk pencarian anggota.',
	'YES_SEARCH_UPDATE'						=> 'Aktifkan perbarui fulltext',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Memperbarui fulltext pada saat posting, kecuali jika pencarian dinonaktifkan.',
));
