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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lutarr' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '2Msx)E3kKlmkK(,4W-5 f!,,=!Vl;, wldBco6Ufj6dX.gtt~j ukjvFU4Tqs0Dl' );
define( 'SECURE_AUTH_KEY',  'B&3hMY$^4^QkXBJkhkf;]];-zpY2Hl{QS?W):/4:?DA]$W>,n$D#[>qI,as8$x7O' );
define( 'LOGGED_IN_KEY',    '$ [[s(DqBWJ>jcHy6,bcNsN7szjVij9Gps|1G=R}T_G)6C|LEd1gHcp3RJl@IfZ+' );
define( 'NONCE_KEY',        'C (RON5[Tfq6RXq4ilFff4[ijkkPUGgG!`j[NbP+EOp=H$)l,T-Iac.fSnda;C+-' );
define( 'AUTH_SALT',        '~^~ZsLvRpUNHyg[8jr2,vU}|csgE<76lW0pz4!U}(.|b<DV#ibjR{/f^tou& 2Er' );
define( 'SECURE_AUTH_SALT', 'Nwn#)(Hu#JEq{p0dpkWPX,i]:L%<I[*i%A8%sz];xX1fFbY-Aww;WqQZ/=RnMR#Z' );
define( 'LOGGED_IN_SALT',   'u7UHvVg$~)Gx)y+Akbvu{7upu$u%vT6w*d/U~0x.Puo?> k=%:^V;%}[ R&u=Jew' );
define( 'NONCE_SALT',       '`1.J5R@V7aS V3{Yr:mn/Mu1:5So(abTnA;1z;8jq(,rStm$V<mMJ+z7|2_jLZfO' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'lut_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
