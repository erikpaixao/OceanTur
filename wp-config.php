<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'trks_ocean');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$ )(o%`:))V3H ylO4uBAdPr3%s.5byWa.>!L;Oj^E20GF^Q@k]S3c`?,4w~Z~ac');
define('SECURE_AUTH_KEY',  '28^nS_S<yNMekK~D}lkP5b!]Ku<dd|QwgJ>IpA8RcQ.i,-j]Ae-Y_(~!tS!;uY=C');
define('LOGGED_IN_KEY',    ':NzB$KpC7bx.oPg.I/U70&v-}P-t@E_R&RRc6}$5Hew`Oin-C{FptPeGe[6$La=a');
define('NONCE_KEY',        't-sCVRrn!#dNJ:33V/@?kWQC: V+z>Wj6z|%50~}|z{dU8C=7#8^9Ag5n qa(B)A');
define('AUTH_SALT',        'tTbYOdz [8B9YZ~E40X k)PtMZm=hET1Ar~Kb?8c)&V~{`M3L:m)]Wr$El%#ZP+]');
define('SECURE_AUTH_SALT', 'o^V~62X-Q:A%0E@e^(.8;a|8#Ew h|luuGNS#q4GK0T*o@p^NiX=i2@MYv0+/z;{');
define('LOGGED_IN_SALT',   '_BOLT~Jfv?M1b=`z$W-@F*WOyvtWY6yp]Xsp_Pa@^jB7L.$mHjW#^i4f%o:l_7UN');
define('NONCE_SALT',       's-`>VeMG<3A?m&S||!Ct@zA~46@%=F3x)8g DkkA4tyP-#6d+UitH-r/Y`iV8_^I');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ocean_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
