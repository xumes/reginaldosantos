<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'zrkfcwog3wy1eiq0');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'tahsu7d8uzn8oa03');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'xzbodf8ro1tzputa');

/** Nome do host do MySQL */
define('DB_HOST', 'olxl65dqfuqr6s4y.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_ J5c][#h_iT#ePJm}Q,EV*K>Q=h@tvlp=|G`($c;vMB-cTWL6G54LcN2t}&X~,A');
define('SECURE_AUTH_KEY',  '9(TIjb`^M~xMfz6v!zW,yrk~S)Nk~=HQg>CCW*fgb7PKHFQeD%5OpuG$#c09CC3f');
define('LOGGED_IN_KEY',    'N8S~Sz-^/G%lsA{:q7;+qtKv`i&BGtK!q[.ik!d%geO*<,[`%Z`8Kg:?e/d]whCL');
define('NONCE_KEY',        'K!#3tx%7ey EO)6+>J{RK`^$#Q5YdcwS?INR7E(6,]u|:hEKJFi|t@wCZi5&!6GH');
define('AUTH_SALT',        'e ?&)>1?/gm1Q<kY#)Fo{MD%ef9:EyY.lF{9w9l}k+XJ:!O_N?1tvT1s[F|mB*FR');
define('SECURE_AUTH_SALT', '1Gu@W1M5>MlV;*q+1NRt1&esw6~@;3*#!sqvQVTj,*w-hH8kgbo%5?yiIQ9L#5{C');
define('LOGGED_IN_SALT',   '$N~7oWVQPeSH^>ry~6udS](h~/nDvdgr6+N 8ZGXOso;m~vJv$v+&yGa|#Z+|;Zn');
define('NONCE_SALT',       '-u|qMnD3p8fhHd@]wTm|xURsljv92PzDLr[=1nXb8^%5l+7IzL~zgFfNj@pkh7zo');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
