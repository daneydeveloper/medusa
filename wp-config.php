<?php
/** Enable W3 Total Cache */
define( 'WP_CACHE', true ); // Added by W3 Total Cache

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
define('DB_NAME', 'medusa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|J6pVB-vYMBQGZEq<Z{SD0Msp4A_Hu8:k5_zWLTyjmdJQt;`|9iR3AA>aq!STW&5');
define('SECURE_AUTH_KEY',  '+vyFXv9@*/]&[vMxpJ|2G5>tpk~jRW<CBN3~aQRJZDOIuy^_}E3i{W98EA,-c{5{');
define('LOGGED_IN_KEY',    'S9NdHgE8epe40T7@O5|B5(!CUE&2aNDIBY7n9Z74F&tC8;UidQU6S!|R8)yY:=ci');
define('NONCE_KEY',        '|o<PB/4+]x?3kTJ!#.Lo0}Z`z>Z#y&W^*%p@7B]/qT*^c3xd6=tKmQ]]UEN]*a18');
define('AUTH_SALT',        'F(O5]{Jk9HzVta56G 0j+sz@Z&(WP.*[Vd&+sUpjZY}kQATqajId`;WJm<# ^Th|');
define('SECURE_AUTH_SALT', '!K?N7_utDy(%,_7MY-g%P%~7N%t04H::r8kb{Iy0jftF*A!mz>.X_hI,o_2mzX!*');
define('LOGGED_IN_SALT',   'ZvjA<xe<.*mssNq9d6TN4peIJl{9cNxjJ[`[2BF<n9VzAHWjX[0H!N!ZE`obkK%}');
define('NONCE_SALT',       'oyNpzr[t]C,.ff1>5UPRK_TByz2@o<T}_:oK5BKgFhdTn,0 CT>3I{uViO28oTyW');

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
